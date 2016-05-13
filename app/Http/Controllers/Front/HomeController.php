<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Front\Controller;
use App\Storage\ProductRepositoryInterface as ProductRepository;
use App\Storage\IntroducePolicyRepositoryInterface as IntroducePolicyRepository;
use App\Storage\ProductCategoryRepositoryInterface as CategoryRepository;

class HomeController extends Controller
{
	private $productRepository;
    private $categoryRepository;
    private $introducePolicyRepository;

	public function __construct(
                                CategoryRepository $categoryRepository,
                                ProductRepository $productRepository,
                                IntroducePolicyRepository $introducePolicyRepository
                                )
	{
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
		$this->introducePolicyRepository = $introducePolicyRepository;
	}

    public function index()
    {
        $products = $this->productRepository->all();
        $categories = $this->categoryRepository->getproductCategory();

        return view('front.index')->with(['products' => $products, 'categories' => $categories]);
    }

    // public function payment()
    // {
    // 	return view('front.policy.payment');
    // }

    // public function preference()
    // {
    // 	return view('front.policy.preference');
    // }

    // public function promotion()
    // {
    //     return view('front.policy.promotion');
    // }

    // public function buyGuide()
    // {
    //     return view('front.policy.buyGuide');
    // }

    // public function regulation()
    // {
    //     return view('front.policy.regulation');
    // }

    // public function delivery()
    // {
    //     return view('front.policy.delivery');
    // }

    // public function about()
    // {
    //     return view('front.policy.about');
    // }

    // public function transport()
    // {
    //     return view('front.policy.transport');
    // }

    public function getSearch(Request $request)
    {
        $products = $this->productRepository->getProductBySearch($request);

        return view('front.search')->with(['products' => $products]);
    }

    public function getPolicy($slug)
    {
        $policy = $this->introducePolicyRepository->findBySlug($slug);

        return view('front.policy.detail')->with(['policy' => $policy]);
    }
}
