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
        Schema::table('ulaznica', function (Blueprint $table) {
            $table->unsignedBigInteger('utakmica_id');
            $table->foreign('utakmica_id')->references('id')->on('utakmica')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ulaznica', function (Blueprint $table) {
            $table->dropForeign('ulaznica_utakmica_id_foreign');
        });
    }
};
