<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class BerandaController extends Controller
{
    public function index(){
        return view ('user.product');
    }

    public function contact(){
        return view ('user.contact');
    } 

    public function company(){
        return view ('user.company');
    }
    
}
