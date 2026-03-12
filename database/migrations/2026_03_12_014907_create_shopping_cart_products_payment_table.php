<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shopping_cart_products_payment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shopping_cart_product_id')->constrained('shopping_cart_products');
            $table->foreignId('payment_id')->constrained('payment');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_cart_products_payment');
    }
};
