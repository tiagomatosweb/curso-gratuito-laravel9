<?php

namespace App\Http\Controllers;

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
        $user->posts()->create([
            'title' => 'Meu primeiro post',
            'body' => 'Isso é um post',
        ]);
        // $user->posts()->delete();

        return view('user', [
            'name' => 'Jon Snow',
            'user' => $user,
        ]);
    }
}
