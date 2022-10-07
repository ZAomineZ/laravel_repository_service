<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
         $users = User::factory(5)->create();

         foreach ($users as $user) {
             Post::factory(3)->create(['user_id' => $user->id]);
         }
    }
}
