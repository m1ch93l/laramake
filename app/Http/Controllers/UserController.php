<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function index(){
        return 'Hello from M1ch93lTech';
    }

    public function login(){
        if(View::exists('user.login')){
            return view('user.login');
        }else{
            return abort(404);
        }
    }

    public function show($id){

        return view('user')
        ->with('name', 'm1ch93l')
        ->with('age', '25')
        ->with('email', 'sample@gmail.com')
        ->with('id', '3');
    }
}
