<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_category_id')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->float('price')->nullable();
            $table->float('protein')->nullable();
            $table->float('carbs')->nullable();
            $table->float('fat')->nullable();
            $table->float('sugar')->nullable();
            $table->float('calories')->nullable();
            $table->float('is_done')->boolean();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
