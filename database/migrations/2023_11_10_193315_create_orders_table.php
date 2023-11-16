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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamp('order_date');
            $table->string('payment_channel')->nullable();
            $table->string('receipt_no')->nullable();
            $table->string('reference');
            $table->string('authorization_code')->nullable();
            $table->foreignId('shipping_address')->constrained('addresses');
            $table->foreignId('shipping_method_id');
            $table->decimal('order_total',10,2);
            $table->foreignId('order_status_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
