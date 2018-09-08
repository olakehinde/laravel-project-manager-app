<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
    	'name',
    	'project_id',
    	'company_id',
    	'user_id',
    	'days',
    	'hours',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function users() {
        return $this->belongsToMany('App\Models\User');
    }

    public function project() {
        return $this->belongsTo('App\Models\Project');
    }

    public function company() {
        return $this->belongsTo('App\Models\Company');
    }
}
