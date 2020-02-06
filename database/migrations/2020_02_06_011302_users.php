<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->time('clock_In');
            $table->time('start_Break');
            $table->time('end_Break');
            $table->time('clock_Out');
            $table->time('total_Timed_Worked');
            $table->time('hours_Left_Before_Timeout');
            $table->time('total_Break_Used');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
