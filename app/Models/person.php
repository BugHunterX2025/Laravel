<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    //
    // protected $table = 'persons';
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function country()
    {
        return $this->belongsTo(country::class);
    }
}
