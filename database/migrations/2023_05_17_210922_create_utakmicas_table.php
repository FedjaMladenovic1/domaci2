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
        Schema::create('utakmicas', function (Blueprint $table) {
            $table->id();
            $table->integer('cena');
            $table->string("tim_domacin", 30);
            $table->string("tim_gost", 30);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utakmicas');
    }
};
