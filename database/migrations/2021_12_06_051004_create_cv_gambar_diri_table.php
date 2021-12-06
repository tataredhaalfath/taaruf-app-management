<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvGambarDiriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_gambar_diri', function (Blueprint $table) {
            $table->id();
            $table->integer('cv_id');
            $table->string('moto');
            $table->string('target_hidup');
            $table->string('kegiatan_wl');
            $table->string('hal_disukai');
            $table->string('sisi_negatif');
            $table->string('merokok');
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
        Schema::dropIfExists('cv_gambar_diri');
    }
}
