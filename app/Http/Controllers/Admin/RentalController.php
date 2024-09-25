<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use DateTime;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.rentals.manage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, String $userId, String $carId)
    {
        $car = Car::find($carId);

        $start_date = new DateTime($request->start_date);
        $end_date = new DateTime($request->end_date);

        if($start_date > $end_date){
            return redirect()->back()
            ->with('error_message', 'Invalid pickup date');
        }
        $totalDays = $start_date->diff($end_date);
        // dd($totalDays->days);
        // exit();
        $rentalInfo = new Rental();
        $rentalInfo->user_id = $userId;
        $rentalInfo->car_id	 = $carId;
        $rentalInfo->pickup_location = $request->PickupLocation;
        $rentalInfo->drop_off_location	 = $request->DropoffLocation;
        $rentalInfo->start_date	 = $start_date->format('d/m/y');
        $rentalInfo->end_date	 = $end_date->format('d/m/y');
        if($totalDays->days == 0){
            $rentalInfo->total_cost	 = $car->daily_rent_price;
        }else{
            $rentalInfo->total_cost	 = ($totalDays->days * $car->daily_rent_price);
        }
        $rentalInfo->status	 = 'pending';
        $rentalInfo->save();
        return redirect()->route('dashboard.user')->with('message', 'Your booking request is saved successfully.');
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
    public function edit(string $id)
    {
        return view('backend.pages.rentals.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
