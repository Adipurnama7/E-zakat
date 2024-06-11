<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZakatFitrah; // Assuming ZakatFitrah is your model

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        // Perform search based on your criteria, for example, search by name
        $zakatfitrah = ZakatFitrah::where('Nama_pembayar', 'like', '%' . $query . '%')->get();

        // You can pass $zakatfitrah to your Blade view for displaying search results
        return view('pages.pembayaran.index', compact('zakatfitrah'));
    }
}
