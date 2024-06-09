<?php

namespace App\Http\Controllers;

use App\Models\maal;
use App\Models\penyaluran;
use App\Models\mustahik;
use App\Models\zakatFitrah;
use Illuminate\Http\Request;

class DashboardControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalMustahik = Mustahik::count();
        $totalMuzzaki = zakatFitrah::count();
        $totalBeras = ZakatFitrah::sum('Total_Pembayaran_Beras');
        $totalUangZakatFitrah = ZakatFitrah::sum('Total_Pembayaran');
        $totalUangZakatmaal = maal::sum('Pembayaran_Uang');
        $TotalPenyaluranBeras = penyaluran::sum('jumlah_penerimaan_beras');
        $TotalPenyaluranUang = penyaluran::sum('jumlah_penerimaan_uang');
        $totalSemuaUang = $totalUangZakatFitrah + $totalUangZakatmaal;
        $totalSemuaBeras = $totalBeras - $TotalPenyaluranBeras;

        // Hitung total pengeluaran uang
        $totalPengeluaranUang = $totalSemuaUang - $TotalPenyaluranUang;

        // Anda dapat menambahkan variabel lainnya atau logika lain di sini sesuai kebutuhan

        return view('pages.Dashboard.dasboard', compact('totalSemuaBeras', 'totalSemuaUang', 'totalMustahik', 'totalMuzzaki', 'totalBeras', 'totalUangZakatFitrah', 'TotalPenyaluranBeras', 'TotalPenyaluranUang', 'totalPengeluaranUang'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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
}
