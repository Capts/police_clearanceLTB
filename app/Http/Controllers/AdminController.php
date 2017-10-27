<?php

namespace App\Http\Controllers;

use App\Application;
use App\User;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{

	public function __construct(){
		$this->middleware('auth');
	}


    public function search(){
    	$search = \Request::get('find');

    	// dd($search);
    	$search_control = Application::where('control_no', 'like','%'.$search.'%')
                                        ->with('user')
                                        ->orWhere('name', 'like', '%' .$search. '%')
                                        ->first();

                                        // ->where('lastname', 'like', '%' .$search. '%')
        // dd($search_control);
        if (is_null($search_control)) {
            Session::flash('danger', strtoupper($search). ' did not return a match in our database!');
        }else{

    	   Session::flash('success', 'Match found for ' . strtoupper($search). '!');
        }

        return view('admin.transaction.search_result', compact('search_control','search'));
    }


    public function result(){

        return view('admin.transaction.search_result');
    }

    public function transaction(){

        $applications = Application::with('user')->get();
        // dd($applications);
        return view('admin.transaction.index', compact('applications'));
    }
}
