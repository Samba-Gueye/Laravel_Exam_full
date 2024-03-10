<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Location;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $location = Location::with('chauffeur','vehicule')->get();
        return view('location.index',compact('location'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $chauffeurs = Chauffeur::all();
        $vehicules = Vehicule::all();
        return view('location.create', ['chauffeurs' => $chauffeurs,'vehicules' => $vehicules]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $loc=new Location();
        $loc->lieu_depart=$request['lieu_depart'];
        $loc->lieu_arrive=$request['lieu_arrive'];
        $loc->distance=$request['distance'];
        $loc->date_debut=$request['date_debut'];
        $loc->date_fin=$request['date_fin'];
        $loc->vehicule_id=$request['vehicule_id'];
        $loc->chauffeur_id = $request['chauffeur_id'];
        $loc->montant= $request['montant'];
        $loc->save();

        $vhl = Vehicule::find($request['vehicule_id']);
        $vhl->disponibilite = "Indisponible";
        $vhl->location_effectuee = 1;
        $distance = $vhl->km_defaut+$loc->distance;
        $vhl->km_defaut=$distance;
        $vhl->save();

        return redirect()->route('location');
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
        $location = Location::findorFail($id);
        $chauffeurs = Chauffeur::all();
        $vehicules = Vehicule::all();
        return view('location.edit',compact('location','chauffeurs','vehicules'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $location = Location::findorFail($id);
        $location->update($request->all());
        return redirect()->route('location');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $location = Location::findOrFail($id);
    $vehicule_id = $location->vehicule_id;
    $location->delete();
    $vehicule = Vehicule::find($vehicule_id);
    $vehicule->disponibilite = "Disponible";
    $vehicule->location_effectuee = 0;
    $vehicule->save();

    return redirect()->route('location');
}

}
