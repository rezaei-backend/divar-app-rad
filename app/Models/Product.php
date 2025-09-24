<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=["title" , "body" , "image" , "price" , "status" , "parent_id"];
    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
