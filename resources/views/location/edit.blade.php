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
                                <a href="{{route('location')}}">Locations</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Faire une location</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Faire une location</div>
                    </div>


                    <!-- Form -->
                    <div>
                        <form action="{{route('location.update',$location->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Lieu de départ</label>
                                    <input type="text" class="form-control" value="{{$location->lieu_depart}}" id="lieu_depart" name="lieu_depart" placeholder="Lieu de départ">
                                </div>

                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Lieu d'arrivé</label>
                                    <input type="text" class="form-control" value="{{$location->lieu_arrive}}" id="lieu_arrivé" name="lieu_arrive" placeholder="Lieu d'arrivé">
                                </div>

                                <div class="form-group col-12 col-md-4">
                                    <label for="Type">distance</label>
                                    <input type="number" class="form-control" value="{{$location->distance}}" id="distance" name="distance" placeholder="distance">
                                </div>

                                <div class="form-group col-12 col-md-4">
                                    <label for="date">Date de début de location</label>
                                    <input type="date" class="form-control" value="{{$location->date_debut}}" id="date_debut" name="date_debut" placeholder="Date de début" >
                                </div>

                                <div class="form-group col-12 col-md-4">
                                    <label for="date">Date de fin de location</label>
                                    <input type="date" class="form-control" value="{{$location->date_fin}}" id="date_fin" name="date_fin" placeholder="Date de fin de location" >
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="etat">Véhicule</label>
                                    <select class="form-control" name="vehicule_id">
                                        <option value="">Sélectionner un vehicule...</option>
                                        @foreach($vehicules as $vehicule)
                                            <option value="{{ $vehicule->id }}">{{ $vehicule->marque }} {{ $vehicule->modele }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="etat">Chauffeur</label>
                                    <select class="form-control" name="chauffeur_id" >
                                        <option value="">Sélectionner un chauffeur..</option>
                                    @foreach($chauffeurs as $chauffeur)
                                            <option value="{{ $chauffeur->id }}">{{ $chauffeur->prenom }} {{ $chauffeur->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Prix de Location</label>
                                    <input type="number" class="form-control" onclick="calculerPrixTotal()" value="{{$location->montant}}" id="prix_location" name="montant" placeholder="prix de la location" readonly >
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

<script>
    function calculerPrixTotal() {
        var dateDebutElement = document.getElementById("date_debut");
        var dateFinElement = document.getElementById("date_fin");
        var dateDebut = new Date(document.getElementById("date_debut").value);
        var dateFin = new Date(document.getElementById("date_fin").value);

        console.log("Date de début: ", dateDebutElement);
        console.log("Date de fin: ", dateFinElement);


        // Vérifier si les dates sont valides
        if (isNaN(dateDebut) || isNaN(dateFin) || dateDebut >= dateFin) {
            document.getElementById("prix_location").value = ""; // Effacer la valeur du prix si les dates ne sont pas valides
            return;
        }

        var prixLocation = parseFloat("{{$vehicule->prix_location}}"); // Prix de la location récupéré depuis le serveur

        // Calcul du nombre de jours
        var differenceJours = Math.ceil((dateFin - dateDebut) / (1000 * 60 * 60 * 24));
        // Vérifier si le résultat du calcul est un nombre valide
        if (isNaN(differenceJours)) {
            document.getElementById("prix_location").value = ""; // Effacer la valeur du prix si le calcul des jours est invalide
            return;
        }

        // Calcul du prix total
        var prixTotal = prixLocation * differenceJours;

        // Mettre à jour la valeur avec le prix total
        document.getElementById("prix_location").value = prixTotal.toFixed(2);
}

</script>



</body>
</html>
