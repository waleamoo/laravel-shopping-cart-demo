<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    

    // setting up the relationship
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
