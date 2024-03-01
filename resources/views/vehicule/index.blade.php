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
                                <a href="#">Véhicules</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Liste des véhicules</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Liste des véhicules</div>
                    </div>


                    <!-- Users -->
                    <div class="table-responsive-xl">
                        <table class="table text-nowrap mb-0">
                            <thead>
                            <tr>
                                <th class="font-weight-semi-bold border-top-0 py-2">Marque</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Modele</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Matricule</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">type</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Date d'achat</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Chauffeur</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Etat</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Disponiblite</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($vehicule as $vehicule)
                            <tr>
                                <td class="py-3">{{$vehicule->marque}}</td>
                                <td class="py-3">{{$vehicule->modele}}</td>
                                <td class="py-3">{{$vehicule->matricule}}</td>
                                <td class="py-3">{{$vehicule->type}}</td>
                                <td class="py-3">{{$vehicule->date_achat}}</td>
                                <td class="py-3">{{$vehicule->chauffeur}}</td>
                                <td class="py-3">
                                    @if($vehicule->etat==null)
                                        En marche
                                    @else
                                        En panne
                                    @endif
                                    </td>
                                <td class="py-3">
                                    @if($vehicule->disponiblite==null)
                                        Au dêpot
                                    @else
                                        En location
                                    @endif

                                </td>
                                <td class="py-3">
                                    <div class="position-relative">
                                        <a class="link-dark d-inline-block" href="">
                                            <i class="gd-pencil icon-text"></i>
                                        </a>
                                        <a class="link-dark d-inline-block" href="{{route('vehicule.create')}}">
                                            <i class="gd-plus icon-text"></i>
                                        </a>
                                        <form action="" method="post" type="button">
                                            @csrf
                                            @method('DELETE')
                                            <button  style="background: none; color: inherit; border: none; padding: 0; font: inherit; cursor: pointer; outline: inherit;" class="link-dark d-inline-block" >
                                                <i class="gd-trash icon-text"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Users -->
                </div>
            </div>


        </div>


    </div>
</main>


<script src="{{asset('graindashboard/js/graindashboard.js')}}"></script>
<script src="{{asset('graindashboard/js/graindashboard.vendor.js')}}"></script>

</body>
</html>
