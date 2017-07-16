<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //
    	// The airport a flight arrive in
    public function arrivalAirport(){
    	return $this->belongsTo('App\Airport','arrivalAirport_id');
    }

    	//The airport a flight is departing from
    public function departureAirport(){
    	return $this->belongsTo('App\Airport','departureAirport_id');
    }

    	//Passengers in the flight
    public function passengers(){
    	return $this->belongsToMany('App\Customer','flight_customer');
    }

}
