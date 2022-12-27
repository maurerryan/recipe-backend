<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructions extends Model
{
    use HasFactory;

    public function recipes()
    {
        return $this->belongsTo(Recipes::class, 'id', 'recipe_id');
    }
}
