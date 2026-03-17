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
        Schema::table('shopping_cart_products', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('product_id')->constrained('products');

            $table->integer('status');
            $table->integer('amount');

            $table->decimal('price_bought_product', 10, 2)->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::table('shopping_cart_products', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['product_id']);

            $table->dropColumn([
                'user_id',
                'product_id',
                'status',
                'amount',
                'price_bought_product',
                'deleted_at'
            ]);
        });
    }
};
