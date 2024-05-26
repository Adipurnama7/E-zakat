<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Registercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('/register') ;
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $ifDuplicate = $request->input('name');
        $user = User::where('name', $ifDuplicate)->first();
        if($user){
            return redirect('/register')->with('danger', 'Akun '.$request->input('uname').' sudah terpakai!! Coba name');
        }else{
            $user = new User;
            $user->name = $ifDuplicate;
            $user->password = bcrypt($request->input('password'));
            $user->save();

            return redirect('/login');
        }
    }

 public function create()
    {
        return view('register');
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
}
