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
                                <a href="{{route('chauffeur')}}">Chauffeurs</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Enregistrement d'un Chauffeur</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Ajouter un Chauffeur</div>
                    </div>


                    <!-- Form -->
                    <div>
                        <form action="{{route('chauffeur.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Prénom</label>
                                    <input type="text" class="form-control" value="" id="prenom" name="prenom" placeholder="Prénom">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" value="" id="nom" name="nom" placeholder="Nom">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="Type">Expérience</label>
                                    <input type="number" class="form-control" value="" id="experience" name="experience" placeholder="experience">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Numéro de permis</label>
                                    <input type="text" class="form-control" value="" id="num_permis" name="num_permis" placeholder="Numéro de permis">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="date">Date d'emission</label>
                                    <input type="datetime-local" class="form-control" value="" id="emission" name="emission" placeholder="Date d'émission">
                                </div><div class="form-group col-12 col-md-4">
                                    <label for="date">Date d'expiration</label>
                                    <input type="datetime-local" class="form-control" value="" id="expiration" name="expiration" placeholder="Date d'expiration">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="etat">Condition Actuelle</label>
                                    <select class="form-control" name="etat" >
                                        <option value="En attente">En attente</option>
                                        <option value="En location">En location</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="disponiblite">Disponibilité</label>
                                    <select class="form-control" name="disponiblite">
                                        <option value="Disponible">Disponible</option>
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
