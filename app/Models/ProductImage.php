<?php

namespace App\Models;

use App\Models\BaseModel;

class ProductImage extends BaseModel
{
    protected $table = 'product_images';

    protected $fillable = [
        'name', 'path', 'thumbnail_path'
    ];

    public function news()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function baseDir()
    {
        return config('product.image_path');
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;

        $this->path = $this->baseDir() . '/' . $name;
        $this->thumbnail_path = $this->baseDir() . '/tn-' . $name;
    }
}
