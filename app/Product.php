<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // instead having to set the fields one by each. create an array that holds field data
    protected $fillable = ['imagePath', 'title', 'description', 'price'];
}
