<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeatAllocation;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;
  


class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalTrips = Trip::count();
        $totalSeatAllocations = SeatAllocation::count();

        return view('dashboard', compact('totalUsers', 'totalTrips', 'totalSeatAllocations'));
    }
}
