<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests\ProductCategoryRequest;
use App\Http\Controllers\Front\Controller;
use App\Storage\ProductCategoryRepositoryInterface as CategoryRepository;
use App\Storage\ProductRepositoryInterface as ProductRepository;
use App\Events\ExceptionOccurred;

class ProductCategoryController extends Controller
{
    protected $categoryRepository;
    protected $productRepository;

    public function __construct(
                                CategoryRepository $categoryRepository,
                                ProductRepository $productRepository
                                )
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $category = $this->categoryRepository->findBySlug($slug);
        $products = $this->productRepository->getListProductByCategory($category->id);

        return view('front.product_categories.index')->with(['products' => $products, 'category' => $category]);
    }
}
