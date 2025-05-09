<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoreRentalRequest extends Model
{
    protected $fillable = [
        'marque_id',
    'modelVoiture_id',
    'categorie_id',
    'date_debut',
    'date_fin',
    ];
}
