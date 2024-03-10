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
                            <li class="breadcrumb-item active" aria-current="page">Enregistrement d'un véhicule</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Ajouter un véhicule</div>
                    </div>


                    <!-- Form -->
                    <div>
                        <form action="{{route('vehicule.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Marque</label>
                                    <input type="text" class="form-control" value="" id="marque" name="marque" placeholder="marque">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Modéle</label>
                                    <input type="text" class="form-control" value="" id="modele" name="modele" placeholder="modéle">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="Type">Type</label>
                                    <input type="text" class="form-control" value="" id="type" name="type" placeholder="type">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Matricule</label>
                                    <input type="text" class="form-control" value="" id="matricule" name="matricule" placeholder="matricule">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="date">Date d'achat</label>
                                    <input type="datetime-local" class="form-control" value="" id="date_achat" name="date_achat" placeholder="Date d'achat">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Kilométrage</label>
                                    <input type="number" class="form-control" value="" id="km_defaut" name="km_defaut" placeholder="Kilometrage">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Prix de Location</label>
                                    <input type="number" class="form-control" value="" id="prix_location" name="prix_location" placeholder="prix_location">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="etat">Chauffeur</label>
                                    <select class="form-control" name="chauffeur" >
                                        <option >Selectionner un chauffeur</option>
                                        @foreach($chauffeur as $chauffeur)
                                            <option value="{{ $chauffeur->id }}">{{ $chauffeur->prenom }} {{ $chauffeur->nom }}</option>
                                        @endforeach
                                    </select>
                                </div><div class="form-group col-12 col-md-4">
                                    <label for="etat">Condition Actuelle</label>
                                    <select class="form-control" name="etat" >
                                        <option value="true">En Marche</option>
                                        <option value="false">En panne</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="disponiblite">Disponibilité</label>
                                    <select class="form-control" name="disponiblite">
                                        <option value="true">Au dépôt</option>
                                        <option value="false">En location</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-md-4">
                                    <label for="document">Photo</label>
                                    <input type="file" class="form-control" value="" id="photo" name="photo" placeholder="photo">
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
