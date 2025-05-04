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
            Schema::create('laws', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->foreignId('category_id')->constrained()->onDelete('cascade');  // Foreign key to Category
                $table->text('punishment');
                $table->text('applicable_when');
                $table->timestamps();
            });
        }
        
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laws');
    }
};
