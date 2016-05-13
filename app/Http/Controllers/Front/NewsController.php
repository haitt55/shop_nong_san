<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Http\Controllers\Front\Controller;
use App\Storage\NewsRepositoryInterface as NewsRepository;
use App\Storage\NewsCategoryRepositoryInterface as NewsCategoryRepository;

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

        return view('front.news.index', compact('arrNews'));
    }

    public function getDetail($slug)
    {
        $news = $this->newsRepository->findBySlug($slug);
        $news->views += 1;
        $news->save();
        $arrNews = $this->newsRepository->getNewsByCategory($news->category_id);

        return view('front.news.detail')->with(['news' => $news, 'arrNews' => $arrNews]);
    }

}