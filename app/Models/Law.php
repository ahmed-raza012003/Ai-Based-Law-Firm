<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Law extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'punishment', 'applicable_when'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
