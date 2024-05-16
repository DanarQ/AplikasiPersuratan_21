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
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->notNull();
            $table->string('no_surat', 50)->notNull();
            $table->string('asal_surat', 150)->notNull();
            $table->string('perihal', 150)->notNull();
            $table->string('disp1', 70)->notNull();
            $table->string('disp2', 70)->notNull();
            $table->unsignedBigInteger('id_kop');
            $table->foreign('id_kop')->references('id')->on('kepala_surat');
            $table->unsignedBigInteger('id_nama_tanda_tangan');
            $table->foreign('id_nama_tanda_tangan')->references('id')->on('nama_tanda_tangan');
            $table->string('image', 60)->notNull();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuk');
    }
};
