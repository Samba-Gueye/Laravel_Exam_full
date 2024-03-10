@include('layouts.navbar')
@include('layouts.topnav')
@include('layouts.sidenav')

<div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">

                <div class="card-body">
                    <!-- Breadcrumb -->
                    <nav class="d-none d-md-block" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('vehicule')}}">Véhicules</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Modification d'un véhicule</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Modifier un véhicule</div>
                    </div>


                    <!-- Form -->
                    <div>
                        <form action="{{route('vehicule.update',$vehicule->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Marque</label>
                                    <input type="text" class="form-control" value="{{$vehicule->marque}}" id="marque" name="marque" placeholder="marque">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Modéle</label>
                                    <input type="text" class="form-control" value="{{$vehicule->modele}}" id="modele" name="modele" placeholder="modéle">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="Type">Type</label>
                                    <input type="text" class="form-control" value="{{$vehicule->type}}" id="type" name="type" placeholder="type">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Matricule</label>
                                    <input type="text" class="form-control" value="{{$vehicule->matricule}}" id="matricule" name="matricule" placeholder="matricule">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="date">Date d'achat</label>
                                    <input type="datetime-local" class="form-control" value="{{$vehicule->date_achat}}" id="date_achat" name="date_achat" placeholder="Date d'achat">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Kilométrage</label>
                                    <input type="number" class="form-control" value="{{$vehicule->km_defaut}}" id="km_defaut" name="km_defaut" placeholder="Kilometrage">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Prix de Location</label>
                                    <input type="number" class="form-control" value="{{$vehicule->prix_location}}" id="prix_location" name="prix_location" placeholder="prix_location">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="etat">Chauffeur</label>
                                    <select class="form-control" name="chauffeur">
                                        <option value="">Sélectionner...</option>
                                        @foreach($chauffeurs as $chauffeur)
                                            <option value="{{ $chauffeur->id }}">{{ $chauffeur->prenom }} {{ $chauffeur->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="etat">Condition Actuelle</label>
                                    <select class="form-control" name="etat" >
                                        <option value="">Selectionner...</option>
                                        <option value="En marche">En Marche</option>
                                        <option value="En panne">En panne</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="disponiblite">Disponibilité</label>
                                    <select class="form-control" name="disponibilite">
                                        <option value="">Selectionner...</option>
                                        <option value="Dispo">Disponible</option>
                                        <option value="Indisponible">Indisponible</option>
                                    </select>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary float-right">Enregistrer</button>
                        </form>
                    </div>
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </div>
</main>


<script src="{{asset('graindashboard/js/graindashboard.js')}}"></script>
<script src="{{asset('graindashboard/js/graindashboard.vendor.js')}}"></script>

</body>
</html>
