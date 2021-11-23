<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesEnderecosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('clientes_enderecos', function (Blueprint $table) {
      $table->increments('id');
      $table->string('telefone', 15);
      $table->foreign('id_clientes')
        ->references('id')
        ->on('clientes')
        ->onUpdate('cascade')
        ->onDelete('cascade');
      $table->softDeletes();
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
    Schema::dropIfExists('clientes_enderecos');
  }
}
