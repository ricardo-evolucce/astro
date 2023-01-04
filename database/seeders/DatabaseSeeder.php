<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB, Hash, Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table("users")->truncate();
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@material.com',
            'role_id' => 1,
            'password' => ('secret')
        ]);
        

        DB::table("roles")->truncate();
        DB::table("roles")->insert(
            [
                [
                    "name" => "admin",
                ],
                [
                    "name" => "veterinary",
                ],
                [
                    "name" => "bather",
                ],
                [
                    "name" => "groomer",
                ]
            ]
        );


    }
}
