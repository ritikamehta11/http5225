<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Attraction;
use Illuminate\Http\Request;

class AttractionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $attractions = Attraction::with('address')->get();
        return view('attractions.index', compact('attractions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $addresses = Address::all();
        return view('attractions.create', compact('addresses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'address_id' => 'required|exists:addresses,id',
        ]);

        Attraction::create($validated);

        return redirect()->route('attractions.index')->with('success', 'Attraction created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $attraction = Attraction::with('address')->findOrFail($id);
        return view('attractions.show', compact('attraction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $attraction = Attraction::findOrFail($id);
        $addresses = Address::all();
        return view('attractions.edit', compact('attraction', 'addresses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'address_id' => 'required|exists:addresses,id',
        ]);

        $attraction = Attraction::findOrFail($id);
        $attraction->update($validated);

        return redirect()->route('attractions.index')->with('success', 'Attraction updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $attraction = Attraction::findOrFail($id);
        $attraction->delete();

        return redirect()->route('attractions.index')->with('success', 'Attraction deleted successfully.');
    }
}
