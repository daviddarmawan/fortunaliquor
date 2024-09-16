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
            $table->string('langganan_id');
            $table->string('status');
            $table->string('jumlah_harga');
            $table->date('tanggal_pengiriman')->nullable();
            $table->date('tanggal_jatuh_tempo')->nullable();
            $table->string('pembayaran')->default('0');
            $table->string('sisa_tagihan');
            $table->string('total_margin');
            $table->string('total_margin_sales')->nullable();
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
