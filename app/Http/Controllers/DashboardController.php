<?php

namespace App\Http\Controllers;

use App\Other;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function dashboard(){

   	

   	return view('dashboard');
   }
}
