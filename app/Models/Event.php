<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'description',
        'localisation',
        'date',
        'capacity',
        'status',
        'acceptation',
        'categorie_id',
        'organisateur_id',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function organisateur()
    {
        return $this->belongsTo(Organisateur::class);
    }
}