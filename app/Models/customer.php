<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    public function orders()
    {
        return $this->hasMany(order::class);
    }
    public function oldestOrder()
    {
        return $this->hasone(order::class)->oldestOfMany();
    }
    public function latestOrder()
    {
        return $this->hasOne(order::class)->latestOfMany();
    }
    public function largestOrder()
    {
        return $this->hasOne(order::class)->OfMany("amount", "max");
    }
    public function smallestOrder()
    {
        return $this->hasOne(order::class)->OfMany("amount", "min");
    }
}
