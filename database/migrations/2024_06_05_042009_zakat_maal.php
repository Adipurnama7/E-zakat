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
        //
        Schema::create('zakat_maal', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_pembayar');
            $table->string('Tanggal_pembayaran');
            $table->string('No_Hp');
            $table->string('Alamat');
            $table->foreignId('zakat_id')->constrained('zakat')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('masjid_id')->constrained('masjid')->cascadeOnDelete()->cascadeOnUpdate();
            $table->double('Pembayaran_Uang');
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
