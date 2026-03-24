<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;

    protected $table = 'payment';

    protected $fillable = [
        'user_id',
        'price',
        'payment_date',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}