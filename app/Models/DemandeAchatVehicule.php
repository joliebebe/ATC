<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemandeAchatVehicule extends Model
{
    protected $fillable = ['marque_id', 'model_id', 'date_reception', 'details'];
}


