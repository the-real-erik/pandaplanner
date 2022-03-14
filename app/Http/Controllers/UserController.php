<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{


    public function index()
    {
        $users = User::all();

        $out = '<pre/>';
        foreach ($users as $user) {
            $out .= print_r("{$user->first_name} {$user->last_name} " . PHP_EOL, TRUE);
            foreach ($user->roles as $role) {
                $out .= "Group ID: {$role->pivot->group_id}, Role: {$role->name}" . PHP_EOL;
            }
        }
        return ($out);
    } // End function index
}
