<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'events_id',
        'user_id',
        'status',
    ];

    public function events(){
        return $this->belongsTo(Event::class);
    }
    
    public function visiteur()
    {
        return $this->belongsTo(Visiteur::class, 'visiteur_id');
    }
}