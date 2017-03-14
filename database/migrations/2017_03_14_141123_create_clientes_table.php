<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('CodEmpresacliente');
            $table->integer('CodClienteOrigem');
            $table->integer('Tipo');
            $table->string('Nome',255);
            $table->string('Email',255);
            $table->string('Cargo',255);
            $table->string('Telefone',20);
            $table->string('Celular',20);
            $table->string('DataNascimento',14);
            $table->string('DataCadastro',14);
            $table->char('Sexo',1);
            $table->string('Senha',20);
            $table->char('Casado',1);
            $table->string('DataCasamento',14);
            $table->char('Filhos',1);
            $table->integer('QtdFilhos');
            $table->text('Observacao');
            $table->char('Vip',1);
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
        Schema::drop('clientes');
    }
}
