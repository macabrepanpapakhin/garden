<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Panier;
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
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user =User::factory()->create([
            'id'=>1,
            'username'=>'username',
        ]);
        \App\Models\User::factory(10)->create();
        Panier::factory(10)->create([
            'user_id' =>$user->id,

            'username'=>$user->username
        ]);

        
    }
}
