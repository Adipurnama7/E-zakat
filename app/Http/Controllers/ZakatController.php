<?php

namespace App\Http\Controllers;

use App\Models\zakat;
use Illuminate\Http\Request;

class ZakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zakats = zakat::all();
        return view('pages.zakat.index', compact('zakats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.zakat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'Jenis_Zakat' => 'required',

            ]);

            $Zakat = new Zakat;
            $Zakat->Jenis_Zakat = $request->input('Jenis_Zakat');
            $Zakat->save();
            return redirect()->route('zakat.index');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('/form_tambah_zakat');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(zakat $zakat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(zakat $zakat)
    {
        return view('pages.zakat.edit', compact('zakat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, zakat $zakat)
    {
        try {
            $validatedData = $request->validate([
                'Jenis_Zakat' => 'required',

            ]);

            $zakat->Jenis_Zakat = $request->input('Jenis_Zakat');
            $zakat->save();
            return redirect()->route('zakat.index');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('/form_tambah_zakat');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(zakat $zakat)
    {
        $zakat->delete();
        return to_route('zakat.index');
    }
}
