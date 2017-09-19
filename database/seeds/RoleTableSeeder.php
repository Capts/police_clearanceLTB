<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employer = new Role();
        $role_employer->name = 'admin';
        $role_employer->description = 'You are an admin';
        $role_employer->save();

        $role_applicant = new Role();
        $role_applicant->name = 'applicant';
        $role_applicant->description = 'You are an applicant';
        $role_applicant->save();
    }
}
