<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();
        $trips = Trip::all();
        return view('admin/trip/index', compact("trips","locations") );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = Location::all();
        //dd($locations);
        return view('admin/trip/create', compact("locations"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validate = $request->validate([
            "name" => "string|required",
            "departure_location_id" => "integer",
            "destination_location_id" => "integer",
            "departure_date" => "date|required",
        ]);
        $validate["departure_location_id"] = (int) $validate["departure_location_id"];
        $validate["destination_location_id"] = (int) $validate["destination_location_id"];


        $validate["departure_date"] = Carbon::parse($validate["departure_date"])->format('Y-m-d H:i:s');

        //dd($validate);
        $trip = Trip::create($validate);

        return redirect()->route("trip.edit", compact("trip"))
                        ->withSuccess("Trip successfully created.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trip $trip)
    {
        $locations = Location::all();
        return view('admin/trip/edit', compact("trip","locations"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trip $trip)
    {
        $validate = $request->validate([
            "name" => "string|required",
            "departure_location_id" => "integer",
            "destination_location_id" => "integer",
            "departure_date" => "date|required",
        ]);
        $validate["departure_location_id"] = (int) $validate["departure_location_id"];
        $validate["destination_location_id"] = (int) $validate["destination_location_id"];


        $validate["departure_date"] = Carbon::parse($validate["departure_date"])->format('Y-m-d H:i:s');

        //$trip = Trip::create($validate);
        $trip->update($validate);

        return redirect()->route("trip.edit", compact("trip"))
                        ->withSuccess("Trip successfully Updated.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
