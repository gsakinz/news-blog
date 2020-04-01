<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Allow saving into the columh
    protected $fillable = ['name'];
}
