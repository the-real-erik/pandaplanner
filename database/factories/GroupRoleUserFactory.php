<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GroupRoleUser>
 */
class GroupRoleUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, DB::table('users')->orderBy('id', 'desc')->first()->id),
            'group_id' => rand(1, DB::table('groups')->orderBy('id', 'desc')->first()->id),
            'role_id' => rand(1, DB::table('roles')->orderBy('id', 'desc')->first()->id),
            'created_by' => 'Artisan Seeder'
        ];
    }
}
