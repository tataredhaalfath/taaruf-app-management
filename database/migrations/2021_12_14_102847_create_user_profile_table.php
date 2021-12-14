<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('image');
            $table->string('telpon');
            $table->string('gender');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('alamat');
            $table->integer('umur');
            $table->string('pendidikan_ahir');
            $table->string('tagline');
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
        Schema::dropIfExists('user_profile');
    }
}
