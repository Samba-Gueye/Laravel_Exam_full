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
                            <li class="breadcrumb-item active" aria-current="page">Modificationr</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Modification de profil</div>
                    </div>


                    <!-- Form -->
                    <div>
                        <form action="{{route('profile.update',$profile->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Prénom</label>
                                    <input type="text" class="form-control" value="{{$profile->name}}" id="name" name="name" placeholder="Nom">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" value="{{$profile->email}}" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="name">Mot de passe</label>
                                    <input type="password" class="form-control" value="{{$profile->password}}" id="name" name="password" placeholder="Mot de passe">
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
