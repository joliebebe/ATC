<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemandeLocation extends Model
{
    protected $fillable = ['categorie', 'marque_id', 'date_debut', 'date_fin'];
}
