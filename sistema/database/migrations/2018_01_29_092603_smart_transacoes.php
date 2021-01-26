<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SmartTransacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smart_transacoes', function (Blueprint $table) {    
            $table->increments('id');
            $table->bigInteger('id_user'); 
            $table->string('valor')->nullable();
            $table->string('tipo');      
            $table->dateTime('data_efetuada');
            $table->dateTime('data_agendada');
            $table->bigInteger('id_admin')->nullable();
            $table->boolean('pagamento_feito');
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
        //
    }
}
