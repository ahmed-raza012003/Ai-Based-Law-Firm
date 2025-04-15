<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    // Specify which fields can be mass-assigned
    protected $fillable = ['user_id', 'message', 'bot_response'];

    // Define the relationship to the User model (assuming the User model exists)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
