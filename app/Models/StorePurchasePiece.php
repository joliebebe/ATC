<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StorePurchasePiece extends Model
{
    protected $fillable = [
        'marque_id',
        'modelVoiture_id',
        'immatricule',
        'chassis',
        'piece_nom',
        'quantite',
        'informations',
        'date_souhaitee',
    ];
}