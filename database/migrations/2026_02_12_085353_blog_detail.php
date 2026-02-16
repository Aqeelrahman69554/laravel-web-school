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
        Schema::create('blog_detail', function (Blueprint $table) {
            $table->id();
            $table->string('title_1')->nullable();
            $table->text('image_1')->nullable();
            $table->mediumText('desc_title_1')->nullable();
            $table->string('title_2')->nullable();
            $table->mediumText('desc_title_2')->nullable();
            $table->text('image_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_detail');
    }
};
