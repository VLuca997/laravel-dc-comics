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
        Schema::create('comics', function (Blueprint $table) {//riempimento dati iniziali
            $table->id();
            $table->string('title', 100);
            $table->text('description');
            $table->string('thumb', 2048)->nullable();
            $table->unsignedDecimal('price', 5, 2);
            $table->string('series', 64)->nullable();
            $table->date('sale_date')->nullable();
            $table->text('artists')->nullable();
            $table->text('writers')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
