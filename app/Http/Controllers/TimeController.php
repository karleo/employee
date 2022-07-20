<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use Carbon\Carbon;
use App\Models\Employees;
use App\Models\EmployeeTime;

class TimeController extends Controller
{
    //
    public function index()
    {
        //
        $employees = Employees::all();
        return view('employees.index',compact('employees'));
    }

    public function create()
    {
        //
        $employees = Employees::all();
        $date = new DateTime('now');
        $time = $date->format("Y-m-d H:i:s");

        return view('time.create',compact('employees','time'));
    }

    public function store(Request $request){

        $data = $request->input();
        EmployeeTime::create([
            'date' => $data['date'],
            'check_in' => $data['check_in'],
            'location' => $data['location'],
            'photo' => $data['photo'],
            'notes' => $data['notes'],

        ]);
        return view('');

    }

}
