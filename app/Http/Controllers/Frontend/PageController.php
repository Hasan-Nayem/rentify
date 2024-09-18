<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function homepage()
    {
        return view('frontend.pages.homepage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showCars()
    {
        return view('frontend.pages.cars');
    }
    public function carDetails()
    {
        return view('frontend.pages.carDetails');
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
