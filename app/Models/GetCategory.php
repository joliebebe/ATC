<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetCategory extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = ['nom', 'ModelVoiture_id'];

    public function getModelCar()
    {
        return $this->belongsTo(getModelCar::class, 'model_voiture_id');
    }
}