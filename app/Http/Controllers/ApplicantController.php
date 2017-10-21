<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Father;
use App\Mother;
use App\Other;
use App\Profile;
use App\Purpose;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use Session;


class ApplicantController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function upload_image(Request $request, $id){
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');

            $filename = time() . "." . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 305)->save( public_path('/upload/avatars/' . $filename));

            $user = auth()->user();
            $user->avatar =$filename;
            $user->save();

        }
        return redirect()->route('dashboard');
    }
    


    public function index()
    {


        return view('applicant.index');
    }

    
    public function create()
    {
       
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
        
        $purposes = Purpose::all();
        
        $profile = Profile::where('user_id',$id)->first();
        // dd($profile);
        //get all fields

        $contact = Contact::where('user_id',$id)->first();
        // dd($all_contact);
        $mother = Mother::where('user_id',$id)->first();
        // dd($all_mother);
        $father = Father::where('user_id',$id)->first();
        // dd($all_father);
        $other = Other::where('user_id', $id)->first();
        // dd($other);
        return view('applicant.edit', compact('profile','purposes','contact','mother','father','other'));
    }

    
    public function update(Request $request, $id)
    {
        $user = User::where('id',$id)->first();
        // dd($user);
        $profile = Profile::where('user_id',$id)->first();
        $contact = Contact::where('user_id',$id)->first();
        // dd($contact);
        $mother = Mother::where('user_id',$id)->first();
        $father = Father::where('user_id',$id)->first();
        $other = Other::where('user_id', $id)->first();

        if (isset($user)) {
            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            $user->save();
        }

        if (isset($profile)) {
            $profile->middle_name = $request->input('middle_name');
            if ($request->extension_name == '') {
                $profile->extension_name = $request->input('null');
            }else{
                $profile->extension_name = $request->input('extension_name');
            }
                $profile->extension_name = $request->input('extension_name');
            $profile->age = $request->input('age');
            $profile->gender = $request->input('gender');
            $profile->present_add = $request->input('present_add');
            $profile->provincial_add = $request->input('provincial_add');
            $profile->dob = $request->input('dob');
            $profile->pob = $request->input('pob');
            $profile->civil_status = $request->input('civil_status');
            $profile->citizenship = $request->input('citizenship');
            $profile->height = $request->input('height');
            $profile->weight = $request->input('weight');
            if ($request->visible_marks == '') {
                $profile->visible_marks = 'none';
            }else{
                $profile->visible_marks = $request->input('visible_marks');
            }
            // $profile->purpose = $request->input('purpose');
            $profile->save();
        }
        if (isset($contact)) {
            $contact->mobile = $request->input('mobile');
            $contact->telephone = $request->input('telephone');
            $contact->save();
        }

        if (isset($mother)) {
            $mother->m_first_name = $request->input('m_first_name');
            $mother->m_middle_name = $request->input('m_middle_name');
            $mother->m_last_name = $request->input('m_last_name');
            $mother->save();
        }
        if (isset($father)) {
            $father->f_first_name = $request->input('f_first_name');
            $father->f_middle_name = $request->input('f_middle_name');
            $father->f_last_name = $request->input('f_last_name');
            $father->f_extension_name = $request->input('f_extension_name');
            $father->save();
        }
        if (isset($other)) {

            $other->cedula = $request->input('cedula');
            $other->c_date_issued = $request->input('c_date_issued');
            $other->save();

            if ($request->passport == '' OR $request->p_date_issued) {

                $other->passport = null;
                $other->p_date_issued = null;
                $other->save();
             }else{   
                $other->passport = $request->input('passport');
                $other->p_date_issued = $request->input('p_date_issued');
                $other->save();
            }
        }


        Session::flash('success', 'Your profile is now updated!');

        return redirect()->route('applicant.edit', $profile->id);
    }

   
    public function destroy($id)
    {
        //
    }
}
