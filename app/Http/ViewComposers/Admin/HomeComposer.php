<?php

namespace App\Http\ViewComposers\Admin;

use Illuminate\Contracts\View\View;
use App\Storage\UserRepositoryInterface as UserRepository;
use App\Storage\PageRepositoryInterface as PageRepository;
use App\Storage\ArticleRepositoryInterface as ArticleRepository;
use App\Storage\MessageRepositoryInterface as MessageRepository;
use App\Storage\IntroducePolicyRepositoryInterface as IntroducePolicyRepository;
use App\Storage\NewsRepositoryInterface as NewsRepository;
use App\Storage\ProductRepositoryInterface as ProductRepository;

class HomeComposer
{
    protected $user;

    protected $page;

    protected $article;

    protected $message;

    protected $introduce_policy;

    protected $news;

    protected $product;

    public function __construct(UserRepository $user,
        PageRepository $page,
        ArticleRepository $article,
        MessageRepository $message,
        IntroducePolicyRepository $introcude_policy,
        NewsRepository $news,
        ProductRepository $product
        )
    {
        $this->user = $user;
        $this->page = $page;
        $this->article = $article;
        $this->message = $message;
        $this->introduce_policy = $introcude_policy;
        $this->news = $news;
        $this->product = $product;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('countPages', $this->page->all()->count());
        $view->with('countArticles', $this->article->all()->count());
        $view->with('countMessages', $this->message->unread()->count());
        $view->with('countUsers', $this->user->all()->count());
        $view->with('countIntroducesPolicies', $this->introduce_policy->all()->count());
        $view->with('countNews', $this->news->all()->count());
        $view->with('countProducts', $this->product->all()->count());
    }
}