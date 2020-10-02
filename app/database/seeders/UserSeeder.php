<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => Str::random(10),
                'email' => 'test1@gmail.com',
                'password' => Hash::make('password'),
                'tenant_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'email' => 'test2@gmail.com',
                'password' => Hash::make('password'),
                'tenant_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'email' => 'test3@gmail.com',
                'password' => Hash::make('password'),
                'tenant_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'email' => 'test4@gmail.com',
                'password' => Hash::make('password'),
                'tenant_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'email' => 'test5@gmail.com',
                'password' => Hash::make('password'),
                'tenant_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'email' => 'test6@gmail.com',
                'password' => Hash::make('password'),
                'tenant_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
