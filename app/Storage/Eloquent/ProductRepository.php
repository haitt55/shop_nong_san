<?php

namespace App\Storage\Eloquent;

use App\Storage\ProductRepositoryInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use App\Models\ProductImage;

class ProductRepository extends Repository implements ProductRepositoryInterface
{
    public function findBySlug($slug)
    {
        return $this->model->findBySlug($slug);
    }

    public function create($data)
    {
        $arrData = $data->all();
        $path = config('product.image_path');
        $image = $data->file('image');
        $productImageData = array();
        if ($image) {
            $name = sha1(time() . $image->getClientOriginalName());
            $extention = $image->getClientOriginalExtension();
            $filename = "{$name}.{$extention}";
            Image::make($image->getRealPath())->save($path . '/' . $filename);
            $productImageData[] = $filename;
        }
        $image1 = $data->file('image1');
        if ($image1) {
            $name1 = sha1(time() . $image1->getClientOriginalName());
            $extention1 = $image1->getClientOriginalExtension();
            $filename1 = "{$name1}.{$extention1}";
            Image::make($image1->getRealPath())->save($path . '/' . $filename1);
            $productImageData[] = $filename1;
        }

        $image2 = $data->file('image2');
        if ($image2) {
            $name2 = sha1(time() . $image2->getClientOriginalName());
            $extention2 = $image2->getClientOriginalExtension();
            $filename2 = "{$name2}.{$extention2}";
            Image::make($image2->getRealPath())->save($path . '/' . $filename2);
            $productImageData[] = $filename2;
        }

        $image3 = $data->file('image3');
        if ($image3) {
            $name3 = sha1(time() . $image3->getClientOriginalName());
            $extention3 = $image3->getClientOriginalExtension();
            $filename3 = "{$name3}.{$extention3}";
            Image::make($image3->getRealPath())->save($path . '/' . $filename3);
            $productImageData[] = $filename3;
        }
        $product = $this->model->create($arrData);
        if ($product) {
            if ($productImageData) {
                foreach ($productImageData as $imagedata) {
                    $productImage = new ProductImage();
                    $productImage->product_id = $product->id;
                    $productImage->name = $imagedata;
                    $productImage->path = $path . '/' . $imagedata;
                    $productImage->save();
                }
            }
            return $product;
        }
        return false;
    }

    public function update($id, $data)
    {
        $model = $this->findOrFail($id);
        $arrData = $data->all();
        $path = config('product.image_path');
        $image = $data->file('image');
        $productImageData = array();
        if ($image) {
            $name = sha1(time() . $image->getClientOriginalName());
            $extention = $image->getClientOriginalExtension();
            $filename = "{$name}.{$extention}";
            Image::make($image->getRealPath())->save($path . '/' . $filename);
            $productImageData[0] = $filename;
        }
        $image1 = $data->file('image1');
        if ($image1) {
            $name1 = sha1(time() . $image1->getClientOriginalName());
            $extention1 = $image1->getClientOriginalExtension();
            $filename1 = "{$name1}.{$extention1}";
            Image::make($image1->getRealPath())->save($path . '/' . $filename1);
            $productImageData[1] = $filename1;
        }

        $image2 = $data->file('image2');
        if ($image2) {
            $name2 = sha1(time() . $image2->getClientOriginalName());
            $extention2 = $image2->getClientOriginalExtension();
            $filename2 = "{$name2}.{$extention2}";
            Image::make($image2->getRealPath())->save($path . '/' . $filename2);
            $productImageData[2] = $filename2;
        }

        $image3 = $data->file('image3');
        if ($image3) {
            $name3 = sha1(time() . $image3->getClientOriginalName());
            $extention3 = $image3->getClientOriginalExtension();
            $filename3 = "{$name3}.{$extention3}";
            Image::make($image3->getRealPath())->save($path . '/' . $filename3);
            $productImageData[3] = $filename3;
        }
        $arrImage = array();
        if ($model->images) {
            $arrImage = $model->images->toArray();
        }

        foreach ($productImageData as $k => $imagedata) {
            if (array_key_exists($k, $arrImage)) {
                $productImage = ProductImage::find($arrImage[$k]['id']);
                $oldPath = $productImage->path;
                $oldThumbnailPath = $productImage->thumbnail_path;
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
                if (file_exists($oldThumbnailPath)) {
                    unlink($oldThumbnailPath);
                }
                $productImage->name = $imagedata;
                $productImage->path = $path . '/' . $imagedata;
                $productImage->save();
            } else {
                $productImage = new ProductImage();
                $productImage->product_id = $model->id;
                $productImage->name = $imagedata;
                $productImage->path = $path . '/' . $imagedata;
                $productImage->save();
            }
        }

        $model->update($arrData);

        return $model;
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
        if (isset($request->search)) {
            $products = $this->model->where('name', 'LIKE', '%' . $request->search . '%')->get();
        }

        return $products;
    }
    

    public function delete($id)
    {
        $productImages = ProductImage::where('product_id', $id)->get();
        if ($productImages) {
            foreach ($productImages as $image) {
                if (file_exists($image->path)) {
                    unlink($image->path);
                }
                if (file_exists($image->thumbnail_path)) {
                    unlink($image->thumbnail_path);
                }
                $image->delete();
            }
        }
        return $this->findOrFail($id)->delete();
    }
}
?>