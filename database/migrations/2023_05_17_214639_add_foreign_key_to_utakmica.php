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
        Schema::table('utakmica', function (Blueprint $table) {
            $table->unsignedBigInteger('stadion_id');
            $table->foreign('stadion_id')->references('id')->on('stadion')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('utakmica', function (Blueprint $table) {
            $table->dropForeign('utakmica_stadion_id_foreign');
        });
    }
};
