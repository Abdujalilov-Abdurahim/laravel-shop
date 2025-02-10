<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ["team_id", "name", "short_description", "price", "image"];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
