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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');
            $table->foreignId('lawyer_id')->constrained('lawyers')->onDelete('cascade');
            $table->date('date');
            $table->time('time');
            $table->text('description');
            $table->enum('status', ['pending', 'accepted', 'declined'])->default('pending');
            $table->text('reason')->nullable(); // Optional: If you want to store the reason for decline
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
