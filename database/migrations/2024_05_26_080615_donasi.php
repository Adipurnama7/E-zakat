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
        Schema::create('donasi', function (Blueprint $table) {
            $table->id();
            $table->date('Tanggal_Donasi'); // Tanggal Donasi
            $table->string('Nama_Donatur'); // Nama Donatur
            $table->string('No_Hp'); // No HP
            $table->text('Alamat'); // Alamat
            $table->double('Total_Donasi', 15, 2); // Total Donasi, with precision and scale
            $table->string('Bukti_Donasi')->nullable(); // Bukti Donasi, storing the file path, nullable
            $table->enum('Status_Validasi', ['pending', 'diterima', 'ditolak'])->default('pending'); // Status Validasi
            $table->timestamps(); // created_at and updated_at
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
