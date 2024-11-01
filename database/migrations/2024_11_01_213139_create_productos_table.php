<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('cantidad')->nullable();
            $table->decimal('precio', 10)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('proveedores_id')->index('fk_productos_proveedores_idx');
            $table->unsignedInteger('categorias_id')->index('fk_productos_categorias1_idx');
            $table->unsignedInteger('compras_id')->index('fk_productos_compras1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
