<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [

    ];

    public function groups()
    {
        return $this->belongsToMany('App\Models\Group');
    }
}
