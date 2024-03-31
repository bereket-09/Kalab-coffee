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
    Schema::create('registrations', function (Blueprint $table) {
        $table->id();
        $table->foreignId('event_id')->constrained()->onDelete('cascade');
        $table->string('name');
        $table->string('address');
        $table->string('phone_number');
        $table->string('email');
        $table->text('note')->nullable();
        $table->string('status')->default('pending');
        $table->string('payment_status')->default('pending');
        $table->string('dietary_restrictions')->nullable();
        $table->string('emergency_contact')->nullable();
        $table->date('date_of_birth')->nullable();
        $table->string('tshirt_size')->nullable();
        $table->text('special_requirements')->nullable();
        $table->string('referral_source')->nullable();
        $table->string('social_media_profiles')->nullable();
        $table->text('additional_notes')->nullable();
        $table->dateTime('registration_date')->nullable();
        $table->timestamps();
        
        $table->unique(['event_id', 'email']); // Ensure unique registration for each event by email
    });
}

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
