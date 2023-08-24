<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Travel;

class SearchController extends Controller
{
    public function busqueda(Request $request)
    {
        if ($request->isMethod('post')) {
            $query = $request->input('query');
            $results = Post::where('title', 'like', "%$query%")
                            ->orWhere('content', 'like', "%$query%")
                            ->get();
        
            return view('search.busqueda', compact('search.busqueda'));
        } else {
            $query = $request->input('query');
            return redirect()->route('search.busqueda', ['query' => $query]);
        }
    }
    
}
