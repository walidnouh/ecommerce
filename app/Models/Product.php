<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $price = [
        'price' => 'integer',
    ];
    
    protected $hidden = ['restaurant_id','category_id'];

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    
    public function ScopeFiltre50(Builder $query)
    {
        return $query->where('price','<=',50)->take(10)->get();
    }
    
    public function ScopeFiltre100(Builder $query)
    {
        return $query->where('price','>=',50)->where('price','<=',100)->take(10)->get();
    }

    public function ScopeFiltre150(Builder $query)
    {
        return $query->where('price','>=',100)->where('price','<=',150)->take(10)->get();
    }

    public function ScopeFiltre200(Builder $query)
    {
        return $query->where('price','<=',150)->where('price','>=',200)->take(10)->get();
    }

    public function ScopeFiltre250(Builder $query)
    {
        return $query->where('price','<',200)->where('price','>=',250)->take(10)->get();
    }

    public function ScopeFiltre(Builder $query)
    {
        return $query->where('price','>',250)->take(5)->get();
    }
}
