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
        Schema::create('access_rights', function (Blueprint $table) {
            $table->id();
            $table->string("name_access")->nullable();
            $table->string("code_access")->nullable();
            $table->text("description")->nullable();
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
        Schema::dropIfExists('access_rights');
    }
};
