<?php

use Illuminate\Database\Seeder;

class RequestSeeder extends Seeder
{
    public function run()
    {
        DB::table('requests')->delete();

        DB::table('requests')->insert([
            'item_name' => 'marshals headphones',
            'item_description' => 'abcd',
            'country' => 'hongkong',
            'quantity' => '1',
            'price' => '8500',
            'user_id' => '2',
            'status' => 'open'
        ]);

        DB::table('requests')->insert([
            'item_name' => 'shoes',
            'item_description' => 'abcd',
            'country' => 'USA',
            'quantity' => '1',
            'price' => '3500',
            'user_id' => '5',
            'status' => 'open'
        ]);

        DB::table('requests')->insert([
            'item_name' => 'xyz',
            'item_description' => 'abc',
            'country' => 'singapore',
            'quantity' => '1',
            'price' => '500',
            'user_id' => '5',
            'status' => 'open'
        ]);

        /*DB::table('requests')->insert([
            'product_name' => '',
            'description' => '',
            'country' => '',
            'quantity' => '',
            'price' => '',
            'user_id' => '',
            'status' => ''
        ]);*/
    }
}
