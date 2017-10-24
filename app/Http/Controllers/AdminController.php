<?php

namespace App\Http\Controllers;

use App\Application;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

	public function __construct(){
		$this->middleware('auth');
	}


    public function find_control_no(){
    	$search = \Request::get('find');
    	
    	$search_control = Application::where('control_no', 'like','%'.$search.'%')->first();
    	if (is_null($search_control)) {
    		
    	}else{

    		$getname = User::where('id', $search_control->user_id)->first();
    		// dd($search_control);
    	}
    	

    	// return redirect()->route('transaction.index', compact('search_control'));
    	return view('admin.transaction.index', compact('search_control', 'getname'));

    }

    public function transaction(){

    }
}
