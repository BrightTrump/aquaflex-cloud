<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->bigInteger('SKU')->unique();
            $table->bigInteger('qty_in_stock');
            $table->string('product_image');
            $table->decimal('price', 10, 2);
            $table->bigInteger('size');
            $table->bigInteger('contain');
            $table->string('unit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_item');
    }
};
