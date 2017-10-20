<?php

use App\Contact;
use App\Father;
use App\Mother;
use App\Other;
use App\Profile;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
   

    public function run()
    {
       $user_default = new User();
       $user_default->id = 1;
       $user_default->email = 'mark@gmail.com';
       $user_default->firstname = 'Mark';
       $user_default->lastname = 'Zuckerberg';
       $user_default->password = bcrypt('secret');
       $user_default->avatar = 'public/default/avatars/default.jpg';
       $user_default->slug = 'mark-zuckerberg';
       $user_default->save();

       $user_default_profile = new Profile();
       $user_default_profile->user_id = 1;
       $user_default_profile->middle_name = 'Elliot';
       $user_default_profile->extension_name = null;
       $user_default_profile->age = 33;
       $user_default_profile->gender = 'Male';
       $user_default_profile->present_add = 'New York';
       $user_default_profile->provincial_add = 'La Trinidad Benguet';
       $user_default_profile->dob = '14/5/1984';
       $user_default_profile->pob = 'Newy york, New york';
       $user_default_profile->civil_status = 'married';
       $user_default_profile->citizenship = 'Jew';
       $user_default_profile->height = "7'9''";
       $user_default_profile->weight = '78';
       $user_default_profile->visible_marks = 'none';
       $user_default_profile->purpose = 'Change of Name';
       $user_default_profile->save();

       $user_default_mother = new Mother();
       $user_default_mother->user_id = 1;
       $user_default_mother->m_first_name = 'Maria Theresa';
       $user_default_mother->m_middle_name = 'Otaku';
       $user_default_mother->m_last_name = 'Leonora';
       $user_default_mother->save();


       $user_default_father = new Father();
       $user_default_father->user_id = 1;
       $user_default_father->f_first_name = 'Gregorio';
       $user_default_father->f_middle_name = 'Marcelo';
       $user_default_father->f_last_name = 'Pilar';
       $user_default_father->f_extension_name = null;
       $user_default_father->save();

       $user_default_contacts = new Contact();
       $user_default_contacts->user_id = 1;
       $user_default_contacts->mobile = '09267712121';
       $user_default_contacts->telephone = '0746617661';
       $user_default_contacts->save();

       $user_default_other = new Other();
       $user_default_other->user_id = 1;
       $user_default_other->cedula = '12121212';
       $user_default_other->cedula_day = 1;
       $user_default_other->cedula_month = 11;
       $user_default_other->cedula_year = 1999;
       $user_default_other->passport = '12121212';
       $user_default_other->passport_day = 1;
       $user_default_other->passport_month = 11;
       $user_default_other->passport_year = 2015;
       $user_default_other->save();
    }
}
