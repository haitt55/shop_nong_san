<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ProductCategoryRequest;
use App\Http\Controllers\Admin\Controller;
use App\Storage\ProductCategoryRepositoryInterface as CategoryRepository;
use App\Events\ProductCategory\WasCreated as CategoryWasCreated;
use App\Events\ProductCategory\WasUpdated as CategoryWasUpdated;
use App\Events\ProductCategory\WasDeleted as CategoryWasDeleted;
use App\Events\ExceptionOccurred;

class ProductCategoriesController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->categoryRepository->all();
        $categoryTree = $this->categoryRepository->getTree();

        return view('admin.product_categories.index', compact('categories', 'categoryTree'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryOptions = $this->categoryRepository->getCategoryOptions();

        return view('admin.product_categories.create', compact('categoryOptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCategoryRequest $request)
    {
        $category = $this->categoryRepository->create($request->all());

        event(new CategoryWasCreated($category));

        return redirect()->route('admin.product_categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->categoryRepository->findOrFail($id);

        return view('admin.product_categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->categoryRepository->findOrFail($id);
        $categoryOptions = $this->categoryRepository->getCategoryOptions($id);

        return view('admin.product_categories.edit', compact('category', 'categoryOptions', 'typeOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductCategoryRequest $request, $id)
    {
        $category = $this->categoryRepository->update($id, $request->all());

        event(new CategoryWasUpdated($category));

        return redirect()->route('admin.product_categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->categoryRepository->delete($id);
        } catch (Exception $ex) {
            event(new ExceptionOccurred($ex));

            return response()->json([
                'error' => [
                    'message' => $ex->getMessage(),
                ]
            ]);
        }

        event(new CategoryWasDeleted());

        return response()->json();
    }
}
