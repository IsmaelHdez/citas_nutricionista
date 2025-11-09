<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Enums\UserRole; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));
    }

    public function create()
    {
        $users = User::all();
        return view('create', compact('users'));
    }

    public function store(Request $request)
    {

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => UserRole::Client,
        ]);

        return redirect()->route('login.create');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('login.create');
    }

    
}
