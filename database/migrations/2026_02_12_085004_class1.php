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
        Schema::create('class1', function (Blueprint $table) {
            $table->id();
            $table->string('title_1')->nullable();
            $table->text('image')->nullable();
            $table->string('title_2')->nullable();
            $table->text('desc_title_2')->nullable();
            $table->string('age')->nullable();
            $table->string('seats')->nullable();
            $table->string('time')->nullable();
            $table->string('fee')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class1');
    }
};
