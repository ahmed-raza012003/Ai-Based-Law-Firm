<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class LawyerHasCategories extends Pivot
{
    // If your pivot table has timestamps, use this
    public $timestamps = true;

    // If your pivot table has other fields, you can define them here
    protected $fillable = ['lawyer_id', 'category_id'];
}
