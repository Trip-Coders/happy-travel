<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class SearchController extends Controller
{
    public function busqueda(Request $request)
    {
        $search = $request->input('busqueda'); 
        if (!empty($search)) {
            $result = Travel::where('image', 'LIKE', "%$search%")
                            ->orWhere('title', 'LIKE', "%$search%")
                            ->orWhere('location', 'LIKE', "%$search%")
                            ->orWhere('content', 'LIKE', "%$search%")
                            ->get();
        } else {
            $result = collect();
        }
        return view('destinations.search', compact('result', 'search'));
    }
}
