<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Usuario extends Controller
{
    public function admin(){
    	return view('admin');
    }
}
