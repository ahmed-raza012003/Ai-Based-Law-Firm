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
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');
            $table->foreignId('lawyer_id')->constrained('lawyers')->onDelete('cascade');
            $table->string('section_code'); // Matched section from dataset
            $table->enum('status', ['open', 'closed'])->default('open');
            $table->enum('stage', ['filed', 'investigation', 'trial', 'verdict', 'appeal', 'closed'])->default('filed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cases');
    }
};
