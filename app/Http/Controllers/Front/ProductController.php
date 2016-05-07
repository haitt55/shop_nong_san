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
    	$categories = $this->productCategoryRepository->getproductCategory();

        return view('front.products.index')->with(['categories' => $categories]);
    }

    public function getProductDetail($id)
    {
    	$product = $this->productRepository->findOrFail($id);
    	$listProducts = $this->productRepository->getListProductByCategory($product->category_id);

    	return view('front.products.detail')->with(['product' => $product, 'listProducts' => $listProducts]);
    }

    public function getDiscount()
    {
    	$productDiscounts = $this->productRepository->getProductDiscount();

    	return view('front.products.discount')->with(['productDiscounts' => $productDiscounts]);
    }
}
