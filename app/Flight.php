<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable =[
        'flight_number',
        'cabin_baggage',
        'capacity',
        'airplane_model',
        'airline_id'
    ];
    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }

    public function airport()
    {
        return $this->belongsTo(Airport::class);
    }

    public function journeys()
    {
        return $this->hasMany(Journey::class);
    }
}
