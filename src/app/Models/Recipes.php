<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name', 'description', 'preptime', 'cooktime','servings','calories_per_serving','personal_notes','type',
    // ];

    protected $guarded = ['updated_at', 'created_at'];

    protected $primaryKey = 'recipe_id';

    public function ingredients()
    {
        return $this->hasMany(Ingredients::class);
    }

}
