<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Appointment;

class LoginController extends Controller
{
    public function indexLogin()
    {
        $users = User::all();
        return view('login', compact('users'));
    }

    public function indexRegister()
    {
        $users = User::all();
        return view('create', compact('users'));
    }

    public function register(Request $request){

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        $appointments = Appointment::where('user_id', $user->id)->get();
        return redirect()->route('user_profile')->with(compact('appointments'));
    }

    public function login(Request $request){

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $remember = ($request->has('remember') ? true : false);

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            $appointments = Appointment::where('user_id', Auth::id())->get();
            return redirect()->intended('user_profile')->with(compact('appointments'));
        }else{
            return redirect('user.index');
        }
    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('user.index');

    }
}
