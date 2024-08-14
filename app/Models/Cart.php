<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $fillable = [
        'user_id',
        'prod_id',
        'prod_qty',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class,'prod_id','id');
    }

    public function scopeCartItem($query , $id){
        return $query->where('user_id',$id);
    }

    public function scopeCartCount($query , $id){
        return $query->where('user_id',$id)->count();
    }
}
