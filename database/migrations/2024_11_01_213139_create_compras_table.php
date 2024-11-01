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
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_compra', 50);
            $table->date('fecha_compra')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('proveedores_id')->index('fk_compras_proveedores1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
