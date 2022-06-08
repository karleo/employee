<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use App\Http\Requests\Employees\CreateEmployeeRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

use QrCode;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employees::all();
        return view('employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $maxID = Employees::max('id');        
        if (is_numeric($maxID)) {
            $nextNum = $maxID + 1;
        } else {
            $nextNum = 1;
        }
        $data = str_pad($nextNum, 6, '0', STR_PAD_LEFT);    

        return view('employees.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmployeeRequest $request)
    {
        //
        $validated = $request->validated();
        $photoname = $validated['fname'].'_'.$validated['lname'].'.'.$request->photo->extension();
        $photo_path = asset("photo/{$photoname}");
        $qr_path = storage_path("app/public/qr/{$photoname}.jpg");

        $request->photo->move(public_path('photo'), $photoname);

        Employees::create([
               'emp_no' => $validated['emp_no'],
               'fname' => $validated['fname'],
               'mname' => $validated['mname'],
               'lname' => $validated['lname'],
               'contact_no' => $validated['contact_no'],
               'mobile_no' => $validated['mobile_no'],
               'address' => $validated['address'],
               'company' => $validated['company'],
               'company_add' => $validated['company_add'],
               'email_add' => $validated['email_add'],
               'website' => $validated['website'],
               'photo' => $photo_path,
               'qr_path' => "qr/{$photoname}.png",
        ]);


        // Generate QR Code locally and upload to S3
        // if ( !Storage::disk('public')->exists('qr') ) {
        // Storage::disk('public')->makeDirectory( 'qr' );
        // }

        // QrCode::format('png')->generate(
        //     url("profile/{$profile_token}"),
        //     $qr_path
        // );
 
        $qrcodepath = QrCode::size(200)->format('png')->generate(asset('/qr/'.$validated['emp_no']), public_path('qr/'.$validated['emp_no'].'.png'));  

 
        return redirect()->route('employee.index')->with([
            'message' => 'New Employee has been created successfully.',
            'type' => 'success'
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employees)
    {
        //
        return view('employees.view',compact('employees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit(Employees $employees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employees $employees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employees $employees)
    {
        //
    }
}
