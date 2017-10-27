<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class UpdatePasswordController extends Controller
{
    public function __construct() {
    
        $this->middleware('auth');
    
    }

    public function updateget(){
        return view('auth.passwords.changepassword');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'old' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);
    
        $user = User::find(auth()->user()->id);
        $hashedPassword = $user->password;
    
        if (Hash::check($request->old, $hashedPassword)) {
            //Change the password
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();
    
            $request->session()->flash('success', 'Your password has been changed.');
    
            return back();
        }
    
        $request->session()->flash('failure', 'Your password has not been changed.');
    
        return back();
    
    
    }
}
