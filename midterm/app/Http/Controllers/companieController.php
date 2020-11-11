<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companie;

class companieController extends Controller
{
    public function get_companies(){
        $companies = Companie::all();
        return view('companies')->with('companies', $companies);
    }

    public function delete_companie(Request $request){
        Companie::where('id', $request->id)->delete();
        return redirect()->route('companies');
    }

    public function add_companie(){
        return view('add_companie');
    }

    public function insert_companie(Request $request){
        Companie::create([
            'name' => $request->name,
            'code' => $request->code,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
        ]);

        return redirect()->route('companies');
    }

    public function edit_companie(Request $request){
        $companie = Companie::where('id', $request->id)->first();
        
        return view('edit_companie')->with('companie', $companie);
    }

    public function update_companie(Request $request){
        Car::where('id', $request->id)->update([
            'name' => $request->name,
            'code' => $request->code,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
        ]);
        return redirect()->route('companie');
    }
}
