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
        Schema::create('workspace_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('workspace_id')->constrained('workspaces');
            $table->string('name');
            $table->integer('price');
            $table->integer('capacity');
            $table->foreignId('workspace_category_id')->constrained('workspace_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workspace_rooms');
    }
};
