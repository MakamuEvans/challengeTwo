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
        \App\User::create([
            'name'=>'Evans',
            'email'=>'makamuevans@gmail.com',
            'password'=>bcrypt('evans123')
        ]);
    }
}
