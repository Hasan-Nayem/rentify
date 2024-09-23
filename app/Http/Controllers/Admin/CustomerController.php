<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = User::orderBy('role', 'asc')->get();
        return view('backend.pages.customers.manage', compact('customers'));
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
        $customer = User::find($id);
        return view('backend.pages.customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = User::find($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->role = $request->role;
        $customer->save();
        return redirect()->route('customer.index')
                ->with('warning', 'Customer info updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('name', 'LIKE', "%{$query}%")
                ->orWhere('email', 'LIKE', "%{$query}%")
                ->orWhere('role', 'LIKE', "%{$query}%")
                // ->orWhere('model', 'LIKE', "%{$query}%")
                // ->orWhere('car_type', 'LIKE', "%{$query}%")
                // ->orWhere('daily_rent_price', 'LIKE', "%{$query}%")
                ->get();
        return response()->json($users);
    }
}
