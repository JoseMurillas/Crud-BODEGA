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
        Schema::create('surcursales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('departamento', 100);
            $table->string('ciudad', 100);
            $table->string('barrio', 100);
            $table->string('direccion', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surcursales');
    }
};
