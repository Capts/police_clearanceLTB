<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Role;
use App\Profile;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        
        $first = $data['firstname'];
        $last = $data['lastname'];
        $slug = $first . '-' . $last;
        $avatar = 'public/defaults/avatars/user_icon.png';



        $user = User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'slug' => $slug,
            'avatar' => $avatar
        ]);

        $this->assignRole($user)->createprofile($user);
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


}
