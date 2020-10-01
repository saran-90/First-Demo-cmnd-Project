<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
      public $fillable = [
        'gallery_name','category','image','location','flat_type','square_feet','description','photos'
    ];

     public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
