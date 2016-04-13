<?php

namespace App\Models;

use App\Models\BaseModel;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class IntroducePolicy extends BaseModel implements SluggableInterface
{
    use SluggableTrait;

    protected $table = 'introduces_policies';

    protected $fillable = [
        'title', 'content', 'page_title', 'meta_keyword',
        'meta_description', 'published'
    ];

    public static function findBySlug($slug)
    {
        return static::whereSlug($slug)->firstOrFail();
    }

    public function scopePublished($query)
    {
        return $query->wherePublished(true);
    }
}
