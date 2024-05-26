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
        Schema::create('masjid', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Masjid');
            $table->string('Alamat');
            $table->string('RT');
            $table->string('RW');

        });
    }

    /**
     * Reverse the migrations.
     */

     
    public function down(): void
    {

    }
};
