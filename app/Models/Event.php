<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_evenement',
        'organisateur',
        'presentation',
        'cible_principale',
        'domaine_artistique',
        'lieu',
        'date_evenement',
        'deja_lieu',
        'nombre_editions',
        'mesures_securitaires',
        'frequence',
        'type_lieu',
        'capacite_accueil',
        'acces_pmr',
        'billetterie',
        'lien_visuel',
        'email',
        'telephone'
    ];
}
