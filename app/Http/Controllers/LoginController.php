<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');
        //  dd($credentials);
        if (Auth::attempt($credentials)) { //melakukan autentifikasi
            // Authentikasi berhasil dilakukan

            session(['id' => Auth::user()->name]); //buat session untuk menampilkan nama (uname) dimenu
            return redirect('dasboard');
        } else {
            // Authentikasi gagal dilakukan
            return redirect('/login');
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
