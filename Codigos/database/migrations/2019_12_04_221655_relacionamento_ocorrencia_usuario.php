<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionamentoOcorrenciaUsuario extends Migration
{
    public function up()
    {
        Schema::table('ocorrencias', function($table)
        {
            $table->integer('usuario_id')->unsigned();
        });

        // Associando algum usuário para criar a chave estrangeira
        DB::table('ocorrencias')->update(array('usuario_id' => 1));

        Schema::table('ocorrencias', function($table)
        {
            $table->foreign('usuario_id')->
                references('id')->
                on('usuarios')->
                onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ocorrencias', function($table)
        {
            $table->dropForeign('ocorrencias_usuario_id_foreign');
            $table->dropColumn('usuario_id');
        });
    }
}
