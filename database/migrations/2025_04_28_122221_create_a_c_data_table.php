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
        Schema::create('a_c_data', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('drInput');
            $table->string('drLF');
            $table->string('drAmt');
            $table->string('crInput');
            $table->string('crLF');
            $table->string('crAmt');
            $table->string('particularsReason');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a_c_data');
    }
};
