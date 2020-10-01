<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
     public $fillable = [
        'title','photo','date','description',
    ];
}
