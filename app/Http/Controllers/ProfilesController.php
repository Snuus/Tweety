<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(user $user)
    {
        if ($user->isNot(current_user()))
        {
            abort(404);
        }
        return view('profiles.edit', compact('user'));
    }

}
