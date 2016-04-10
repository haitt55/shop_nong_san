<?php
/**
 * Created by PhpStorm.
 * User: haitt
 * Date: 10/04/2016
 * Time: 13:11
 */

namespace App\Models;


class ProductCategory extends BaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['parent_id', 'name', 'type', 'active'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function parent()
    {
        return $this->belongsTo('App\Models\ProductCategory', 'parent_id', 'id');
    }

    public function childs()
    {
        return $this->hasMany('App\Models\ProductCategory', 'id', 'parent_id');
    }

    public function products() {
        return $this->hasMany('App\Models\Product');
    }
}