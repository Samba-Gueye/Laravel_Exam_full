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
                                <a href="{{route('profile')}}">Utilisateurs</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Création d'utilisateur</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Ajouter un utilisateur</div>
                    </div>


                    <!-- Form -->
                    <div>
                        <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Nom Complet</label>
                                    <input type="text" class="form-control" value="" id="name" name="name" placeholder="Nom complet">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Email</label>
                                    <input type="email" class="form-control" value="" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Mot de passe</label>
                                    <input type="password" class="form-control" value="" id="password" name="password" placeholder="Mot de passe">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Créer</button>
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
