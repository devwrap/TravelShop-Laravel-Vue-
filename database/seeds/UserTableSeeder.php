<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
    
        // users::create(array(
        //     'name' => 'Devansh',
        //     'email' => 'devwrap@gmail.com',
        //     'password' => 'pass'
        // ));
    
        /*DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);*/

		DB::table('users')->insert([
            'name' => 'test1',
            'email' => 'test1@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'test2',
            'email' => 'test2@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
