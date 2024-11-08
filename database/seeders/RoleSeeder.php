<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $sellerRole = Role::firstOrCreate(['name' => 'seller']);
        $buyerRole = Role::firstOrCreate(['name' => 'buyer']);

        $adminUser = User::firstOrCreate(
            ['email' => 'jessclarencearreza@gmail.com'],
            ['name' => 'Jess Clarence Arreza', 'password' => bcrypt('Admin123!')] // Optional if creating a new user
        );
        $adminUser->assignRole($adminRole);

        $sellerUser = User::firstOrCreate(
            ['email' => 'liel@gmail.com'],
            ['name' => 'Liel', 'password' => bcrypt('Admin123!')] // Optional if creating a new user
        );
        $sellerUser->assignRole($sellerRole);

        $buyerUser = User::firstOrCreate(
            ['email' => 'adrianne@gmail.com'],
            ['name' => 'Adrianne', 'password' => bcrypt('Admin123!')] // Optional if creating a new user
        );
        $buyerUser->assignRole($buyerRole);
    }
}
