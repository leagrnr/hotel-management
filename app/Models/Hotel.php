<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'ville',
        'pays',
        'telephone',
        'email',
    ];

    public function chambres()
    {
        return $this->hasMany(Chambre::class);
    }


}
