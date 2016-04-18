<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Requests\LogRequest;

class Inicio extends Controller{

	
	public function index(){
		return view('welcome');
	}
    
    public function login(LogRequest $request){
    	$user= DB::table('users')->where(['email'=>$request->email, 'password'=>$request->password])->first();

        if(isset($user)){
        	Auth::loginUsingId($user->id);
        	return redirect('/admin');
        }else{
        	return redirect('/');
        }
    }

    public function salir(){
    	Auth::logout();
    	return redirect('/');
    }
}
