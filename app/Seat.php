<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number', 'status', 'price','passenger_id','class_type_id','flight_id'
    ];

    public function passenger()
    {
        return $this->belongsTo(Passenger::class);
    }

    public function class_type()
    {
        return $this->belongsTo(ClassType::class);
    }

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }

    public function car_flight_packages()
    {
        return $this->hasMany(CarFlightPackage::class);
    }

    public function room_flight_packages()
    {
        return $this->hasMany(RoomFlightPackage::class);
    }

    public function reservations()
    {
        return $this->belongsToMany(Reservation::class);
    }
}
