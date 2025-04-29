<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datereservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_depart',
        'date_arriver',
    ];
    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
