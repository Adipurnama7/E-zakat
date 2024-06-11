<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembayaran;
use App\Models\mesjid;
use App\models\zakat;
use App\Models\zakatFitrah;
use App\Models\maal;

class muzzakiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $masjid = mesjid::all();
        $zakats = zakat::all();
        $searchQuery = $request->input('search');

        // Query for maal data with search filter
        $maalQuery = maal::query();
        if ($searchQuery) {
            $maalQuery->where('Nama_Pembayar', 'like', '%' . $searchQuery . '%');
        }
        $maal = $maalQuery->get();

        // Query for zakatfitrah data with search filter
        $pembayaranQuery = zakatFitrah::query();
        if ($searchQuery) {
            $pembayaranQuery->where('Nama_pembayar', 'like', '%' . $searchQuery . '%');
        }
        $pembayaran = $pembayaranQuery->get();

        return view('pages.muzzaki.index', compact('maal', 'pembayaran', 'masjid', 'zakats', 'searchQuery'));
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
