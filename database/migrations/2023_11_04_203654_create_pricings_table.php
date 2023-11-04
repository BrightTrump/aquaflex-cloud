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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->decimal('bag', 10, 2);
            $table->decimal('pack_35cl', 10, 2);
            $table->decimal('pack_50cl', 10, 2);
            $table->decimal('pack_150cl', 10, 2);
            $table->decimal('blackcurrant_35cl', 10, 2);
            $table->decimal('blackcurrant_50cl', 10, 2);
            $table->decimal('blackcurrant_1litre', 10, 2);
            $table->decimal('blackcurrant_3litre', 10, 2);
            $table->decimal('blackcurrant_25litre', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
