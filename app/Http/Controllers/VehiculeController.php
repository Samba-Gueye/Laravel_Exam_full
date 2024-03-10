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

        $vehicule = Vehicule::with('chauffeur')->get();
        return view('vehicule.index',compact('vehicule'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $chauffeurs = Chauffeur::all();
        return view('vehicule.create', ['chauffeurs' => $chauffeurs]);
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
        $vhl->chauffeur_id = $request['chauffeur'];
        $vhl->etat= $request['etat'];
        $vhl->disponibilite= $request['disponibilite'];
        $photo= time().'.'.$request->photo->extension();
        $request->photo->move(public_path('photos'),$photo);

        $vhl->photo=$photo;
        $vhl->save();
        return redirect()->route('vehicule');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $vehicule = Vehicule::findOrFail($id);
        return view('vehicule.details', ['vehicule' => $vehicule]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vehicule = Vehicule::findorFail($id);
        $chauffeurs = Chauffeur::all();
        return view('vehicule.edit',compact('vehicule','chauffeurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vehicule = Vehicule::findorFail($id);
        $vehicule->update($request->all());
        return redirect()->route('vehicule');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehicule = Vehicule::findorFail($id);
        $vehicule->delete();
        return redirect()->route('vehicule');
    }

    public function EnLoc()
    {
        $vehicule = Vehicule::with('chauffeur')->get();
        return view('vehicule.Enloc',compact('vehicule'));
    }
    public function Audepot()
    {
        $vehicule = Vehicule::with('chauffeur')->get();
        return view('vehicule.EnStock',compact('vehicule'));
    }
    public function Enpanne()
    {
        $vehicule = Vehicule::with('chauffeur')->get();
        return view('vehicule.Enpanne',compact('vehicule'));
    }

}
