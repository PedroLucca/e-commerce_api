<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShoppingCartProductsPayment extends Model {
    
    use SoftDeletes;

    protected $table = 'shopping_cart_products_payment';

    protected $fillable = [
        'shopping_cart_id',
        'payment_id'
    ];

    public function shopping_cart(){
        return $this->belongsTo(ShoppingCartProducts::class, 'shopping_cart_id');
    }

    public function payment(){
        return $this->belongsTo(Payment::class, 'payment_id');
    }

}