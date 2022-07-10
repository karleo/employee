<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    //

    public function index(Role $role){
        return view('role.index',compact('role'));
    }

    public function create(Request $request){

        return view('role.create');
    }

    public function store(Request $request){
        return view('role.index');
    }
}
