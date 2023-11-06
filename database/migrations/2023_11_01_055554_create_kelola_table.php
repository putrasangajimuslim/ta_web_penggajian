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
        Schema::create('kelola', function (Blueprint $table) {
            $table->id();
            $table->string('kode_karyawan')->nullable();
            $table->string('bulan')->nullable();
            $table->string('tahun')->nullable();
            $table->string('jml_kehadiran')->nullable();
            $table->string('jml_alfa')->nullable();
            $table->integer('gaji_pokok')->default(0);
            $table->integer('uang_makan')->default(0);
            $table->integer('bonus')->default(0);
            $table->integer('tunjangan_transport')->default(0);
            $table->integer('potongan')->default(0);
            $table->integer('gaji_bersih')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelola');
    }
};
