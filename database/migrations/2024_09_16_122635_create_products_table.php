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
        Schema::create('products', function (Blueprint $table) {

        //     'sku',
        // 'brand',
        // 'variations',

            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->string('color');
            $table->string('size');
            $table->string('category');
            $table->decimal('price', 10, 2);
            $table->integer('quantity');
            $table->string('description');
            $table->string('image');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
