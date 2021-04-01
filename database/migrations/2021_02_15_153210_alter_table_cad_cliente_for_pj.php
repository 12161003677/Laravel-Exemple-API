<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableCadClienteForPj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cad_cliente', function (Blueprint $table) {
            $table->string('cnpj')
                ->nullable()
                ->unique();

            $table->string('inscricao_estadual')
                ->nullable();

            $table->string('nome_fantasia')
                ->nullable();

            $table->string('razao_social')
                ->nullable();

            $table->foreignId('id_atividade_comercial')
                ->nullable()
                ->unsigned()
                ->constrained('cad_atividade_comercial', 'id_atividade_comercial');

            $table->timestamp('data_fundacao', $precision = 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cad_cliente', function (Blueprint $table) {

            $table->dropColumn('cnpj');
            $table->dropColumn('inscricao_estadual');
            $table->dropColumn('nome_fantasia');
            $table->dropColumn('razao_social');
            $table->dropColumn('id_atividade_comercial');
            $table->dropColumn('data_fundacao');
        });
    }
}
