<?php

namespace App\Http\Controllers;

use App\Application;
use App\Purpose;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;

class RenewController extends Controller
{

    public function check(Request $request){
        // return $request->all();

        $checkEmail = User::where('email', $request->email)->with(['application','profile'])->first();

        if (is_null($checkEmail)) {
            Session::flash('registerfirst', 'This email is not yet registered');
            // return redirect()->back();
        }else{
            if ($checkEmail->application->count() == 1) {
                    Session::flash('existingapplication', 'Unable to submit application due to pending appointment.');
                    // return redirect()->back();
            }elseif(is_null($checkEmail->profile->gender)){

                Session::flash('profile-not-edited', 'Unable to submit application because your profile is not complete.');
                // return redirect()->back();
            }else{
                 // return response()->json(['success'=>true]);
            }
         }


    }
    
    // public function checkemail(Request $request){
    	
    //     $purposes = Purpose::all();

    // 	$checkEmail = User::where('email', $request->email)->with(['application','profile'])->first();
    //     // dd($checkEmail);

    //     if (is_null($checkEmail)) {
    // 		Session::flash('registerfirst', 'This email is not yet registered');
    // 		return redirect()->back();

    // 	}else{
    // 		if ($checkEmail->application->count() == 1) {
    //             Session::flash('existingapplication', 'Unable to submit application due to pending appointment.');
    //             return redirect()->back();
    //         }elseif(is_null($checkEmail->profile->gender)){

    //             Session::flash('profile-not-edited', 'Unable to submit application because your profile is not complete.');
    //             return redirect()->back();
    //         }
    //         return view('renew', compact('checkEmail','purposes'));
    // 	}


    	

    // }
    // public function proceedrenew(){

    // 	return view('renew');
    // }

    // public function store(Request $request)
    // {

    //     $getUser = User::where('email', $request->email)->first();
    //     $checkEmail = User::where('email', $request->email)->first();
    //     // dd($checkEmail);
    //     $checkApplications = Application::where('user_id', $getUser->id)->count();
    //     // dd($checkApplications);
       
    //     if ($checkApplications < 1)  {

    //         $application = new Application();

    //         $application->user_id = $request->id;
    //         $application->control_no = date('di-').rand(111111111, 999999999);
    //         $application->name = $request->firstname. ' ' .$request->lastname;
    //         $application->purpose = $request->purpose;
    //         $application->appointment_date = $request->appointment_date;
    //         $application->save();

    //         Session::flash('success', 'Application sent!');
    //         return "done";
    //     }
        
    // }





}
