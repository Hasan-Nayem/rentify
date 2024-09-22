<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\File;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();
        return view('backend.pages.car.manage', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.car.create')
               ->with('success', 'Welcome to create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // exit();
        $car = new Car();
        $car->name = $request->name;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->year = $request->manufacture;
        $car->car_type = $request->car_type;
        $car->availability = $request->availability;
        $car->daily_rent_price = $request->daily_rent;
        if($request->file('image')  != null){
            $manager = new ImageManager(new Driver());
            $image = $request->file('image');
            $imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $imagePath = 'backend/assets/adminUploads/cars/'.$imageName;
            $img = $manager->read($image);
            $img = $img->resize(1920,1080);
            $img->save(base_path('public/backend/assets/adminUploads/cars/'.$imageName));
            $car->image = $imagePath;
        }
        $car->save();
        return redirect()->route('car.index')
               ->with('success', 'This car added to list successfully');
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
        $car = Car::find($id);
        return view('backend.pages.car.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = Car::find($id);

        $car->name = $request->name;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->year = $request->manufacture;
        $car->car_type = $request->car_type;
        $car->daily_rent_price = $request->daily_rent;
        $car->availability = $request->availability;
        if($request->file('image') != null){
            if(File::exists($car->image)){
                File::delete($car->image);
            }
            $manager = new ImageManager(new Driver());
            $image = $request->file('image');
            $imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $imagePath = 'backend/assets/adminUploads/cars/'.$imageName;
            $img = $manager->read($image);
            // $img = $img->resize(1920,1080);
            $img->save(base_path('public/backend/assets/adminUploads/cars/'.$imageName));
            $car->image = $imagePath;

        }
        $car->save();
        return redirect()->route('car.index')
               ->with('warning', 'Information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::find($id);
        // dd('public/'.$car->image);
        // exit();
        // if ( File::exists('backend/assets/images/brands/' . $brand->image ) ){
        //     File::delete('backend/assets/images/brands/' . $brand->image);
        // }
        if(File::exists($car->image)){
            File::delete($car->image);
        }
        $car->delete();
        return redirect()->route('car.index')
               ->with('warning', 'This car deleted from list successfully');
    }
}
