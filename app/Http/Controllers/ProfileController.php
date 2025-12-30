<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;


class ProfileController extends Controller
{
    //
    public function index()
    {
        // Obtener todas las citas del usuario con el tipo de cita
        $appointments = Appointment::with('appointmentType')
                            ->where('user_id', auth()->id())
                            ->get();

        return view('user_profile', compact('appointments'));
    }
}
