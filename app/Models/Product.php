<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];
    // function category(){
    //     $this->hasMany(Category::class);
    // }
    use HasFactory;
}
