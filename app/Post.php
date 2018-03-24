<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','body','category','image'];

    public function category(){
        return $this->hasMany(\App\Post::class);
    }


}
