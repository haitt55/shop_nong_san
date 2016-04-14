<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\NewsCategoryRequest;
use App\Http\Controllers\Admin\Controller;
use App\Storage\NewsCategoryRepositoryInterface as NewsCategoryRepository;
use App\Events\NewsCategory\WasCreated as NewsCategoryWasCreated;
use App\Events\NewsCategory\WasUpdated as NewsCategoryWasUpdated;
use App\Events\NewsCategory\WasDeleted as NewsCategoryWasDeleted;
use App\Events\ExceptionOccurred;

class NewsCategoriesController extends Controller
{
    protected $categoryRepository;

    public function __construct(NewsCategoryRepository $categoryRepository)
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

        return view('admin.news_categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsCategoryRequest $request)
    {
        $category = $this->categoryRepository->create($request->all());

        event(new NewsCategoryWasCreated($category));

        return redirect()->route('admin.news_categories.index');
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

        return view('admin.news_categories.show', compact('category'));
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

        return view('admin.news_categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsCategoryRequest $request, $id)
    {
        $category = $this->categoryRepository->update($id, $request->all());

        event(new NewsCategoryWasUpdated($category));

        return redirect()->route('admin.news_categories.index');
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

        event(new NewsCategoryWasDeleted());

        return response()->json();
    }
}

