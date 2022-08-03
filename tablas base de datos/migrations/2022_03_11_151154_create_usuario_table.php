<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('direccion',10);
            $table->string('Nombre',10);
            $table->string('Apellido',10);
            $table->char('Telefono', 10);
            $table->string('inventario');//int de las llaves
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
        Schema::dropIfExists('usuario');
    }
};
