<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    /**
     * Get the Orders for the orderLine.
     */
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

     /**
     * Get the Meals for the orderLine.
     */
    public function meals()
    {
        return $this->hasMany('App\Meal');
    }
}
