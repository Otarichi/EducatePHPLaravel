<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class employeeController extends Controller
{
    public function get_employees(){
        $employees = Employee::all();
        return view('employees')->with('employees', $employees);
    }

    public function delete_employee(Request $request){
        Employee::where('id', $request->id)->delete();
        return redirect()->route('employees');
    }

    public function add_employee(){
        return view('add_employee');
    }

    public function insert_employee(Request $request){
        Employee::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthdate' => $request->birthdate,
            'personal_id' => $request->personal_id,
            'salary' => $request->salary,
        ]);

        return redirect()->route('employees');
    }

    public function edit_employee(Request $request){
        $employee = Employee::where('id', $request->id)->first();
        
        return view('edit_employee')->with('employee', $employee);
    }

    public function update_employee(Request $request){
        Employee::where('id', $request->id)->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthdate' => $request->birthdate,
            'personal_id' => $request->personal_id,
            'salary' => $request->salary,
        ]);
        return redirect()->route('employees');
    }
}
