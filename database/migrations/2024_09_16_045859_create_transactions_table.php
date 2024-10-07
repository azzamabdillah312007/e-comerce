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
        Schema::create('transactions', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Produk yang dibeli
            $table->foreignId('buyer_id')->constrained('users')->onDelete('cascade'); // Pembeli (user_id)
            $table->integer('quantity'); // Jumlah produk yang dibeli
            $table->decimal('total_price', 10, 2); // Total harga transaksi
            $table->timestamp('transaction_date')->useCurrent(); // Tanggal transaksi
            $table->string('status')->default('pending'); // Status transaksi
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
