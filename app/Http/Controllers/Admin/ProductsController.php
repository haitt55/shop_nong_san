<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Admin\Controller;
use App\Storage\ProductRepositoryInterface as ProductRepository;
use App\Storage\ProductCategoryRepositoryInterface as CategoryRepository;
use App\Events\Product\WasCreated as ProductWasCreated;
use App\Events\Product\WasUpdated as ProductWasUpdated;
use App\Events\Product\WasDeleted as ProductWasDeleted;
use App\Events\ExceptionOccurred;

class ProductsController extends Controller
{
    protected $productRepository;

    protected $categoryRepository;

    public function __construct(ProductRepository $productRepository,
                                CategoryRepository $categoryRepository)
    {
        parent::__construct();
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productRepository->all();
        $arrUnits = $this->units;

        return view('admin.products.index', compact('products', 'arrUnits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryOptions = $this->categoryRepository->getCategoryOptions();
        $arrUnits = $this->units;

        return view('admin.products.create', compact('categoryOptions', 'arrUnits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = $this->productRepository->create($request->all());

        event(new ProductWasCreated($product));

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $category = $this->categoryRepository->findOrFail($id);
//
//        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->findOrFail($id);
        $categoryOptions = $this->categoryRepository->getCategoryOptions();
        $arrUnits = $this->units;

        return view('admin.products.edit', compact('product', 'categoryOptions', 'arrUnits'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = $this->productRepository->update($id, $request->all());

        event(new ProductWasUpdated($product));

        return redirect()->route('admin.products.index');
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
            $this->productRepository->delete($id);
        } catch (Exception $ex) {
            event(new ExceptionOccurred($ex));

            return response()->json([
                'error' => [
                    'message' => $ex->getMessage(),
                ]
            ]);
        }

        event(new ProductWasDeleted());

        return response()->json();
    }
}