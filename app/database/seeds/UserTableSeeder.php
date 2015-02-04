<?php
class UserTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        // DB::table('users')->delete();
		User::truncate();

        User::create(array(
            'email'        => 'elishasenoo@gmail.com',
            'first_name'  => 'elisha',
            'other_name'  => 'elikem',
            'last_name'  => 'kofi',
            'password'  => 'james111',
            'email'     => 'elishasenoo@gmail.com'
        ));
    }
}