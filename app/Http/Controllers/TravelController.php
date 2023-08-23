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
        return view('destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'title' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'content' => 'required|string',
            ]);
            // Subir la imagen y obtener su ruta
            $imagePath = $request->file('image')->store('images', 'public');
            // Crear un nuevo destino en la base de datos
            $travel = new Travel([
                'image' => $imagePath,
                'title' => $request->input('title'),
                'location' => $request->input('location'),
                'content' => $request->input('content'),
                'user_id' => auth()->user()->id, // Asignar el ID del usuario autenticado
            ]);
            $travel->save();
            return redirect()->route('home')->with('success', 'Destino creado exitosamente.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Travel $travel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel)
    {
        //
    }
}
