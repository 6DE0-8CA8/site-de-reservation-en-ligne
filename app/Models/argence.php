<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class argence extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'ville',
        'telephone',
    ];
    public function vehicules()
    {
        return $this->hasMany(vehicule::class);
    }
}
