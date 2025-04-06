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
        Schema::create('staudents', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
            $table->string('name', 30);
            $table->string('email')->unique();
            $table->string('phone', 20)->comment('this is phone no');
            $table->float('perctange', 3, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staudents');
    }
};
