<?php
/**
 * Created by PhpStorm.
 * User: haitt
 * Date: 10/04/2016
 * Time: 13:11
 */

namespace App\Models;

use App\Models\BaseModel;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class ProductCategory extends BaseModel implements SluggableInterface
{
    use SluggableTrait;
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
        return $this->belongsTo('App\Models\ProductCategory', 'parent_id');
    }

    public function childs()
    {
        return $this->hasMany('App\Models\ProductCategory', 'parent_id', 'id');
    }

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    public static function findBySlug($slug)
    {
        return static::whereSlug($slug)->firstOrFail();
    }

    public function products() {
        return $this->hasMany('App\Models\Product');
    }

    public function getLevel() {
        if ($this->parent_id == 0) {
            $level = 0;
        } else {
            $level = 1;
            $parent = $this->parent;
            while ($parent->parent_id != 0) {
                $level ++;
                $parent = $parent->parent;
            }
        }
        return $level;
    }

}