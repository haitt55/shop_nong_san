<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Storage\ArticleRepositoryInterface as ArticleRepository;
use App\Http\Requests\AddImageRequest;
use App\Services\AddImageToArticle;

class NewImagesController extends Controller
{
    protected $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($articleId, AddImageRequest $request)
    {
        $article = $this->articleRepository->findOrFail($articleId);
        $image = $request->file('image');

        (new AddImageToArticle($article, $image))->save();

        return response()->json();
    }
}
