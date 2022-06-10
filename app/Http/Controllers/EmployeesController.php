<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use App\Http\Requests\Employees\CreateEmployeeRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

use QrCode;
use JeroenDesloovere\VCard\VCard;

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

    public function downloadvcard(Employees $employees){
        $vcard = new VCard();                
        // define variables
        $lastname = $employees->lname;
        $firstname = $employees->fname;
        $additional = '';  //middle name
        $prefix = '';
        $suffix = '';

        // add personal data
        $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);

        // add work data
        $vcard->addCompany($employees->company);
        $vcard->addJobtitle('');
        $vcard->addRole('');
        $vcard->addEmail($employees->email_add);
        $vcard->addPhoneNumber($employees->contact_no, 'PREF;WORK');
        $vcard->addPhoneNumber($employees->mobile_no, 'WORK');
        $vcard->addAddress(null, null, 'street', 'worktown', null, 'workpostcode', 'Belgium');
        $vcard->addLabel('street, worktown, workpostcode Belgium');
        $vcard->addURL($employees->website);
        $vcard->addPhoto($employees->photo);
        return $vcard->download();
    }

    public function generateQR(Employees $employees){

        $qrcodepath = QrCode::size(200)->format('png')->generate(asset('/qr/'.$employees->emp_no), public_path('qr/'.$employees->emp_no.'.png'));  
        $qr_path = asset('/qr/'.$employees->emp_no.'.png') ;
        $employees->qr_path =  $qr_path;  
        $employees->save();

        return redirect()->route('employee.index')->with([
            'message' => 'Employee has been generated successfully.',
            'type' => 'success'
        ]);
    }

    public function details(Employees $employees){
        
        return view('employees.detail',compact('employees'));

    }


}
