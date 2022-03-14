<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\GroupRoleUser;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
        $this->call([
            RoleSeeder::class,
            PermissionSeeder::class,
            GroupSeeder::class
        ]);

        $users = User::factory()->count(20)->create();

        $groupRoleUsers = GroupRoleUser::factory()->count(5)->state(new Sequence(
            fn ($sequence) => [
                'user_id' => User::all()->random(),
                'group_id' => Group::all()->random(),
                'role_id' => Role::all()->random()
            ]
        ))->create();
    }
}
