<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tanggal_diterima')->nullable();
            $table->string('nomor_surat', 25)->nullable();
            $table->string('tanggal_surat')->nullable();
            $table->string('pengirim_surat')->nullable();
            $table->string('perihal')->nullable();
            $table->string('nama_penerima')->nullable();
            $table->string('disposisi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat');
    }
}
