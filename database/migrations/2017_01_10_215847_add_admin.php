<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

class AddAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $username = 'mapprintszr@gmail.com';
        $password = 'guzara11';
        $password_salt = str_random(31);
        $password = Hash::make($password.$password_salt);

        DB::table('Admins')->insert(
            [
                'username'      =>  $username, 
                'password'      =>  $password,
                'password_salt' =>  $password_salt,
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
