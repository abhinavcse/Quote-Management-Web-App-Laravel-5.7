<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quote extends Model
{
    //
    protected $fillable = [
        'title', 'category', 'author_name','quote','user_id'
    ];
}
