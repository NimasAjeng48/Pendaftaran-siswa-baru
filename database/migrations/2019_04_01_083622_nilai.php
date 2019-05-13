<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('nilai', function(Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('bin');
            $kolom->string('mtk');
            $kolom->string('bing');
            $kolom->string('total_nilai');
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
         Schema::dropIfExist('nilai');
    }
}
