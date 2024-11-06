<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Osman Ustalar',
            'email' => 'osmanustalar@gmail.com',
            'password' => bcrypt('test'),
            'is_active' => true
        ]);
        User::create([
            'name' => 'Serap Kayacan',
            'email' => 'kayacan@gmail.com',
            'password' => bcrypt('1234'),
            'is_active' => true
        ]);
    }
}
