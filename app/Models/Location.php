<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function tripsAsDeparture()
    {
        return $this->hasMany(Trip::class, 'departure_location_id');
    }

    public function tripsAsDestination()
    {
        return $this->hasMany(Trip::class, 'destination_location_id');
    }
}
