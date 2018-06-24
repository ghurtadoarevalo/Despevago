<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $primaryKey = 'seat_id';
    protected $table = 'seats';

    public function passenger()
    {
        return $this->hasOne('App\Passenger');
    }

    public function class_type()
    {
        return $this->belongsTo('App\ClassType');
    }

    public function flight()
    {
        return $this->belongsTo('App\Flight');
    }
}