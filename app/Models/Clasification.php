<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasification extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // Relacion uno a muchos

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
