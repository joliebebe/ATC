<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Marque extends Model
{
    protected $fillable = ['nom', 'logo', 'etat'];

    public function models()
    {
        return $this->hasMany(ModelVoiture::class);
    }

    // Corrige la méthode pour éviter la duplication
    public function getLogoUrl()
    {
        return Storage::url($this->logo);
    }
}
