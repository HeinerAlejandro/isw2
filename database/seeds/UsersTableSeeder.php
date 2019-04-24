<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        User::create([
            'usuario' => 'juanito',
            'password' => Hash::make('adminadmin'),
            'name' => 'Administrator',
        ]);
    }
}
