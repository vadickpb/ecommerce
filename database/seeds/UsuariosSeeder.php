<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'vadick',
            'email' => 'vadick@vadick.com',
            'password' => Hash::make('12345678')
        ]);

        $user2 = User::create([
            'name' => 'juan',
            'email' => 'juan@juan.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
