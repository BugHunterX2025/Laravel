<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    public function posts()
    {
        return $this->hasManyThrough(
            post::class,
            person::class,

        );
    }
    public function users()

    {
        return $this->hasMany(person::class);
    }
}
