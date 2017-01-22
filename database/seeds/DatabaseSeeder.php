<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->command->info('Users table seeded.');
        $this->call(RequestSeeder::class);
        $this->command->info('Request table seeded.');
    }
}
