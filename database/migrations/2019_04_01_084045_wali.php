<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Wali extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('wali', function(Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('nama_wali');
            $kolom->string('alamat_wali');
            $kolom->string('pekerjaan_wali');
            $kolom->string('gaji_wali');
            $kolom->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('wali');
    }
}
