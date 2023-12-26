<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeatAllocation;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;

class SeatAllocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $trips = Trip::all();
        $seatallocations = SeatAllocation::all();
        return view('admin/seatallocation/index', compact("seatallocations","users","trips") );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trips = Trip::all();
        $users = User::all();
        //dd($locations);
        return view('admin/seatallocation/create', compact("trips","users"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validate = $request->validate([
            "trip_id" => "integer|required",
            "seat_number" => "integer",
            "user_id" => "integer",
        ]);
        $validate["trip_id"] = (int) $validate["trip_id"];
        $validate["seat_number"] = (int) $validate["seat_number"];
        $validate["user_id"] = (int) $validate["user_id"];

        //dd($validate);
        $seatAllocations = SeatAllocation::create($validate);

        return redirect()->route("seatallocation.edit", $seatAllocations->id)
                        ->withSuccess("Seat allocations successfully created.");
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
    public function edit(SeatAllocation $seatallocation)
    {
        $trips = Trip::all();
        $users = User::all();
        return view('admin/seatallocation/edit', compact("trips","users","seatallocation"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SeatAllocation $seatallocation)
    {
        $validate = $request->validate([
            "trip_id" => "integer|required",
            "seat_number" => "integer",
            "user_id" => "integer",
        ]);
        $validate["trip_id"] = (int) $validate["trip_id"];
        $validate["seat_number"] = (int) $validate["seat_number"];
        $validate["user_id"] = (int) $validate["user_id"];

        $seatallocation->update($validate);

        return redirect()->route("seatallocation.edit", compact("seatallocation"))
                        ->withSuccess("Seat Allocation successfully Updated.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SeatAllocation $seatallocation)
    {
        $seatallocation->delete();
        return redirect()->route("seatallocation.index")->withSuccess("seat allocation delete success.");
    }
}
