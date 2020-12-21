<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    /**
     * Get the orderLine that owns the Meal.
     */
    public function orderLine()
    {
        return $this->belongsTo('App\OrderLine');
    }  
}
