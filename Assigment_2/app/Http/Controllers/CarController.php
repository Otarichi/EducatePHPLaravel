<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function view_all_cars(){
        $cars = Car::all();
        return view('read')->with('cars', $cars);
    }

    public function view_add_new_car(){
        return view('create');
    }

    public function insert_new_car(Request $request){
        Car::create([
            'name' => $request->name,
            'model' => $request->model,
            'make' => $request->make,
            'license_number' => $request->license_number,
            'weight' => $request->weight,
            'registration_year' => $request->registration_year,
        ]);

        return redirect()->route('car.all');
    }

    public function view_edit_car(Request $request){
        $car = Car::where('id', $request->id)->first();
        
        return view('edit')->with('car', $car);
    }

    public function update_car(Request $request){
        Car::where('id', $request->id)->update([
            'name' => $request->name,
            'model' => $request->model,
            'make' => $request->make,
            'license_number' => $request->license_number,
            'weight' => $request->weight,
            'registration_year' => $request->registration_year,
        ]);
        return redirect()->route('car.all');
    }
}