<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function group()
    {
        return $this->hasOne(Group::class);

        // return $this->hasMany(Group::class);
    }
}
