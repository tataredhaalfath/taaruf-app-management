<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvKriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_kriteria', function (Blueprint $table) {
            $table->id();
            $table->integer('cv_id');
            $table->string('tinggi');
            $table->string('suku');
            $table->string('usia');
            $table->string('pekerjaan');
            $table->string('tambahan');
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
        Schema::dropIfExists('cv_kriteria');
    }
}
