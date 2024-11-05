<?php

namespace Database\Seeders;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasPermission;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_permission  = Role::create([
            'name' => 'pustakawan',
            'guard_name' => 'web',
        ]);
        $role_permission  = Role::create([
            'name' => 'pustakawan',
            'guard_name' => 'web',
        ]);
        $perpustakawan  = Role::create([
            'name' => 'pustakawan',
            'email' => 'pustakawan@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $perpustakawan->assignRole('perpustakawan');

        $mahasiswa  = Role::create([
            'name' => 'mahasiswa',
            'email' => 'mahasiswa1@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $mahasiswa->assignRole('perpustakawan');
    }
}
