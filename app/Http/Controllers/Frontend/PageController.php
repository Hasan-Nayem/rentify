<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
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
        return view('frontend.pages.dashboard.stats');
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
