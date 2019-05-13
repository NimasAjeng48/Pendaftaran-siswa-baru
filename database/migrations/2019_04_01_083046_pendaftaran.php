<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('pendaftaran', function(Blueprint $kolom){
            $kolom->increments('nisn');
            $kolom->string('nama');
            $kolom->string('jk');
            $kolom->string('alamat');
            $kolom->string('email');
            $kolom->string('asal_sekolah');
            $kolom->string('tahun_ajaran');     
            $kolom->string('tempat_lahir');
             $kolom->string('tanggal_lahir');
             $kolom->string('telepon');
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
        Schema::dropIfExist('pendaftaran');
    }
}
