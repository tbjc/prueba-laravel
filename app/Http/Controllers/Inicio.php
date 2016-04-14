<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Requests\LogRequest;

class Inicio extends Controller{

	public function index(){
		return view('welcome');
	}
    
    public function login(LogRequest $request){
        if(Auth::attemt(['email'=>$request['email'],'password'=>$request['password']])){
        	Redirect::to('/admin');
        }
    }
}
