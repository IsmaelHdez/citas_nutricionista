<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserRegistro extends Component
{
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:4',
    ];

    public function submit()
    {
        $this->validate(); // Valida los datos según las reglas

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        session()->flash('message', 'Usuario registrado correctamente.');
        
        $this->reset(); // Limpia los campos del formulario
    }

    public function render()
    {
        return view('livewire.user-registro');
    }
}
