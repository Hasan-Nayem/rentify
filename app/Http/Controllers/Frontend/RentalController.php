<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\BookingNotification;
use App\Mail\CancelBookingNotification;
use App\Models\Car;
use App\Models\Rental;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $userEmail = User::find($userId);
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
        Mail::to($request->user())->send(new BookingNotification($userEmail->name));
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
        //
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
    public function cancel(string $id, Request $request)
    {
        $booking = Rental::find($id);
        $booking->status = 'cancelled';
        $booking->save();
        Mail::to($request->user())->send(new CancelBookingNotification($request->user()->name));
        return redirect()->route('dashboard.user')->with('cancelBookingMessage', "Booking has been cancelled");
    }
}
