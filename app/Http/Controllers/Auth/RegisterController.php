<?php

namespace App\Http\Controllers\Auth;

use App\Contact;
use App\Father;
use App\Http\Controllers\Controller;
use App\Mother;
use App\Other;
use App\Profile;
use App\Role;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
   

    use RegistersUsers;

    
    protected $redirectTo = '/dashboard';

    
    public function __construct()
    {
        $this->middleware('guest');
    }

    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    
    protected function create(array $data)
    {

        
        $first = $data['firstname'];
        $last = $data['lastname'];
        $slug = $first . '-' . $last;
        $avatar = 'public/default/avatars/default.jpg';



        $user = User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'slug' => $slug,
            'avatar' => $avatar
        ]);

        $this->assignRole($user)->createprofile($user)->makeMother($user)->makeFather($user)->createContact($user)->createOther($user);
        return $user;
    }

    protected function assignRole($user){
        
        $user->roles()->attach(Role::where('name', 'applicant')->first());

        return $this;
    }

    protected function createprofile($user){

        $profile = new Profile();
        $profile->user_id = $user->id;
        // $profile->age = null;
        // $profile->bio = '';
        // $profile->bday ='';
        // $profile->civil_status = '';

        $user->profile()->save($profile);

        return $this;
    }

    protected function makeMother($user){

        $mother = new Mother();
        $mother->user_id = $user->id;

        $user->mother()->save($mother);

        return $this;
    }

    protected function makeFather($user){

        $father = new Father();
        $father->user_id = $user->id;

        $user->father()->save($father);

        return $this;

    }

    protected function createContact($user){

         $contact = new Contact();
        $contact->user_id = $user->id;

        $user->contact()->save($contact);

        return $this;
    }

    protected function createOther($user){

        $other = new Other();
        $other->user_id = $user->id;

        $user->other()->save($other);

        return $this;
    }


}
