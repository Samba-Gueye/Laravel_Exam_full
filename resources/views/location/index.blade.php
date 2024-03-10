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
                                <a href="#">Location</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Liste des locations effectués</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Liste des locations</div>
                    </div>


                    <!-- Users -->
                    <div class="table-responsive-xl">
                        <table class="table text-nowrap mb-0">
                            <thead>
                            <tr>
                                <th class="font-weight-semi-bold border-top-0 py-2">Lieu de depart</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Lieu d'arrivé</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">distance</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Date de début</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Date de fin</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Véhicule</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Chauffeur</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Montant</th>
                                @if(auth()->user()->email==="sambagueye326@gmail.com")
                                <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($location as $loc)
                            <tr>
                                <td class="py-3">{{$loc->lieu_depart}}</td>
                                <td class="py-3">{{$loc->lieu_arrive}}</td>
                                <td class="py-3">{{$loc->distance}} Km</td>
                                <td class="py-3">{{$loc->date_debut}}</td>
                                <td class="py-3">{{$loc->date_fin}}</td>
                                <td class="py-3">{{$loc->vehicule ? $loc->vehicule->marque . ' ' . $loc->vehicule->modele : 'Aucun véhicule' }}</td>
                                <td class="py-3">{{$loc->chauffeur ? $loc->chauffeur->prenom . ' ' . $loc->chauffeur->nom : 'Aucun chauffeur' }}</td>
                                <td class="py-3 ">{{$loc->montant}} FCFA</td>
                                @if(auth()->user()->email==="sambagueye326@gmail.com")
                                <td class="py-3">
                                    <div class="position-relative">
                                        <a class="link-dark d-inline-block" type="button" href="{{route('location.edit',$loc->id)}}">
                                            <i class="gd-pencil icon-text"></i>
                                        </a>
                                        <form action="{{route('location.destroy',$loc->id)}}" method="post" type="button">
                                            @csrf
                                            @method('DELETE')
                                            <button  style="background: none; color: inherit; border: none; padding: 0; font: inherit; cursor: pointer; outline: inherit;" class="link-dark d-inline-block" >
                                                <i class="gd-trash icon-text"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                @endif

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
