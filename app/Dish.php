<?php

namespace App;

use App\Restaurant;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = ['restaurant_id', 'name', 'rating'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
