<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DepositoTipoLocal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('smart_transacoes', function (Blueprint $table) {
            $table->string('tipodeposito')->nullable();
            $table->string('localdeposito')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('smart_transacoes', function (Blueprint $table) {
            //
        });
    }
}
