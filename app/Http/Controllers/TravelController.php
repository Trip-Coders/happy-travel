<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinos = Travel::all();
        return view('destinations.index', compact('destinos'));
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
    public function show(Travel $travel)
    {
        return view('destinations.show', compact('travel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travel $travel)
    {
        return view('destinations.edit', compact('travel'));
    }

    /**
     * Update the specified resource in storage.
     */
        public function update(Request $request, Travel $travel)
        {
            $validatedData = $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'title' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'content' => 'required|string',
            ]);
        
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $travel->image = $imagePath;
            }
        
            $travel->title = $validatedData['title'];
            $travel->location = $validatedData['location'];
            $travel->content = $validatedData['content'];
        
        
            $travel->save();
        
            return redirect()->route('destinations.show', $travel->id)
                             ->with('success', 'Destino actualizado exitosamente.');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel)
    {
        $travel->delete();
    
        return redirect()->route('home')->with('success', 'Destino eliminado exitosamente.');
    
    }
}
