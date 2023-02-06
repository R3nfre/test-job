<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
    protected $table = 'group_user';

    protected function setKeysForSaveQuery($query): Builder
    {
        $query
            ->where('user_id', '=', $this->getAttribute('user_id'))
            ->where('group_id', '=', $this->getAttribute('group_id'));

        return $query;
    }

    public $incrementing = false;
    protected $fillable = [
        'user_id', 'group_id'
    ];
    public $timestamps = false;

}
