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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('phone')->nullable();
            $table->string('total_earning')->nullable();
            $table->string('total_withdraw')->nullable();
            $table->string('withdraw_request')->nullable();
            $table->string('withdraw_amount')->nullable();
            $table->string('upi')->nullable();
            $table->text('address')->nullable();
            $table->string('refrel_by')->nullable();
            $table->string('refrel_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};