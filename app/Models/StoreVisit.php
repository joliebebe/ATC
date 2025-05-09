<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoreVisit extends Model
{
    protected $fillable = [
        'marque_id',
        'model_id',
        'immatricule',
        'chassis',
        'kilometrage',
        'objet',
        'date_souhaitee',
    ];
}