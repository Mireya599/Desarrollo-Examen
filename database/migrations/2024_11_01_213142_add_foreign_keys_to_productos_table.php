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
        Schema::table('productos', function (Blueprint $table) {
            $table->foreign(['categorias_id'], 'fk_productos_categorias1')->references(['id'])->on('categorias')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['compras_id'], 'fk_productos_compras1')->references(['id'])->on('compras')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['proveedores_id'], 'fk_productos_proveedores')->references(['id'])->on('proveedores')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropForeign('fk_productos_categorias1');
            $table->dropForeign('fk_productos_compras1');
            $table->dropForeign('fk_productos_proveedores');
        });
    }
};
