<?php

use App\Contact;
use App\Father;
use App\Mother;
use App\Other;
use App\Profile;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
   

    public function run()
    {

       $role_admin = Role::where('name', 'admin')->first();
       $role_applicant  = Role::where('name', 'applicant')->first();

       /* Admin DEFAULT*/

       $admin_default = new User();
       $admin_default->id = 1;
       $admin_default->email = 'admin@gmail.com';
       $admin_default->firstname = 'Admin';
       $admin_default->lastname = 'Admin';
       $admin_default->password = bcrypt('secret');
       $admin_default->avatar = 'public/default/avatars/default.jpg';
       $admin_default->slug = 'admin-admin';
       $admin_default->save();
       $admin_default->roles()->attach($role_admin);;

       // $admin_default_profile = new Profile();
       // $admin_default_profile->user_id = 1;
       // $admin_default_profile->middle_name = 'admin';
       // $admin_default_profile->extension_name = null;
       // $admin_default_profile->age = 22;
       // $admin_default_profile->gender = 'Male';
       // $admin_default_profile->present_add = 'Philippines';
       // $admin_default_profile->provincial_add = 'La Trinidad Benguet';
       // $admin_default_profile->dob = now();
       // $admin_default_profile->pob = 'Manila, Philippines';
       // $admin_default_profile->civil_status = 'married';
       // $admin_default_profile->citizenship = 'Filipino';
       // $admin_default_profile->height = "7'9''";
       // $admin_default_profile->weight = '65';
       // $admin_default_profile->visible_marks = 'none';
       // $admin_default_profile->purpose = null;
       // $admin_default_profile->save();

       // $admin_default_mother = new Mother();
       // $admin_default_mother->user_id = 1;
       // $admin_default_mother->m_first_name = 'Gregoria';
       // $admin_default_mother->m_middle_name = 'Mandra';
       // $admin_default_mother->m_last_name = 'Del pilar';
       // $admin_default_mother->save();


       // $admin_default_father = new Father();
       // $admin_default_father->user_id = 1;
       // $admin_default_father->f_first_name = 'Juan';
       // $admin_default_father->f_middle_name = 'Ponce';
       // $admin_default_father->f_last_name = 'Enrile';
       // $admin_default_father->f_extension_name = 'Sr';
       // $admin_default_father->save();

       // $admin_default_contacts = new Contact();
       // $admin_default_contacts->user_id = 1;
       // $admin_default_contacts->mobile = '09275512445';
       // $admin_default_contacts->telephone = '077545155';
       // $admin_default_contacts->save();

       // $admin_default_other = new Other();
       // $admin_default_other->user_id = 1;
       // $admin_default_other->cedula = '32050512';
       // $admin_default_other->c_date_issued = now();
       // $admin_default_other->passport = 'null';
       // $admin_default_other->p_date_issued = null;
       // $admin_default_other->save();

       /* USER DEFAULT*/

       $user_default = new User();
       $user_default->id = 2;
       $user_default->email = 'mark@gmail.com';
       $user_default->firstname = 'Mark';
       $user_default->lastname = 'Zuckerberg';
       $user_default->password = bcrypt('secret');
       $user_default->avatar = 'public/default/avatars/default.jpg';
       $user_default->slug = 'mark-zuckerberg';
       $user_default->save();
       $user_default->roles()->attach($role_applicant);;

       $user_default_profile = new Profile();
       $user_default_profile->user_id = 2;
       $user_default_profile->middle_name = 'Elliot';
       $user_default_profile->extension_name = null;
       $user_default_profile->age = 33;
       $user_default_profile->gender = 'Male';
       $user_default_profile->present_add = 'New York';
       $user_default_profile->provincial_add = 'La Trinidad Benguet';
       $user_default_profile->dob = now();
       $user_default_profile->pob = 'Newy york, New york';
       $user_default_profile->civil_status = 'married';
       $user_default_profile->citizenship = 'Jew';
       $user_default_profile->height = "7'9''";
       $user_default_profile->weight = '78';
       $user_default_profile->visible_marks = 'none';
       $user_default_profile->purpose = null;
       $user_default_profile->save();

       $user_default_mother = new Mother();
       $user_default_mother->user_id = 2;
       $user_default_mother->m_first_name = 'Maria Theresa';
       $user_default_mother->m_middle_name = 'Otaku';
       $user_default_mother->m_last_name = 'Leonora';
       $user_default_mother->save();


       $user_default_father = new Father();
       $user_default_father->user_id = 2;
       $user_default_father->f_first_name = 'Gregorio';
       $user_default_father->f_middle_name = 'Marcelo';
       $user_default_father->f_last_name = 'Pilar';
       $user_default_father->f_extension_name = null;
       $user_default_father->save();

       $user_default_contacts = new Contact();
       $user_default_contacts->user_id = 2;
       $user_default_contacts->mobile = '09267722222';
       $user_default_contacts->telephone = '0746627662';
       $user_default_contacts->save();

       $user_default_other = new Other();
       $user_default_other->user_id = 2;
       $user_default_other->cedula = '12121212';
       $user_default_other->c_date_issued = now();
       $user_default_other->passport = '12121212';
       $user_default_other->p_date_issued = now();
       $user_default_other->save();
    }
}
