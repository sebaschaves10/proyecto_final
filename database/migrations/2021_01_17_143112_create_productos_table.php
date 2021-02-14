<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nombreProducto', 45);
            $table->integer('cantidad');
            $table->integer('precio');
            $table->string('foto', 45);
            $table->integer('estado')->default(1);
            $table->integer('categoria');
            $table->foreign('categoria')->references('id')->on('categorias');

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
        Schema::table('productos', function (Blueprint $table) {
            //
        });
    }
}
