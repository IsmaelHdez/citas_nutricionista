<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Livewire\Component;

class UserLogin extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function submit()
    {
        $this->validate(); // Valida los datos según las reglas

        if (! Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ])) {
            $this->addError('email', 'Credenciales incorrectas.');
            return;
        }
        
        session()->regenerate();

        return redirect()->intended('/user_profile');
    }

    public function render()
    {
        return view('livewire.user-login');
    }
}
