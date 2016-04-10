<?php

namespace App\Models;

use App\Models\BaseModel;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class News extends BaseModel implements SluggableInterface
{
    use SluggableTrait;

    protected $table = 'news';

    protected $fillable = [
        'title', 'excerpt', 'category_id', 'content', 'author_id', 'page_title', 'meta_keyword',
        'meta_description', 'published'
    ];

    public function author()
    {
        return $this->belongsTo('App\Models\User', 'author_id');
    }

    public function images()
    {
        return $this->hasMany('App\Models\NewsImage');
    }

    public function category() {
        return $this->belongsTo('App\Models\NewsCategory', 'category_id');
    }

    public static function findBySlug($slug)
    {
        return static::whereSlug($slug)->firstOrFail();
    }

    public function scopePublished($query)
    {
        return $query->wherePublished(true);
    }

    /**
     * Add a image to the new.
     *
     * @param NewsImage $image
     */
    public function addImage(NewsImage $image)
    {
        return $this->images()->save($image);
    }

    public function featuredImage()
    {
        return $this->images()->first();
    }
}
