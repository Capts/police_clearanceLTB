<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOthersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('others', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('cedula')->nullable();
            $table->integer('cedula_day')->nullable();
            $table->integer('cedula_month')->nullable();
            $table->integer('cedula_year')->nullable();
            $table->string('passport')->nullable();
            $table->integer('passport_day')->nullable();
            $table->integer('passport_month')->nullable();
            $table->integer('passport_year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('others');
    }
}
