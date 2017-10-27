<?php

namespace App\Http\Controllers;

use App\Application;
use App\Contact;
use App\Father;
use App\Mother;
use App\Other;
use App\Profile;
use App\Purpose;
use DB;
use Session;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function __construct(){
         $this->middleware('auth');
    }
    
    public function index()
    {
        //
    }

    public function create()
    {
        $purposes = Purpose::all();
        // $profile = Profile::where('user_id',$id)->first();

        return view('application.create_application', compact('purposes'));
    }

    public function store(Request $request)
    {
        // $purposes = Purpose::all();

        $check = Application::where('user_id', auth()->user()->id)->count();
        // dd($check);
        if ($check < 1)  {

            $application = new Application();

            $application->user_id = auth()->user()->id;
            $application->control_no = date('di-').rand(111111111, 999999999);
            $application->name = auth()->user()->firstname. ' ' .auth()->user()->lastname;
            $application->purpose = $request->purpose;
            $application->appointment_date = $request->appointment_date;
            $application->save();

            Session::flash('success', 'Application sent!');
            return redirect()->route('application.create');
        }else{
            Session::flash('danger', 'Unable to submit appointment due to pending appointment.');
            return redirect()->route('application.create');
        }
        

        // Session::flash('success', 'Application sent!');
        // return redirect()->route('application.create');
    }

    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
