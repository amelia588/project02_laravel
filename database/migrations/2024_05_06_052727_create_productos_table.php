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
            $table->string('nombre',80);
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 8, 2); // Asumiendo que quieres tener 2 decimales
            //$table->string('imagen')->nullable(); // Ruta de la imagen o URL
            $table->string('imagen',80);
            $table->timestamps(); // Crea campos 'created_at' y 'updated_at'
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