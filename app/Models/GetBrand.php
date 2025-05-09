<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class GetBrand extends Model
{
    protected $table = 'get_brands';
    protected $fillable = ['nom', 'logo', 'etat'];

    public function getModelCar()
    {
        return $this->hasMany(getModelCar::class);
    }

    // Corrige la méthode pour éviter la duplication
    public function getLogoUrl()
    {
        return Storage::url($this->logo);
    }
}
