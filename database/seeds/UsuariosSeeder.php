<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'usuario' => 'lokcyam',
            'email' => 'lokcyam@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
