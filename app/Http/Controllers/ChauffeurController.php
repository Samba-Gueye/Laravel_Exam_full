<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chauffeur = Chauffeur::get();
        return view('chauffeur.index',compact('chauffeur'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('chauffeur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Chauffeur::create( $request->all());
        return redirect()->route('chauffeur');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function chauffeurDispo()
    {
        $chauffeur = Chauffeur::get();
        return view('chauffeur.dispo',compact('chauffeur'));
    }
}
