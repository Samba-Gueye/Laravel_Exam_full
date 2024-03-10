<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'lieu_depart',
        'lieu_arrive',
        'date_debut',
        'date_fin',
        'vehicule_id',
        'chauffeur_id',
        'montant'

    ];

    public function chauffeur()
    {
        return $this->belongsTo(Chauffeur::class);
    }
    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }

}
