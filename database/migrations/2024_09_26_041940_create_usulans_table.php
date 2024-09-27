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
        Schema::create('usulans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->enum('periode', ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']);
            $table->string('pengantar')->unique();
            $table->date('tanggal');
            $table->string('nip');
            $table->string('nama');
            $table->enum('tingkatan', ['X', 'XX', 'XXX']);

            // Store file paths as strings
            $table->string('cpns');
            $table->string('pns');
            $table->string('skkp');
            $table->string('piagam')->nullable();
            $table->string('drh');
            $table->string('pernyataan');

            $table->string('status')->default('draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usulans');
    }
};
