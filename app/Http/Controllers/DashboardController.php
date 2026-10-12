<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Tampilkan project milik user yang sedang login.
     */
    public function index()
    {
        $projects = Auth::user()
            ->projects()
            ->latest()
            ->get();

        return view('dashboard', compact('projects'));
    }
}
