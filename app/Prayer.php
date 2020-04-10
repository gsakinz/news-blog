<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prayer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prayer', 'name', 'email', 'user_id', 'telephone',
    ];
}
