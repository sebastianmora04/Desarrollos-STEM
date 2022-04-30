<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sebastian',
            'lastname'=>'Mora',
            'email' => 'sebasdark@outlook.es',
            'password' => bcrypt('admin123'),
            'is_admin' => true,
            'is_staff' => true,
        ]);

        Blog::factory()->count(50)->create();
    }
}
