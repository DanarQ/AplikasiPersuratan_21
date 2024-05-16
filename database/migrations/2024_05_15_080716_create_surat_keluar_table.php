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
        Schema::create('surat_keluar', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->notNull();
            $table->string('no_surat', 200)->notNull();
            $table->string('perihal', 150)->notNull();
            $table->string('tujuan', 50)->notNull();
            $table->text('isi_surat')->notNull();
            $table->unsignedBigInteger('id_kop');
            $table->foreign('id_kop')->references('id')->on('kepala_surat');
            $table->unsignedBigInteger('id_nama_tanda_tangan');
            $table->foreign('id_nama_tanda_tangan')->references('id')->on('nama_tanda_tangan');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keluar');
    }
};
