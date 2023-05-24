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
        Schema::rename("ulaznicas", "ulaznica");
        Schema::rename("stadions", "stadion");
        Schema::rename("utakmicas", "utakmica");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename("ulaznica", "ulaznicas");
        Schema::rename("stadion", "stadions");
        Schema::rename("utakmica", "utakmicas");
    }
};
