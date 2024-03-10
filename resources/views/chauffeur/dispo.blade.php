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
                                <a href="#">Chauffeurs</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Liste des Chauffeurs</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Liste des Chauffeurs</div>
                    </div>


                    <!-- Users -->
                    <div class="table-responsive-xl">
                        <table class="table text-nowrap mb-0">
                            <thead>
                            <tr>
                                <th class="font-weight-semi-bold border-top-0 py-2">Prénom</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Nom</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Expérience</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">N°Permis</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Etat</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Disponiblite</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Date d'emission</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Date d'expiration</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($chauffeur as $c)
                                @if($c->disponiblite ==='Disponible')
                            <tr>
                                <td class="py-3">{{$c->prenom}}</td>
                                <td class="py-3">{{$c->nom}}</td>
                                <td class="py-3">{{$c->experience}} ans</td>
                                <td class="py-3">{{$c->num_permis}}</td>
                                <td class="py-3">{{$c->etat}}</td>
                                <td class="py-3 {{ $c->disponiblite === 'Disponible' ? 'badge badge-pill badge-success' : 'badge badge-pill badge-danger' }}">
                                    <center>{{$c->disponiblite}}</center>
                                </td>

                                <td class="py-3">{{$c->emission}}</td>
                                <td class="py-3">{{$c->expiration}}</td>
                                <td class="py-3">
                                    <div class="position-relative">
                                        <a class="link-dark d-inline-block" href="">
                                            <i class="gd-pencil icon-text"></i>
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
                            @endif
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
