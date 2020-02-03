<?php

namespace App;

use App\Dish;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['name', 'address'];

    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }
}
