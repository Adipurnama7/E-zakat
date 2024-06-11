<?php

namespace App\Http\Controllers;

use App\Models\mustahik;
use App\Models\penyaluran;
use Illuminate\Http\Request;

class PenyaluranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchQuery = $request->input('search');
        $penyaluranQuery = penyaluran::query();

        // If search query exists, filter the data
        if ($searchQuery) {
            $penyaluranQuery->where('Nama_Penerima', 'like', '%' . $searchQuery . '%');
            // Replace 'field_name' with the actual field you want to search by
        }

        $penyaluran = $penyaluranQuery->get();
        $TotalPenyaluranBeras = $penyaluranQuery->sum('jumlah_penerimaan_beras');
        $TotalPenyaluranUang = $penyaluranQuery->sum('jumlah_penerimaan_uang');

        return view('pages.penyaluran.index', compact('penyaluran', 'TotalPenyaluranBeras', 'TotalPenyaluranUang', 'searchQuery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mustahik = mustahik::all();
        $penyaluran = penyaluran::all();
        return view('pages.penyaluran.create', compact('mustahik'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        try {

            $validatedData = $request->validate([
                'nama_penerima'  => 'required',
                'jumlah_penerimaan_uang'  => 'nullable',
                'jumlah_penerimaan_beras'  => 'nullable',
                'nama_amil'  => 'required',
                'tanggal_penerimaan' => 'required'
            ]);
            $penyaluran = new penyaluran();
            $penyaluran->Nama_Penerima = $request->input('nama_penerima');
            $penyaluran->jumlah_penerimaan_uang = $request->input('jumlah_penerimaan_uang');
            $penyaluran->jumlah_penerimaan_beras = $request->input('jumlah_penerimaan_beras');
            $penyaluran->nama_amil = $request->input('nama_amil');
            $penyaluran->tanggal_penerimaan = $request->input('tanggal_penerimaan');
            $penyaluran->save();
            return redirect()->route('penyaluran.index');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('/penyaluran');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(penyaluran $penyaluran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penyaluran $penyaluran)
    {
        $mustahik = Mustahik::all();
        return view('pages.penyaluran.edit', compact('penyaluran', 'mustahik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penyaluran $penyaluran)
    {
        try {
            $validatedData = $request->validate([
                'nama_penerima'  => 'required',
                'jumlah_penerimaan_uang'  => 'nullable',
                'jumlah_penerimaan_beras'  => 'nullable',
                'nama_amil'  => 'required',
                'tanggal_penerimaan' => 'required'
            ]);

            $penyaluran->nama_penerima = $request->input('nama_penerima');
            $penyaluran->jumlah_penerimaan_uang = $request->input('jumlah_penerimaan_uang');
            $penyaluran->jumlah_penerimaan_beras = $request->input('jumlah_penerimaan_beras');
            $penyaluran->nama_amil = $request->input('nama_amil');
            $penyaluran->tanggal_penerimaan = $request->input('tanggal_penerimaan');
            $penyaluran->save();

            return redirect()->route('penyaluran.index');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('/penyaluran');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penyaluran $penyaluran)
    {
        $penyaluran->delete();
        return redirect()->route('penyaluran.index');
    }
}
