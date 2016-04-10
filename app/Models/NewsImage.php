<?php

namespace App\Models;

use App\Models\BaseModel;

class NewsImage extends BaseModel
{
    protected $table = 'news_images';

    protected $fillable = [
        'name', 'path', 'thumbnail_path'
    ];

    public function news()
    {
        return $this->belongsTo('App\Models\News');
    }

    public function baseDir()
    {
        return config('news.image_path');
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;

        $this->path = $this->baseDir() . '/' . $name;
        $this->thumbnail_path = $this->baseDir() . '/tn-' . $name;
    }
}
