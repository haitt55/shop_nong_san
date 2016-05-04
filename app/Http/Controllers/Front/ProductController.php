<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Front\Controller;
use App\Storage\ProductRepositoryInterface as ProductRepository;
use App\Storage\ProductCategoryRepositoryInterface as ProductCategoryRepository;

class ProductController extends Controller
{
	private $productRepository;

	public function __construct(
		ProductRepository $productRepository,
		ProductCategoryRepository $productCategoryRepository
	) {
		$this->productRepository = $productRepository;
		$this->productCategoryRepository = $productCategoryRepository;
	}

    public function index()
    {
    	$categories = $this->productCategoryRepository->all();
    	dd($categories);
    	$products = $this->productRepository->all();

        return view('front.products.index')->with(['products' => $products]);
    }

    public function getProductDetail($id)
    {
    	$product = $this->productRepository->findOrFail($id);
    	$listProducts = $this->productRepository->getListProductByCategory($product->category_id);
    	// dd($listProducts);

    	return view('front.products.detail')->with(['product' => $product, 'listProducts' => $listProducts]);
    }
}