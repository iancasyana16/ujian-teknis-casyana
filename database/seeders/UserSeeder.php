<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $super = User::firstOrCreate(
            [
                'email' => 'superadmin@test.com',
                'name' => 'super admin',
                'password' => bcrypt('password'),
            ]
        );
        $super->assignRole('super admin');

        $manager = User::firstOrCreate(
            [
                'email' => 'manager@test.com',
                'name' => 'manager',
                'password' => bcrypt('password'),
            ]
        );
        $manager->assignRole('manager');

        $staff = User::firstOrCreate(
            [
                'email' => 'staff@test.com',
                'name' => 'staff',
                'password' => bcrypt('password'),
            ]
        );
        $staff->assignRole('staff');

        $finance = User::firstOrCreate(
            [
                'email' => 'finance@test.com',
                'name' => 'finance',
                'password' => bcrypt('password'),
            ]
        );
        $finance->assignRole('finance');
    }
}
