<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            ['name' => 'View Events'], ['name' => 'Create Events'], ['name' => 'Update Events'], ['name' => 'Delete Events'],
            ['name' => 'View Members'], ['name' => 'Create Members'], ['name' => 'Update Members'], ['name' => 'Delete Members'],
            ['name' => 'View Group Details'], ['name' => 'Create Group Details'], ['name' => 'Update Group Details'], ['name' => 'Delete Group Details'],
        ]);
    }
}
