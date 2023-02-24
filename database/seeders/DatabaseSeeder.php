<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);


        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Артем',
             'phone' => '+79629071412',
             'password' => Hash::make('admin'),
             'email' => 'test@example.com',
         ]);

//        \App\Models\User::factory()->create([
//            'name' => 'Артем',
//            'phone' => '+79629071413',
//            'password' => Hash::make('admin'),
//            'email' => 'test@exaple.com',
//        ]);
    }
}
