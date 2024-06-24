<?php

namespace App\Http\Controllers;
// donasi update

use App\Models\donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchQuery = $request->input('search');

        // Start building the query
        $donasiQuery = Donasi::query();

        // If search query exists, filter the data
        if ($searchQuery) {
            $donasiQuery->where('Nama_Donatur', 'like', '%' . $searchQuery . '%');
            // Replace 'field_name' with the actual field you want to search by
        }

        // Get the filtered data
        $donasi = $donasiQuery->get();

        // Pass the data to the view
        return view('pages.Donasi.index', compact('donasi', 'searchQuery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('views.index', compact('donasi'));
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
                'Bukti_Donasi' => 'required|file', // Menambahkan 'file' untuk memastikan itu adalah unggahan berkas
            ]);

            $donasi = new Donasi();
            $donasi->Tanggal_Donasi = $request->input('Tanggal_Donasi');
            $donasi->Nama_Donatur = $request->input('Nama_Donatur');
            $donasi->No_Hp = $request->input('No_Hp');
            $donasi->Alamat = $request->input('Alamat');
            $donasi->Total_Donasi = $request->input('Total_Donasi');

            if ($request->hasFile('Bukti_Donasi')) {
                $file = $request->file('Bukti_Donasi');
                $nama_file = $file->getClientOriginalName();
                $file->move('images/', $nama_file);
                $donasi->Bukti_Donasi = $nama_file;
            }

            $donasi->save();
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->route('donasi.index'); // Gunakan nama rute untuk pengalihan
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
        $statusOptions = ['Pending ', 'Diterima', 'Ditolak'];

        return view('pages.Donasi.edit', compact('donasi', 'statusOptions'));
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


            $donasi->Tanggal_Donasi = $request->input('Tanggal_Donasi');
            $donasi->Nama_Donatur = $request->input('Nama_Donatur');
            $donasi->No_Hp = $request->input('No_Hp');
            $donasi->Alamat = $request->input('Alamat');
            $donasi->Total_Donasi = $request->input('Total_Donasi');
            $donasi->Bukti_Donasi = $request->input('Bukti_Donasi');
            $donasi->Status_Validasi = $request->input('Status_Validasi');
            $donasi->save();
            return redirect()->route('donasi.index');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('donasi.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(donasi $donasi)
    {
        $donasi->delete();
        return to_route('donasi.index');
    }
}
