<?php

namespace App\Models;

use App\Models\BaseModel;

class ArticleImage extends BaseModel
{
    protected $table = 'article_images';

    protected $fillable = [
        'name', 'path', 'thumbnail_path'
    ];

    public function article()
    {
        return $this->belongsTo('App\Models\Article');
    }

    public function baseDir()
    {
        return config('article.image_path');
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;

        $this->path = $this->baseDir() . '/' . $name;
        $this->thumbnail_path = $this->baseDir() . '/tn-' . $name;
    }
}
