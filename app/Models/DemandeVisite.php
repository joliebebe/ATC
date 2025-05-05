<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemandeVisite extends Model
{
    protected $fillable = ['marque_id', 'model_id', 'date_rendez_vous', 'details'];
}

