<?php
// masjid update
namespace App\Http\Controllers;

use App\Models\mesjid;
use Illuminate\Http\Request;

class MesjidController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $masjidQuery = mesjid::query();
        $searchQuery = $request->input('search');
        if ($searchQuery) {
            $masjidQuery->where('Nama_Mesjid', 'like', '%' . $searchQuery . '%'); // Asumsikan kolom nama untuk pencarian
        }
        $masjid = $masjidQuery->get();
        return view('pages.masjid.index', compact('masjid', 'searchQuery'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.masjid.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'Nama_Masjid' => 'required',
                'Alamat' => 'required',
                'RT' => 'required',
                'RW' => 'required',

            ]);
    
            $masjid = new mesjid;
            $masjid->Nama_Masjid = $request->input('Nama_Masjid');
            $masjid->Alamat = $request->input('Alamat');
            $masjid->RT = $request->input('RT');
            $masjid->RW = $request->input('RW');
            $masjid->save();
            return redirect()->route('Masjid.index');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('/Masjid');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(mesjid $masjid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mesjid $Masjid)
    {
        return view('pages.masjid.edit', compact('Masjid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mesjid $Masjid)
    {
        try {
            $validatedData = $request->validate([
                'Nama_Masjid' => 'required',
                'Alamat' => 'required',
                'RT' => 'required',
                'RW' => 'required',

            ]);

            $Masjid->Nama_Masjid = $request->input('Nama_Masjid');
            $Masjid->Alamat = $request->input('Alamat');
            $Masjid->RT = $request->input('RT');
            $Masjid->RW = $request->input('RW');
            $Masjid->save();
            return redirect()->route('Masjid.index');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('/Masjid');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mesjid $Masjid)
    {
        $Masjid->delete();
        return to_route('Masjid.index');
    }
}
