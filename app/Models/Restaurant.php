<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
    // public function category()
    // {
    //     return $this->hasMany(Category::class);
    // }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
