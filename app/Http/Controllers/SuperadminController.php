<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    /**
     * Display the superadmin dashboard.
     */
    public function index()
    {
        return view('superadmin.dashboard');
    }
}
