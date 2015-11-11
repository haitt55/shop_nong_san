<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }


}
