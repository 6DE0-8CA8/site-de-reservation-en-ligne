<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'argence_id',
        'date_reservation_id',
        'nombre_places',
        'montant_total',
        'statut',
    ];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function argence()
    {
        return $this->belongsTo(Argence::class);
    }

    public function dateReservation()
    {
        return $this->belongsTo(Datereservation::class);
    }
}
