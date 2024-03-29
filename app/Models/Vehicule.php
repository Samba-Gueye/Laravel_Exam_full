<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [

        'marque',
        'modele',
        'type',
        'date_achat',
        'km_defaut',
        'prix_location',
        'matricule',
        'chauffeur_id',
        'etat',
        'disponiblite',
        'photo'
    ];
    public function chauffeur()
    {
        return $this->belongsTo(Chauffeur::class);
    }
}
