<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name',
        'description'
    ];
    use HasFactory;

    public function lawyers()
    {
        return $this->belongsToMany(Lawyer::class, 'lawyer_has_categories')->using(LawyerHasCategories::class);
    }
}
