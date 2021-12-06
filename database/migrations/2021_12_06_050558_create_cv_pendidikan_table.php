<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvPendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->integer('cv_id');
            $table->string('sma')->nullable();
            $table->string('jurusan_sma')->nullable();
            $table->string('univ')->nullable();
            $table->string('jurusan_univ')->nullable();
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
        Schema::dropIfExists('cv_pendidikan');
    }
}
