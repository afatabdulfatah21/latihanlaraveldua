<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id','avatar','about','facebook','youtube','twitter'
    ];

    public function posts(){
         return $this->belongsToMany('App\Post');
    }
}
