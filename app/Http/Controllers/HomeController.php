<?php

namespace App\Http\Controllers;



use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
   
    // public function index($id)
    // {
    // 	$user = User::where('id', $id)->first();

    // 	// dd($profile);

    // 	return view('home', [$user->id,$user->slug], compact('profile'));
        
    // }
}
