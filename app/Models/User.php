<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function groups()
    {
        return $this->belongsToMany('App\Models\Group');
    }
}
