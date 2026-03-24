<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShoppingCartProducts extends Model {
    
    use SoftDeletes;

    protected $table = 'shopping_cart_products';

    protected $fillable = [
        'user_id',
        'product_id',
        'amount',
        'status',
        'price_bought_product'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }

}