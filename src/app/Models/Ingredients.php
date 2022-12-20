<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'order', 'ingredient', 'denomination', 'measurement', 'food_category', 'recipe_id',
    ];

    public function recipes()
    {
        return $this->belongsTo(Recipes::class);
    }
}
