<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GetAdvertisement extends Model
{
    protected $fillable = [
        'titre',
        'description',
        'image_principale',
        'images_secondaires',
        'type1',
        'type2',
        'type3',
        'prix',
        'etat',
        'marque_id',
        'model_id',
    ];

    protected $casts = [
        'images_secondaires' => 'array', // Cast JSON en tableau
    ];

    public function marque()
    {
        return $this->belongsTo(getBrand::class);
    }

    public function model()
    {
        return $this->belongsTo(getModelCar::class);
    }
    public function getPrixFormatAttribute()
    {
        return number_format($this->prix, 0, ',', ' ') . ' FCFA';
    }
    protected $appends = ['prix_format'];
}
