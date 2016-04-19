<?php

namespace App\Models;

use App\Models\BaseModel;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Product extends BaseModel implements SluggableInterface
{
    use SluggableTrait;

    protected $table = 'products';

    protected $fillable = [
        'name', 'category_id', 'content', 'amount', 'unit_id', 'price', 'discount', 'status', 'page_title', 'meta_keyword',
        'meta_description', 'detail'
    ];

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    public function author()
    {
        return $this->belongsTo('App\Models\User', 'author_id');
    }

    public function images()
    {
        return $this->hasMany('App\Models\ProductImage');
    }

    public function articles() {
        return $this->hasMany('App\Models\ProductArticle');
    }

    public function category() {
        return $this->belongsTo('App\Models\ProductCategory', 'category_id');
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
     * Add a image to the product.
     *
     * @param ProductImage $image
     */
    public function addImage(ProductImage $image)
    {
        return $this->images()->save($image);
    }

    public function featuredImage()
    {
        return $this->images()->first();
    }

    public function delete()
    {
        if ($this->articles()->count() > 0) {
            throw new Exception('Không thể xóa. Vẫn còn bài viết về sản phẩm này.');
        }

        return parent::delete();
    }
}