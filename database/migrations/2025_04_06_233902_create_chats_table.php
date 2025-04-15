<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Assuming 'users' table exists
            $table->text('message'); // User's message
            $table->text('bot_response'); // Bot's response
            $table->timestamps(); // For created_at and updated_at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('chats');
    }
}
