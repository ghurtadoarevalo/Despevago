<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable =[
        'numeration','capacity', 'adult_price', 'child_price', 'description','room_image'
    ];

    public function roomOptions()
    {
        return $this->belongsToMany(RoomOption::class);
    }

    public function unavailableRooms()
    {
        return $this->hasMany(UnavailableRoom::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function room_flight_packages(){

        return $this->hasMany(RoomFlightPackage::class);
    }
}
