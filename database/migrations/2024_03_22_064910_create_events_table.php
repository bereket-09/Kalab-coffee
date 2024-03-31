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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->text('description')->nullable();
            $table->dateTime('date_and_time');
            $table->string('status')->default('active');
            $table->string('organizer_name')->nullable();
            $table->string('organizer_contact')->nullable();
            $table->string('category')->nullable();
            $table->integer('capacity')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->integer('duration')->nullable(); // In hours or days
            $table->string('image')->nullable();
            $table->text('tags')->nullable();
            $table->boolean('visibility')->default(true); // Public by default
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->dateTime('registration_deadline')->nullable();
            $table->timestamps();
        });
    }
    
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
