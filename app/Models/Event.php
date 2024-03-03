<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'localisation',
        'description',
        'image',
        'date',
        'capacite',
        'categorie_id',
    ];
    
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    
    public function reservation(){
        return $this->hasMany(Reservation::class);
    }

    public function organisateur(){
        return $this->belongsTo(Organisateur::class)
    }
}