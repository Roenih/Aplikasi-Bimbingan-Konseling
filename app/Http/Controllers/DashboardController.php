<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard()
    {
         return view('Dashboard.dashboard');
    }

    Public function Profile()
    {
        return view('Dashboard.Profile');
    }
}
