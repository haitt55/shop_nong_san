<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Front\Controller;
use App\Storage\ProductRepositoryInterface as ProductRepository;

class HomeController extends Controller
{
	private $productRepository;

	public function __construct(ProductRepository $productRepository)
	{
		$this->productRepository = $productRepository;
	}

    public function index()
    {
    	$products = $this->productRepository->all();

        return view('front.index')->with(['products' => $products]);
    }
}
