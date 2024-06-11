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
        Schema::create('payments', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('workspace_room_id')->constrained('workspace_rooms')->onDelete('cascade');
            $table->string('transaction_id')->nullable();
            $table->string('status');
            $table->string('token')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('payment_channel')->nullable();
            $table->integer('total_amount');
            $table->string('transaction_status')->nullable();
            $table->timestamp('transaction_time')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
