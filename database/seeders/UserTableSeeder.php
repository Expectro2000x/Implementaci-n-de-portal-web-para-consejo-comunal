<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Crear los seeds de la base de datos para
     * el primer admin y usuario.
     */
    public function run()
    {
        $user = new User;
        $user->name = 'usuario';
        $user->email = 'usuario@local.com';
        $user->password = Hash::make('letmein');
        $user->save();

        $user = new User;
        $user->name = 'vocero';
        $user->email = 'vocero@local.com';
        $user->password = Hash::make('password');
        $user->roleid = 2;
        $user->save();

        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@local.com';
        $user->password = Hash::make('admin');
        $user->roleid = 2;
        $user->save();
    }
}
