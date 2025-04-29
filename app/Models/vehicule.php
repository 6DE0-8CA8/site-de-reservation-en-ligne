<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicule extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricule',
        'marque',
        'modele',
        'capacite',
        'type',
        'argence_id',
    ];
    public function argence()
    {
        return $this->belongsTo(Argence::class);
    }
}
