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
        Schema::create('nama_tanda_tangan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tandatgn', 100)->notNull();
            $table->string('jabatan', 200)->notNull();
            $table->string('nip', 25)->notNull();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nama_tanda_tangan');
    }
};
