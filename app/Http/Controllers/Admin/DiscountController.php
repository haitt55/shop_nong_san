<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\UploadPhotoRequest;
use App\Http\Controllers\Admin\Controller;
use App\Storage\ProductRepositoryInterface as ProductRepository;
use App\Storage\ProductCategoryRepositoryInterface as CategoryRepository;
use App\Events\Product\WasCreated as ProductWasCreated;
use App\Events\Product\WasUpdated as ProductWasUpdated;
use App\Events\Product\WasDeleted as ProductWasDeleted;
use App\Events\ExceptionOccurred;
use Exception;
use App\Services\Photo;

class DiscountController extends Controller
{
    protected $productRepository;

    protected $categoryRepository;

    public function __construct(ProductRepository $productRepository,
                                CategoryRepository $categoryRepository)
    {
        parent::__construct();
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }


    public function discount() {
        $products = $this->productRepository->all();
        $arrUnits = $this->units;

        return view('admin.products.discount', compact('products', 'arrUnits'));
    }

    public function updateDiscount(Request $request) {
        $this->productRepository->updateDiscount($request, $request['mode']);

        return redirect()->route('admin.discount.index');
    }
}