<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaAssuntoTabelaProcessos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('processos', function (Blueprint $table) {
            $table->integer('assunto_id')
                    ->unsigned()
                    ->nullable();
            $table->foreign('assunto_id')
                    ->references('id')
                    ->on('unidade');
                    
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('processos', function (Blueprint $table) {
            $table->dropForeign('processos_assunto_id_foreign');
            $table->dropCollumn('assunto_id');
        });
    }
}
