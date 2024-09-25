<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function homepage()
    {
        $cars = Car::get();
        return view('frontend.pages.homepage', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showCars()
    {
        $cars = Car::get();
        return view('frontend.pages.cars', compact('cars'));
    }
    public function carDetails(String $id)
    {
        $car = Car::find($id);
        return view('frontend.pages.carDetails', compact('car'));
    }
    public function myAccount()
    {
        $orders = Rental::where('user_id', Auth::user()->id)->with('cars')->get();
        $statusCounts = Rental::where('user_id', Auth::user()->id)
            ->selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->pluck('count', 'status');

        $pendingCount = $statusCounts->get('pending', 0);
        $scheduledCount = $statusCounts->get('scheduled', 0);
        $completedCount = $statusCounts->get('completed', 0);
        $cancelledCount = $statusCounts->get('cancelled', 0);
        // dd($pendingCount);
        // exit();
        return view('frontend.pages.dashboard.stats', compact('orders', 'pendingCount', 'scheduledCount', 'completedCount', 'cancelledCount'));
    }
    public function profile()
    {
        return view('frontend.pages.dashboard.profile');
    }
    public function orders()
    {
        return view('frontend.pages.dashboard.orders');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
