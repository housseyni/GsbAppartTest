<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    use HasFactory;

    protected $primaryKey = 'NumAppart'; // Définir la clé primaire personnalisée

    // Indique les colonnes qui peuvent être mass-assignées
    protected $fillable = [
        'Rue',
        'Arrondissement',
        'Etage',
        'TypeAppart',
        'PrixLoc',
        'PrixCharge',
        'Ascenseur',
        'Preavis',
        'DateLibre',
        'Proprietaire',
    ];

    // Indique les colonnes qui sont des dates
    protected $dates = ['DateLibre'];

    // Indique le type de données des colonnes
    protected $casts = [
        'Etage' => 'integer',
        'PrixLoc' => 'decimal:2',
        'PrixCharge' => 'decimal:2',
    ];

    // Relation avec le modèle User (Propriétaire de l'appartement)
    public function proprietaire()
    {
        return $this->belongsTo(User::class, 'Proprietaire');
    }
}
