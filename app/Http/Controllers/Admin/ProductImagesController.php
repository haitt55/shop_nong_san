<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Storage\ProductRepositoryInterface as ProductRepository;
use App\Http\Requests\AddImageRequest;
use App\Services\AddImageToProduct;

class ProductImagesController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($productId, AddImageRequest $request)
    {
        $product = $this->productRepository->findOrFail($productId);
        $image = $request->file('image');

        (new AddImageToProduct($product, $image))->save();

        return response()->json();
    }
}