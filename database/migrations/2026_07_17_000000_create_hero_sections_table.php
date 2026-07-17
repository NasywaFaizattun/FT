<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string('badge_text')->nullable();
            $table->string('title');
            $table->string('title_accent')->nullable();
            $table->text('description')->nullable();
            $table->string('primary_cta_label')->nullable();
            $table->string('primary_cta_url')->nullable();
            $table->string('secondary_cta_label')->nullable();
            $table->string('secondary_cta_url')->nullable();
            $table->string('team_label')->nullable();
            $table->string('team_value')->nullable();
            $table->string('theme_label')->nullable();
            $table->string('theme_value')->nullable();
            $table->string('style_label')->nullable();
            $table->string('style_value')->nullable();
            $table->string('background_image_path')->nullable();
            $table->string('poster_image_path')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};