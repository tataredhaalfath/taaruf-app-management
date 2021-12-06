<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvGambarFisik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_gambar_fisik', function (Blueprint $table) {
            $table->id();
            $table->integer('cv_id');
            $table->string('bentuk_fisik');
            $table->string('warna_kulit');
            $table->integer('tinggi');
            $table->integer('berat');
            $table->string('riwayat_penyakit');
            $table->string('golongan_darah');
            $table->string('cacat_fisik');
            $table->string('tipe_rambut');
            $table->string('warna_mata');
            $table->string('tanda_lahir');
            $table->softDeletes();
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
        Schema::dropIfExists('cv_gambar_fisik');
    }
}
