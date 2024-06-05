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
        Schema::create('zakat_fitrah', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_pembayar');
            $table->string('Tanggal_pembayaran');
            $table->string('No_Hp');
            $table->string('Alamat');
            $table->foreignId('zakat_id')->constrained('zakat')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('masjid_id')->constrained('masjid')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('Jumlah_Tanggungan');
            $table->double('Pembayaran_Beras');
            $table->double('Pembayaran_Uang');
            $table->double('Total_Pembayaran');
            $table->double('Total_Pembayaran_Beras')->nullable();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};