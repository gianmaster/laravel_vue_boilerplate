<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('orden')->default(0)->nullable(false);
            $table->string('icono');
            $table->string('ruta');
            $table->enum('tipo_menu', ['PARENT', 'CHILDREN']);
            $table->string('titulo');
            $table->integer('id_padre');

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
        Schema::drop('menus');
    }
}
