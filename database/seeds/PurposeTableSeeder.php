<?php

use App\Purpose;
use Illuminate\Database\Seeder;

class PurposeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $purpose1 = new Purpose();
        $purpose1->id = 1;
        $purpose1->purpose = "Bank Requirement";
        $purpose1->save();

        $purpose2 = new Purpose();
        $purpose2->id = 2;
        $purpose2->purpose = "Change of Birth";
        $purpose2->save();

        $purpose3 = new Purpose();
        $purpose3->id = 3;
        $purpose3->purpose = "Drivers License Requirement ";
        $purpose3->save();

        $purpose4 = new Purpose();
        $purpose4->id = 4;
        $purpose4->purpose = "Employment Abroad Requirement";
        $purpose4->save();

        $purpose5 = new Purpose();
        $purpose5->id = 5;
        $purpose5->purpose = "Employment Abroad Requirement";
        $purpose5->save();

        $purpose6 = new Purpose();
        $purpose6->id = 6;
        $purpose6->purpose = "Firearm requirement";
        $purpose6->save();

        $purpose7 = new Purpose();
        $purpose7->id = 7;
        $purpose7->purpose = "Loan Requriement";
        $purpose7->save();

        $purpose8 = new Purpose();
        $purpose8->id = 8;
        $purpose8->purpose = "Marriage Requirement";
        $purpose8->save();

        $purpose9 = new Purpose();
        $purpose9->id = 9;
        $purpose9->purpose = "Naturalization Requirement";
        $purpose9->save();

        $purpose10 = new Purpose();
        $purpose10->id = 10;
        $purpose10->purpose = "Passport Requirement";
        $purpose10->save();

       




    }
}
