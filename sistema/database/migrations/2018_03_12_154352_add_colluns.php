<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColluns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('rg')->nullable(); /* RNE */
            $table->string('mae')->nullable();
            $table->string('conjugue')->nullable();

            $table->string('cep')->nullable();
            $table->string('bairro')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('numero')->nullable();
            
            
            $table->string('estado')->nullable();

            $table->string('facebook')->nullable();          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
