<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ActivityCategory;
use App\Models\DonationCategory;
use App\Models\Page;
use App\Models\ProjectCategory;
use App\Models\StaticPage;
use App\Models\NewsCategory;
use App\Models\RoleModel;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);

        User::create([
            'name' => 'Osman Ustalar',
            'email' => 'osmanustalar@gmail.com',
            'password' => bcrypt('test'),
            'is_active' => true
        ]);

        ServiceSeeder::run();

    }
}
