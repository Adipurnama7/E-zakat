<?php

namespace App\Http\Controllers;


use App\Models\mustahik;
use Illuminate\Http\Request;

class mustahikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mustahik = mustahik::all();
        return view('pages.mustahik.index', compact('mustahik'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.mustahik.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'Nama_Penerima' => 'required',
                'Alamat_Penerima' => 'required',
                'Kategori' => 'required',

            ]);
            $mustahik = new mustahik();
            $mustahik->Nama_Penerima = $request->input('Nama_Penerima');
            $mustahik->Alamat_Penerima = $request->input('Alamat_Penerima');
            $mustahik->Kategori = $request->input('Kategori');
            $mustahik->save();
            return redirect()->route('mustahik.index');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('/mustahik');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(mustahik $mustahik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mustahik $mustahik)
    {
        return view('pages.mustahik.edit', compact('mustahik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mustahik $mustahik)
    {
        try {
            $validatedData = $request->validate([
                'Nama_Penerima' => 'required',
                'Alamat_Penerima' => 'required',
                'Kategori' => 'required',


            ]);

            $mustahik->Nama_Penerima = $request->input('Nama_Penerima');
            $mustahik->Alamat_Penerima = $request->input('Alamat_Penerima');
            $mustahik->Kategori = $request->input('Kategori');
            $mustahik->save();
            return redirect()->route('mustahik.index');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('mustahik');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mustahik $mustahik)
    {
        $mustahik->delete();
        return to_route('mustahik.index');
    }
}
