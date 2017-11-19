<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToApplications extends Migration
{
    
    public function up()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->string('status')->after('purpose')->nullable();
        });
    }

    
    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            //
        });
    }
}
