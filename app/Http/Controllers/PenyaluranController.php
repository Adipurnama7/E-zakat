<?php

namespace App\Http\Controllers;

use App\Models\penyaluran;
use Illuminate\Http\Request;

class PenyaluranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        return view('pages.penyaluran.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.penyaluran.create');
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
    public function show(penyaluran $penyaluran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(penyaluran $penyaluran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, penyaluran $penyaluran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(penyaluran $penyaluran)
    {
        //
    }
}
