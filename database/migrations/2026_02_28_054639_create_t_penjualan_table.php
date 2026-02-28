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
        Schema::create('t_penjualan', function (Blueprint $table) {
            $table->id('penjualan_id');
            $table->string('penjualan_kode')->unique();
            $table->unsignedBigInteger('user_id');
            $table->dateTime('penjualan_tanggal');
            $table->integer('total_harga');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('user_id')
                ->on('m_user')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan');
    }
};
