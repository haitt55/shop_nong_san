<?php

namespace App\Storage\Eloquent;

use App\Storage\ProductRepositoryInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\DB;

class ProductRepository extends Repository implements ProductRepositoryInterface
{
    public function findBySlug($slug)
    {
        return $this->model->findBySlug($slug);
    }

    public function updateDiscount($arrRequest, $mode = '')
    {
        DB::beginTransaction();
        if ($mode == 'clear') {
            $arrKey = array_keys($arrRequest['check_discount']);
            foreach ($arrRequest['discount'] as $k => $v) {
                if (in_array($k, $arrKey)) {
                    $model = $this->findOrFail($k);
                    $model->discount = 0;
                    if (!$model->save()) {
                        DB::rollBack();
                    }
                }
            }
        } else {
            foreach ($arrRequest['discount'] as $k => $v) {
                $model = $this->findOrFail($k);
                $model->discount = $v;
                if (!$model->save()) {
                    DB::rollBack();
                }
            }
        }
        DB::commit();
    }
    
    public function getListProductByCategory($categoryId)
    {
        // $category = \App\Models\ProductCategory::find($categoryId);

    	return $this->model->where('category_id', $categoryId)->get();
    }

    public function getProductDiscount()
    {
    	return $this->model->where('discount', '!=', 0)->get();
    }

    public function getProductBySearch($request)
    {
        if(isset($request->search)) {
            $products = $this->model->where('name', 'LIKE', '%' . $request->search . '%')->get();
        }

        return $products;
    }
}
?>