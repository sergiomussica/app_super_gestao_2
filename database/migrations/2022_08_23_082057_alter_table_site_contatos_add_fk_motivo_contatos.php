<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSiteContatosAddFkMotivoContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Adicionar a coluna motivo_contatos_id
        Schema::table('site_contactos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_contatos_id');
           
        });

        //atribuindo motivo_contato para a nova coluna motivo
        DB::statement('update site_contactos set motivo_contatos_id = motivo_contato');

        //Criando A fk
        Schema::table('site_contactos', function (Blueprint $table) {
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
            $table->dropColumn('motivo_contato');
           
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //criar a coluna motivo_contato e remover a fk
        Schema::table('site_contactos', function (Blueprint $table) {
            $table->integer('motivo_contato');
            $table->dropForeign('site_contactos_motivo_contatos_id_foreign');
            //<table>_<coluna>_foreign
           
           
        });

        //atribuindo motivo_contato para a nova coluna motivo
        DB::statement('update site_contactos set  motivo_contato = motivo_contatos_id =');

          //remover a coluna motivo_contatos_id
          Schema::table('site_contactos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_contatos_id');
           
        });




    }
}
