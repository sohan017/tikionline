<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'departure_location_id', 
        'destination_location_id', 
        'departure_date'
    ];

    public function departureLocation()
    {
        return $this->belongsTo(Location::class, 'departure_location_id')->withDefault();
    }

    public function destinationLocation()
    {
        return $this->belongsTo(Location::class, 'destination_location_id')->withDefault();
    }

    public function seatAllocations()
    {
        return $this->hasMany(SeatAllocation::class);
    }
}
