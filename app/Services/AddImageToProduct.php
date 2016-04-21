<?php

namespace App\Services;

use App\Models\Product;
use App\Models\ProductImage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AddImageToProduct
{
    protected $product;

    protected $file;

    public function __construct(Product $product, UploadedFile $file, Thumbnail $thumbnail = null)
    {
        $this->product = $product;
        $this->file = $file;
        $this->thumbnail = $thumbnail ? : new Thumbnail;
    }

    public function save()
    {
        $image = $this->product->addImage($this->makeImage());

        // move the image to the images folder
        $this->file->move($image->baseDir(), $image->name);

        // generate a thumbnail
        $this->thumbnail->make($image->path, $image->thumbnail_path);
    }

    protected function makeImage()
    {
        return new ProductImage([
            'name' => $this->makeFileName()
        ]);
    }

    protected function makeFileName()
    {
        $name = sha1(time() . $this->file->getClientOriginalName());
        $extention = $this->file->getClientOriginalExtension();

        return "{$name}.{$extention}";
    }
}

?>