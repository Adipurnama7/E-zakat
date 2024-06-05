<?php

namespace App\Http\Controllers;

use App\Models\zakat;
use App\Models\zakatFitrah;
use App\Models\mesjid;
use Illuminate\Http\Request;

class ZakatFitrahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $masjid = mesjid::all();
        $zakats = zakat::all();
        $zakatfitrah = zakatFitrah::all();
        $totalBeras = zakatFitrah::sum('Pembayaran_Beras');
        $totalUang = zakatFitrah::sum('Pembayaran_Uang');
        return view('pages.pembayaran.index', compact('masjid', 'zakatfitrah', 'zakats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $masjid = mesjid::all();
        $zakatfitrah = zakatFitrah::all();
        $zakats = zakat::all();
        return view('pages.pembayaran.create', compact('masjid', 'zakatfitrah', 'zakats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'Nama_pembayar' => 'required',
                'Tanggal_pembayaran' => 'required',
                'No_Hp' => 'required',
                'zakat_id' => 'required',
                'masjid_id' => 'required',
                'Alamat' => 'required',
                'Jumlah_Tanggungan' => 'required',
                'Pembayaran_Beras' => 'nullable',
                'Pembayaran_Uang' => 'nullable',
                'Total_Pembayaran' => 'required',
            ]);

            $zakatfitrah = new zakatFitrah();
            $zakatfitrah->Nama_Pembayar = $request->input('Nama_pembayar');
            $zakatfitrah->Tanggal_pembayaran = $request->input('Tanggal_pembayaran');
            $zakatfitrah->No_Hp = $request->input('No_Hp');
            $zakatfitrah->Alamat = $request->input('Alamat');
            $zakatfitrah->masjid_id = $request->input('masjid_id');
            $zakatfitrah->zakat_id = $request->input('zakat_id');
            $zakatfitrah->Jumlah_Tanggungan = $request->input('Jumlah_Tanggungan');
            $zakatfitrah->Pembayaran_Beras = $request->input('Pembayaran_Beras');
            $zakatfitrah->Pembayaran_Uang = $request->input('Pembayaran_Uang');
            $zakatfitrah->Total_Pembayaran = $request->input('Total_Pembayaran'); // Pastikan nama kolom yang benar disini
            $zakatfitrah->user_id = auth()->user()->id;
            $zakatfitrah->save();
            return redirect()->route('pembayaran.index');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('pembayaran.create');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(zakatFitrah $zakatfitrah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(zakatFitrah $pembayaran)
    {
        $masjid = mesjid::all();
        $zakats = zakat::all();
        return view('pages.pembayaran.edit', compact('masjid', 'pembayaran', 'zakats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, zakatFitrah $zakatfitrah)
    {
        try {
            $validatedData = $request->validate([
                'Nama_pembayar' => 'required',
                'Tanggal_pembayaran' => 'required',
                'No_Hp' => 'required',
                'zakat_id' => 'required',
                'masjid_id' => 'required',
                'Alamat' => 'required',
                'Jumlah_Tanggungan' => 'required',
                'Pembayaran_Beras' => 'nullable',
                'Pembayaran_Uang' => 'nullable',
                'Total_Pembayaran' => 'required',
            ]);

            $zakatfitrah->Nama_Pembayar = $validatedData['Nama_pembayar'];
            $zakatfitrah->Tanggal_pembayaran = $validatedData['Tanggal_pembayaran'];
            $zakatfitrah->No_Hp = $validatedData['No_Hp'];
            $zakatfitrah->Alamat = $validatedData['Alamat'];
            $zakatfitrah->masjid_id = $validatedData['masjid_id'];
            $zakatfitrah->zakat_id = $request->input('zakat_id');
            $zakatfitrah->Jumlah_Tanggungan = $validatedData['Jumlah_Tanggungan'];
            $zakatfitrah->Pembayaran_Beras = $validatedData['Pembayaran_Beras'];
            $zakatfitrah->Pembayaran_Uang = $validatedData['Pembayaran_Uang'];
            $zakatfitrah->Total_Pembayaran = $validatedData['Total_Pembayaran'];
            $zakatfitrah->user_id = auth()->user()->id;
            $zakatfitrah->save();

            return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->route('pembayaran.index')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(zakatFitrah $zakatfitrah)
    {
        $zakatfitrah->delete();
        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil dihapus');
    }
}