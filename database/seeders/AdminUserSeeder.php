<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Farm Admin',
            'email' => 'qos.admin@gmail.com',
            'password' => Hash::make('Munyaka-22'),
            'is_admin' => true,
        ]);
    }
}
