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

    public function payment()
    {
    	return view('front.policy.payment');
    }

    public function preference()
    {
    	return view('front.policy.preference');
    }

    public function promotion()
    {
        return view('front.policy.promotion');
    }

    public function buyGuide()
    {
        return view('front.policy.buyGuide');
    }

    public function regulation()
    {
        return view('front.policy.regulation');
    }

    public function delivery()
    {
        return view('front.policy.delivery');
    }

    public function about()
    {
        return view('front.policy.about');
    }

    public function transport()
    {
        return view('front.policy.transport');
    }
}
