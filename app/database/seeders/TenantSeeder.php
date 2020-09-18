<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tenants')->insert([
            [
                'name' => 'leverages',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'bisineach',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
