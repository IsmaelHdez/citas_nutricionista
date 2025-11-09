<?php

namespace App\Http\Controllers;
use App\Models\AppointmentType;
use App\Enums\EnumStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AppointmentTypeController extends Controller
{
    //
    public function index()
    {
        $appointment_types = AppointmentType::all();
        return view('reserve', compact('appointment_types'));
    }

    
}