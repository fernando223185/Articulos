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
        Schema::create('_articulos', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->float('Price', 8, 2);
            $table->string('Estatus');
            $table->integer('Stock');
            $table->timestamps();
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_articulos');
    }
};
