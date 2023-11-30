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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->date('startDate');
            $table->date('endingDate');
            $table->string('status');
            $table->string('city')->nullable();
            $table->string('startCity')->nullable();
            $table->string('endingCity')->nullable();
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('car_id')->constrained('cars');
            $table->foreignId('bookingType_id')->constrained('booking_types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
