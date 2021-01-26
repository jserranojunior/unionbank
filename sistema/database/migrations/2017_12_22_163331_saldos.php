<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Saldos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saldos', function (Blueprint $table) {    
            $table->increments('id');
            $table->bigInteger('id_user'); 
            $table->string('valor')->nullable();                
            $table->dateTime('data_efetuada');                       
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
        Schema::table('saldos', function (Blueprint $table) {
            //
        });
    }
}
