<?php

/**
 * Created by PhpStorm.
 * User: Ayaz Ahmed Mast
 * Date: 5/19/2016
 * Time: 8:11 PM
 */
class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Asif Iqbal',
            'email' => 'asif@asif.com',
            'password' => Hash::make( 'abc123' )
        ]);

    }

}