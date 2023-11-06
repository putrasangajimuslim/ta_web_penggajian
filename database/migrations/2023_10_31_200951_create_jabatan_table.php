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
        Schema::create('jabatan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_jabatan')->nullable();
            $table->string('nama_jabatan')->nullable();
            $table->integer('gaji_pokok')->default(0);
            // $table->integer('uang_makan')->default(0);
            $table->integer('potongan')->default(0);
            $table->integer('bonus')->default(0);
            $table->integer('tunjangan_transport')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jabatan');
    }
};
