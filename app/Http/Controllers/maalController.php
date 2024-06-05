<?php

namespace App\Http\Controllers;

use App\Models\zakat;
use App\Models\mesjid;
use App\Models\maal;
use Illuminate\Http\Request;

class maalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $masjid = mesjid::all();
        $zakatmaal = maal::all();
        $zakats = zakat::all();
        return view('pages.maal.index', compact('masjid', 'zakats', 'zakatmaal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $masjid = mesjid::all();
        $zakats = zakat::all();
        $zakatmaal = maal::all();
        return view('pages.maal.create', compact('masjid', 'zakats', 'zakatmaal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'Nama_pembayar' => 'required',
                'No_Hp' => 'required',
                'masjid_id' => 'required',
                'Alamat' => 'required',
                'zakat_id' => 'required',
                'Pembayaran_Uang' => 'nullable',
                'Total_Pembayaran' => 'nullable',
                'Tanggal_pembayaran' => 'required',
            ]);

            $zakatmaal = new maal();
            $zakatmaal->Nama_Pembayar = $request->input('Nama_pembayar');
            $zakatmaal->Tanggal_pembayaran = $request->input('Tanggal_pembayaran');
            $zakatmaal->No_Hp = $request->input('No_Hp');
            $zakatmaal->Alamat = $request->input('Alamat');
            $zakatmaal->zakat_id = $request->input('zakat_id');
            $zakatmaal->masjid_id = $request->input('masjid_id');
            $zakatmaal->Pembayaran_Uang = $request->input('Pembayaran_Uang');
            $zakatmaal->user_id = auth()->user()->id;
            $zakatmaal->save();

            return redirect()->route('maal.index');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->route('maal.create');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $zakatmaal = maal::findOrFail($id);
        $masjid = mesjid::all();
        $zakats = zakat::all();

        return view('pages.maal.edit', compact('zakatmaal', 'masjid', 'zakats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'Nama_pembayar' => 'required',
                'No_Hp' => 'required',
                'masjid_id' => 'required',
                'Alamat' => 'required',
                'zakat_id' => 'required',
                'Pembayaran_Uang' => 'nullable',
                'Total_Pembayaran' => 'nullable',
                'Tanggal_pembayaran' => 'required',
            ]);

            $zakatmaal = maal::findOrFail($id);
            $zakatmaal->Nama_Pembayar = $request->input('Nama_pembayar');
            $zakatmaal->Tanggal_pembayaran = $request->input('Tanggal_pembayaran');
            $zakatmaal->No_Hp = $request->input('No_Hp');
            $zakatmaal->Alamat = $request->input('Alamat');
            $zakatmaal->zakat_id = $request->input('zakat_id');
            $zakatmaal->masjid_id = $request->input('masjid_id');
            $zakatmaal->Pembayaran_Uang = $request->input('Pembayaran_Uang');
            $zakatmaal->user_id = auth()->user()->id;
            $zakatmaal->save();

            return redirect()->route('maal.index');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->route('maal.edit', $id);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $zakatmaal = maal::findOrFail($id);
            $zakatmaal->delete();

            return redirect()->route('maal.index');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->route('maal.index');
        }
    }
}
