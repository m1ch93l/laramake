<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello from M1ch93lTech';
    }

    public function show($id){

        return view('user')
        ->with('name', 'm1ch93l')
        ->with('age', '25')
        ->with('email', 'sample@gmail.com')
        ->with('id', '3');
    }
}
