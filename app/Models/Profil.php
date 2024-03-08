<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $fillable = [
        'nom',
    ];

    // Relation avec le modèle User
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
