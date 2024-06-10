<?php

namespace App\Http\Controllers;

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
        $totalBeras = ZakatFitrah::sum('Total_Pembayaran');
        $totalUang = ZakatFitrah::sum('Total_Pembayaran');
        // You can add other data retrieval here as needed

        return view('pages.Dashboard.dasboard', compact('totalMustahik', 'totalMuzzaki', 'totalBeras', 'totalUang'));
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
