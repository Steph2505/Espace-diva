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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("code_article")->nullable();
            $table->string("color_article")->nullable();
            $table->text("description")->nullable();
            $table->string("mesure")->nullable();
            $table->bigInteger("stock_initial")->nullable();
            $table->bigInteger("stock_alert")->nullable();
            $table->integer("user_created_id")->nullable();
            $table->integer("user_updated_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
