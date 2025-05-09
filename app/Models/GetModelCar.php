<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GetModelCar extends Model
{
    protected $fillable = ['nom', 'marque_id'];

    public function getBrand()
    {
        return $this->belongsTo(getBrand::class);
    }
    public function getAdvertisement()
    {
        return $this->hasMany(getAdvertisement::class, 'model_id');
    }
    public function getCategory()
    {
        return $this->hasMany(getCategory::class, 'model_voiture_id');
    }
}
