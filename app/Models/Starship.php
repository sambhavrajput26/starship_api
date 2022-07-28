<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StarshipCategory;

class Starship extends Model
{
    use HasFactory;

    public function starship_category()
    {
        return $this->hasOne(StarshipCategory::class, 'id')->select('title');
    }
}
