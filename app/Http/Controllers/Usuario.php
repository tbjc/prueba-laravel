<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redirect;
use App\User;
use Auth;

class Usuario extends Controller
{

    public function admin(){
    	if(Auth::check()){
    		$users = \App\User::orderBy('id','ASC')->paginate(5);
    		return view('admin')->with('usuarios',$users);
    	}else{
    		return redirect('/');
    	}
    }

    public function create(Request $request){
    	$usuario = new User;
    	$usuario->name = $request->name;
    	$usuario->email = $request->email;
    	$usuario->password = $request->password;
    	$usuario->save();
    	return redirect('/admin');
    }

}
