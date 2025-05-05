<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemandePiece extends Model
{
    protected $fillable = ['Num_immatricule', 'Num_chassis', 'marque_id', 'model_id', 'quantite', 'details'];
}



