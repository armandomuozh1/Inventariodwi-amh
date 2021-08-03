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
            $table->id();
            $table->string('codigo',10);
            $table->string('descripcion',50);
            $table->integer('cantidad');
            $table->decimal('precio_Costo', 8, 2);
            $table->decimal('precio_Venta', 8, 2);
            $table->string('codigoProveedor',10);
            $table->integer('tipoProducto');
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
        Schema::dropIfExists('productos');
    }
}