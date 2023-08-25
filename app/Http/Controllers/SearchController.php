<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Travel;

class SearchController extends Controller
{
    public function busqueda(Request $request)
    {
        $busqueda = $request->input('search');
        if (!empty($busqueda)) {
            $destinos = Travel::where('title', 'LIKE', "%$busqueda%")
                               ->orWhere('location', 'LIKE', "%$busqueda%")
                               ->get();
        } else {
            $result = collect(); // Si el término de búsqueda es vacío, muestra una colección vacía
        }
        return view('search.busqueda', compact('result', 'busqueda'));
    }
}
