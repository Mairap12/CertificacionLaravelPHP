<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DataBaseSeeder extends Seeder
{
    public function run(): void 
    {
        DB::table('docente')->insert([
            'nombre' => 'admin2',
            'apellido' => 'admin',
            'email' => 'admin2@admin.com',
            'password' => Hash::make('admin'),
        ]);
        DB::table('estudiante')->insert([
            'nombre' => 'Maira',
            'apellido' => 'Perez',
            'email' => 'mairaperez@gmail.com',
            'password' => Hash::make('maira'),
        ]);
    }
}