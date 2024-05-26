<?php

namespace App\Http\Controllers;


use App\Models\donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $donasi = donasi::all();
        return view('pages.donasi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('views.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'Tanggal_Donasi' => 'required',
                'Nama_Donatur' => 'required',
                'No_Hp' => 'required',
                'Alamat' => 'required',
                'Total_Donasi' => 'required',
                'Bukti_Donasi' => 'required',

            ]);

            $donasi = new Donasi();
            $donasi->Tanggal_Donasi = $request->input('Tanggal_Donasi');
            $donasi->Nama_Donatur = $request->input('Nama_Donatur');
            $donasi->No_Hp = $request->input('No_Hp');
            $donasi->Alamat = $request->input('Alamat');
            $donasi->Total_Donasi = $request->input('Total_Donasi');
            $donasi->Bukti_Donasi = $request->input('Bukti_Donasi');
            $donasi->save();
            return redirect()->route('donasi.index');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('views.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(donasi $donasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(donasi $donasi)
    {

        return view('views.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, donasi $donasi)
    {
        try {
            $request->validate([
                'Tanggal_Donasi' => 'required',
                'Nama_Donatur' => 'required',
                'No_Hp' => 'required',
                'Alamat' => 'required',
                'Total_Donasi' => 'required',
                'Bukti_Donasi' => 'required',

            ]);

            $donasi = new Donasi();
            $donasi->Tanggal_Donasi = $request->input('Tanggal_Donasi');
            $donasi->Nama_Donatur = $request->input('Nama_Donatur');
            $donasi->No_Hp = $request->input('No_Hp');
            $donasi->Alamat = $request->input('Alamat');
            $donasi->Total_Donasi = $request->input('Total_Donasi');
            $donasi->Bukti_Donasi = $request->input('Bukti_Donasi');
            $donasi->save();
            return redirect()->route('donasi.index');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('views.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(donasi $donasi)
    {
        $donasi->delete();
        return to_route('views.index');
    }
}
