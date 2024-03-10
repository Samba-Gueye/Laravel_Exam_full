<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    use HasFactory;
    protected $fillable = [
            'prenom',
            'nom',
            'experience',
            'num_permis',
            'emission',
            'expiration',
            'etat',
            'disponiblite',
    ];

    protected $guarded =[];

    public function vehicules()
    {

        return $this->hasMany(Vehicule::class);
    }
}
