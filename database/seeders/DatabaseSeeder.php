<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $utilisateur1=User::create([
            "user_name"=>"marzouck",
            "password"=>bcrypt("123456"),
            "email"=>"marzouckbankole@yahoo.com",
            "role_id"=>1
        ]);

    }
}
