<?php

use Illuminate\Support\Facades\Schema;
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
      $table->bigIncrements('id');
      $table->string('name', 60);
      $table->string('email', 72)->uniqid();
      $table->string('senha', 65);
      $table->string('cnpj', 18);
      $table->string('ie', 15);
      $table->string('cpf', 14);
      $table->string('rg', 12);
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
    Schema::dropIfExists('clientes');
  }
}