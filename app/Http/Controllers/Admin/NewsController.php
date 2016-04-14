<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Http\Controllers\Admin\Controller;
use App\Storage\NewsRepositoryInterface as NewsRepository;
use App\Storage\NewsCategoryRepositoryInterface as NewsCategoryRepository;
use App\Events\ENews\WasCreated as NewsWasCreated;
use App\Events\ENews\WasUpdated as NewsWasUpdated;
use App\Events\ENews\WasDeleted as NewsWasDeleted;
use App\Events\ExceptionOccurred;

class NewsController extends Controller
{
    protected $newsRepository;

    protected $newsCategoryRepository;

    public function __construct(NewsRepository $newsRepository,
                                NewsCategoryRepository $newsCategoryRepository
    )
    {
        $this->newsRepository = $newsRepository;
        $this->newsCategoryRepository = $newsCategoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrNews = $this->newsRepository->all();

        return view('admin.news.index', compact('arrNews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryOptions = $this->newsCategoryRepository->getCategoryOptions();

        return view('admin.news.create', compact('categoryOptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $news = $this->newsRepository->create($request->all());

        event(new NewsWasCreated($news));

        return redirect()->route('admin.news.index');
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
        $news = $this->newsRepository->findOrFail($id);
        $categoryOptions = $this->newsCategoryRepository->getCategoryOptions($id);

        return view('admin.news.edit', compact('news', 'categoryOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        $news = $this->newsRepository->update($id, $request->all());

        event(new NewsWasUpdated($news));

        return redirect()->route('admin.news.index');
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
            $this->newsRepository->delete($id);
        } catch (Exception $ex) {
            event(new ExceptionOccurred($ex));

            return response()->json([
                'error' => [
                    'message' => $ex->getMessage(),
                ]
            ]);
        }

        event(new NewsWasDeleted());

        return response()->json();
    }
}