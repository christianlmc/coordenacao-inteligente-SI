<?php

use App\Curso;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name' => 'Admin',
            'email' => 'admin@unb.br',
            'password' => Hash::make('123123'),
            'curso_id' => Curso::where('nome', 'CIÊNCIA DA COMPUTAÇÃO')->first()->id
        ];

        User::create($admin);
    }
}
