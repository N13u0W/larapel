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
        Schema::create('liststudents', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->enum('classes', ["X", "XI", "XII"]);
            $table->enum('major', ["PPLG", "TJKT", "TBSM", "TKRO", "MPLB", "DKV", "TMP", "HR"]);
            $table->date('date', ["birth_date"]);
            $table->date('string', ["photo_profile"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liststudents');
    }
};
