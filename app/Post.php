<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Allow saving into the columh
    protected $fillable = [
        'post_body', 'post_title', 'post_image', 'category_name', 'user_id',
    ];
}
