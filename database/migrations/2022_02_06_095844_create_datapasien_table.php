<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapasien', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('umur');
            $table->longText('alamat');
            $table->string('status');
            $table->date('tgllahir');
            $table->string('jeniskelamin');
            $table->longText('keluhan');
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
        Schema::dropIfExists('datapasien');
    }
}
