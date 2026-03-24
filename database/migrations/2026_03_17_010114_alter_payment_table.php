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
        Schema::table('payment', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
            $table->decimal('price', 10, 2);
            $table->timestamp('payment_date')->nullable();
            $table->integer('status');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::table('payment', function (Blueprint $table) {
            $table->dropForeign(['user_id']);

            $table->dropColumn([
                'user_id',
                'price',
                'payment_date',
                'status',
                'deleted_at'
            ]);
        });
    }
};
