<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\User;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicule = Vehicule::get();
        return view('vehicule.index',compact('vehicule'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $chauffeur = Chauffeur::get();
        return view('vehicule.create',compact('chauffeur'));
    }

    /**
     * Store a newly created resource in storage.
     */
    /*public function store(Request $request)
    {
        Vehicule::create( $request->all());
        return redirect()->route('vehicule');
    }*/
    public function store(Request $request)
    {
        $vhl=new Vehicule();
        $vhl->marque=$request['marque'];
        $vhl->modele=$request['modele'];
        $vhl->type=$request['type'];
        $vhl->matricule=$request['matricule'];
        $vhl->date_achat=$request['date_achat'];
        $vhl->km_defaut=$request['km_defaut'];
        $vhl->prix_location=$request['prix_location'];
        $vhl->chauffeur=$request['chauffeur'];
        $etat = $request[($_POST['etat'] === 'true') ? 1 : 0];
        $vhl->etat=$etat;
        $disponiblite = $request[($_POST['disponiblite'] === 'true') ? 1 : 0];
        $vhl->disponiblite=$disponiblite;
        $photo= time().'.'.$request->photo->extension();
        $request->photo->move(public_path('photos'),$photo);

        $vhl->photo=$photo;
        $vhl->save();
        return redirect()->route('vehicule');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view("liste-vehicules");
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
}
