<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', [
            'users' => $users,
        ]);
    }

    public function show(User $user)
    {
        $team = Team::find(1);
        $team->load('users');
        // $team->users()->attach(3);
        return $team;
        // $user->load('teams');
        // $user->teams()->attach([1, 2]);
        // $user->teams()->sync([2, 3]);
        // $user->teams()->sync([1, 3]);
        // $user->teams()->syncWithoutDetaching([2]);
        // $user->teams()->detach([1, 3]);
        return $user;

        return view('user', [
            'name' => 'Jon Snow',
            'user' => $user,
        ]);
    }
}
