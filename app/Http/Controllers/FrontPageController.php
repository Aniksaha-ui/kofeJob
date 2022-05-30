<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class FrontPageController extends Controller
{
    // public function index(){
    //     return view('index');
    // }

    public function home(){
        return view('home-page');
    }    

    public function test(){
        return view('favourites');
    }

}
