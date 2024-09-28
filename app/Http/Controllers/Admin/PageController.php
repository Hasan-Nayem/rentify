<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function dashboard(){
        $totalCars = Car::all()->count();
        $totalAvailableCars = Car::where('availability', true)->count();
        $totalRents = Rental::all()->count();
        $totalIncome = DB::table('rentals')->where('status', 'completed')->sum('total_cost');
        $orders = Rental::get();
        // $orders = DB::select('SELECT * FROM rentals WHERE DATE(created_at) = ?', [Carbon::today()->toDateString()]);;
        return view('backend.pages.homepage', compact('totalCars', 'totalAvailableCars', 'totalRents', 'totalIncome', 'orders'));
    }
}
