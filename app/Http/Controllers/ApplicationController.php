<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Father;
use App\Mother;
use App\Other;
use App\Profile;
use App\Purpose;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    
    public function index()
    {
        //
    }

    public function create()
    {
        $purposes = Purpose::all();
        $profile = Profile::where('user_id', auth()->user()->id)->first();
        $contact = Contact::where('user_id',auth()->user()->id)->first();
        $mother = Mother::where('user_id',auth()->user()->id)->first();
        $father = Father::where('user_id',auth()->user()->id)->first();
        $other = Other::where('user_id', auth()->user()->id)->first();
        // dd($profile);

        return view('applicant.create_applicant', compact('purposes','profile','contact','mother','father','other'));
    }

    public function store(Request $request)
    {
        
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
