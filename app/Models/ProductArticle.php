<?php

namespace App\Models;


class ProductArticle extends BaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id', 'image', 'image_comment', 'paragraph'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}