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
            PermissionSeeder::class
        ]);

        $users = User::factory()->count(20)->create();
        $groups = Group::factory()->count(10)->create();

        $roles = Role::all();

        $groupRoleUsers = GroupRoleUser::factory()->count(5)->create();

//        $groupRoleUsers = GroupRoleUser::factory()->count(5)->state(new Sequence(
//            fn ($sequence) => [
//                'user_id' => $users->random()->id,
//                'group_id' => $groups->random()->id,
//                'role_id' => $roles->random()->id
//            ]
//        ))->create();
    }
}
