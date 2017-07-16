<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    //
	/*Arriving Flight function link to arrivalAirport_id*/
    public function arrivingFlights(){
    	return $this->hasMany('App\Flight', 'arrivalAirport_id');
    }

    /*Departing Flight function link to departureAirport_id*/
    public function departingFlights(){
    	return $this->hasMany('App\Flight', 'departureAirport_id');
    }
}
