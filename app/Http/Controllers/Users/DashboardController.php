<?php

namespace App\Http\Controllers\Users;

use App\Consultation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $consultations = Consultation::where('user_id', Auth::user()->id)->get();
        return view('users.dashboard.index', compact('consultations'));
    }
}
