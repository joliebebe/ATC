<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StorePurchaseVehicle extends Model
{
    protected $fillable = [
        'marque_id',
        'model_id',
        'informations',
        'date_souhaitee',
    ];
}