<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'body',
    	'url',
    	'user_id',
    	'commentable_id',
    	'commentable_type',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
