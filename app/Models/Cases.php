<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;

    // Define the table name (optional if the table name is plural form of model name)
    protected $table = 'cases';

    // Define the fillable attributes
    protected $fillable = [
        'client_id',
        'lawyer_id',
        'section_code',
        'status',
        'stage'
    ];

    // Relationship: A case belongs to a client
    public function client()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship: A case belongs to a lawyer
    public function lawyer()
    {
        return $this->belongsTo(Lawyer::class);
    }
}
