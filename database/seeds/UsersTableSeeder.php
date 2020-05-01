<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Rol;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolAdmin =Rol::where('nombre', 'admin')->first();
        $rolMedico =Rol::where('nombre', 'medico')->first();
        $rolSecretaria =Rol::where('nombre', 'secretaria')->first();


        $admin = User::create([
            'name' => 'Usuario Administrador',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);

        $medico = User::create([
            'name' => 'Usuario Medico',
            'email' => 'medico@gmail.com',
            'password' => Hash::make('medico')
        ]);

        $secretaria = User::create([
            'name' => 'Usuario Secretaria',
            'email' => 'secretaria@gmail.com',
            'password' => Hash::make('secretaria')
        ]);

        $admin->roles()->attach($rolAdmin);
        $medico->roles()->attach($rolMedico);
        $secretaria->roles()->attach($rolSecretaria);
    }
}
