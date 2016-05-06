<?php

namespace App\Storage\Eloquent;

use App\Storage\ProductRepositoryInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class ProductRepository extends Repository implements ProductRepositoryInterface
{
    public function findBySlug($slug)
    {
        return $this->model->findBySlug($slug);
    }

    public function create($data)
    {
        $arrData = $data->all();
        $name = sha1(time() . $data->file('image')->getClientOriginalName());
        $extention = $data->file('image')->getClientOriginalExtension();
        $filename = "{$name}.{$extention}";
        Image::make($data->file('image')->getRealPath())->save(config('product.image_path'). '/' . $filename);
        $name1 = sha1(time() . $data->file('image1')->getClientOriginalName());
        $extention1 = $data->file('image1')->getClientOriginalExtension();
        $filename1 = "{$name1}.{$extention1}";
        Image::make($data->file('image1')->getRealPath())->save(config('product.image_path'). '/' . $filename1);
        return $this->model->create($data);
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
    	return $this->model->where('category_id', $categoryId)->get();
    }

    public function getProductDiscount()
    {
    	return $this->model->where('discount', '!=', 0)->get();
    }
}
?>