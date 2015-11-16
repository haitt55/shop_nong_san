<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Storage\ArticleRepositoryInterface as ArticleRepository;
use App\Events\ExceptionOccurred;
use Exception;

class ArticlesController extends Controller
{
    protected $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = 10;
        $pagiData = $this->articleRepository->getByPage($page, $perPage, $request);
        $articles = new Paginator(
            $pagiData->items,
            $pagiData->totalItems,
            $perPage,
            $page
        );
        $articles->setPath('articles.html');

        return view('articles.index', compact('articles'));
    }

    public function show($title, $id)
    {
        $article = $this->articleRepository->findOrFail($id);

        return view('articles.show', compact('article'));
    }
}
