<?php
/**
 * Created by PhpStorm.
 * User: haitt
 * Date: 10/04/2016
 * Time: 13:14
 */

namespace App\Models;


class NewsCategory extends BaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'news_categories';

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
        return $this->belongsTo('App\Models\NewsCategory', 'parent_id', 'id');
    }

    public function childs()
    {
        return $this->hasMany('App\Models\NewsCategory', 'id', 'parent_id');
    }

    public function news() {
        return $this->hasMany('App\Models\News');
    }
}