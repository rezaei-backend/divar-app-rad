<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

class Product extends Model
{
    protected $fillable=["title" , "body" , "image" , "price" , "status" , "parent_id"];

    public function getCreatedAtJalaliAttribute()
    {
        return Jalalian::forge($this->created_at)->format('%A, %d %B %Y');
    }
    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
