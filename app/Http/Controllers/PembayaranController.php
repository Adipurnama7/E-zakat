<?php

namespace App\Http\Controllers;


use App\Models\pembayaran;
use App\Models\zakat;
use App\Models\mesjid;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $masjid = mesjid::all();
        $zakats = zakat::all();
        $pembayaran = pembayaran::all();
        return view('pages.pembayaran.index', compact('pembayaran', 'masjid', 'zakats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $masjid = mesjid::all();
        $zakats = zakat::all();
        return view('pages.pembayaran.create', compact('masjid', 'zakats'));
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
                'masjid_id' => 'required',
                'Alamat' => 'required',
                'zakat_id' => 'required',
                'Jumlah_Tanggungan' => 'required',
                'Pembayaran_Beras' => 'required',
                'Pembayaran_Uang' => 'nullable',
                'Uang_Yang_Dibayar' => 'required',



            ]);

            $totalPembayaran = $request->input('Pembayaran_Uang') * $request->input('Jumlah_Tanggungan');

            $pembayaran = new pembayaran;
            $pembayaran->Nama_Pembayar = $request->input('Nama_pembayar');
            $pembayaran->Tanggal_pembayaran = $request->input('Tanggal_pembayaran');
            $pembayaran->No_Hp = $request->input('No_Hp');
            $pembayaran->Tanggal_pembayaran = $request->input('Tanggal_pembayaran');
            $pembayaran->Alamat = $request->input('Alamat');
            $pembayaran->masjid_id = $request->input('masjid_id');
            $pembayaran->zakat_id = $request->input('zakat_id');
            $pembayaran->Jumlah_Tanggungan = $request->input('Jumlah_Tanggungan');
            $pembayaran->Pembayaran_Beras = $request->input('Pembayaran_Beras');
            $pembayaran->Pembayaran_Uang = $request->input('Pembayaran_Uang');
            $pembayaran->Uang_Yang_Dibayar = $request->input('Uang_Yang_Dibayar');
            $pembayaran->Total_Pembayaran = $totalPembayaran; // Set the calculated value
            $pembayaran->user_id = auth()->user()->id;
            $pembayaran->save();
            return redirect()->route('pembayaran.index');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('pembayaran.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pembayaran $pembayaran)
    {
        $masjid = mesjid::all();
        $zakats = zakat::all();
        return view('pages.pembayaran.edit', compact('pembayaran', 'masjid', 'zakats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pembayaran $pembayaran)
    {

        try {
            $validatedData = $request->validate([
                'Nama_pembayar' => 'required',
                'Tanggal_pembayaran' => 'required',
                'No_Hp' => 'required',
                'Alamat' => 'required',
                'zakat_id' => 'required',
                'masjid_id' => 'required',
                'Jumlah_Tanggungan' => 'required',
                'Pembayaran_Beras' => 'required',
                'Pembayaran_Uang' => 'required',
                'Uang_Yang_Dibayar' => 'required',
            ]);

            $totalPembayaran = $request->input('Pembayaran_Uang') * $request->input('Jumlah_Tanggungan');


            $pembayaran->Nama_Pembayar = $request->input('Nama_pembayar');
            $pembayaran->Tanggal_pembayaran = $request->input('Tanggal_pembayaran');
            $pembayaran->No_Hp = $request->input('No_Hp');
            $pembayaran->Tanggal_pembayaran = $request->input('Tanggal_pembayaran');
            $pembayaran->Alamat = $request->input('Alamat');
            $pembayaran->masjid_id = $request->input('masjid_id');
            $pembayaran->zakat_id = $request->input('zakat_id');
            $pembayaran->Jumlah_Tanggungan = $request->input('Jumlah_Tanggungan');
            $pembayaran->Pembayaran_Beras = $request->input('Pembayaran_Beras');
            $pembayaran->Pembayaran_Uang = $request->input('Pembayaran_Uang');
            $pembayaran->Uang_Yang_Dibayar = $request->input('Uang_Yang_Dibayar');
            $pembayaran->Total_Pembayaran = $totalPembayaran; // Set the calculated value
            $pembayaran->user_id = auth()->user()->id;
            $pembayaran->save();
            return redirect()->route('pembayaran.index');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('pembayaran.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pembayaran $Pembayaran)
    {
        $Pembayaran->delete();
        return to_route('pembayaran.index');
    }
}
