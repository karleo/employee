<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use Illuminate\Support\Facades\Response;
use QrCode;

class CardController extends Controller
{
    //
    public function index()
    {
        //
        $employees = Employees::all();
        return view('card.index',compact('employees'));
    }

    public function cardshow(Employees $employees)
    {
        //
        return view('card.index',compact('employees'));
    }
}
