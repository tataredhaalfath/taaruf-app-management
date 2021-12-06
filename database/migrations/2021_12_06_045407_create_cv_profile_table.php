<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_profile', function (Blueprint $table) {
            $table->id();
            $table->integer('cv_id');
            $table->text('image');
            $table->string('nama');
            $table->string('alamat');
            $table->date('tgl_lahir');
            $table->integer('umur');
            $table->string('agama');
            $table->string('manhaj');
            $table->string('status');
            $table->string('menikah');
            $table->string('suku');
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
        Schema::dropIfExists('cv_profile');
    }
}
