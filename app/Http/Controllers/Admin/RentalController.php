<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ApprovedEmailNotification;
use App\Mail\CancelBookingNotification;
use App\Models\Car;
use App\Models\Rental;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Rental::with(['cars', 'users'])->get();
        return view('backend.pages.rentals.manage', compact('orders'));
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

    public function approve(string $id){
        $booking = Rental::find($id);

        $userInfo = User::find($booking->user_id);
        $carInfo = Car::find($booking->car_id);
        // dd($carInfo);
        // exit();
        $booking->status = 'scheduled';
        $booking->save();
        Mail::to($booking->users->email)->send(new ApprovedEmailNotification($userInfo->name,$userInfo->email,$booking,$carInfo));
        return redirect()->route('rentals.index')->with('success', "Booking has been approved");

    }

    public function complete(string $id){
        $booking = Rental::find($id);
        $userInfo = User::find($booking->user_id);
        $booking->status = 'completed';
        $booking->save();
        // Mail::to($request->user())->send(new CancelBookingNotification($request->user()->name));
        return redirect()->route('rentals.index')->with('success', "Booking has been marked as completed");

    }
    public function cancel(string $id)
    {
        $booking = Rental::find($id);
        $userInfo = User::find($booking->user_id);

        $booking->status = 'cancelled';
        $booking->save();
        Mail::to($userInfo->email)->send(new CancelBookingNotification($userInfo->name));
        return redirect()->route('rentals.index')->with('error', "Booking has been cancelled");
    }
    public function history(string $id){
        $history = Rental::where('user_id', $id)->with(['users', 'cars'])->get();
        $completeHistoryCount = Rental::where('status', 'completed')->count();
        $cancelledHistoryCount = Rental::where('status', 'cancelled')->count();
        $totalSpend = Rental::where('status', 'completed')->sum('total_cost');
        // dd($history->users->name);
        // exit();
        return view('backend.pages.rentals.history',compact('history', 'completeHistoryCount', 'cancelledHistoryCount', 'totalSpend'));
    }
}
