@include('layouts.navbar')

<body class="">

<main class="main">

    <div class="content">

        <div class="container-fluid pb-5">

            <div class="row justify-content-md-center">
                <div class="card-wrapper col-12 col-md-4 mt-5">
                    <div class="brand text-center mb-3">
                        <a href="/"><img src="{{asset('img/logo.png')}}"></a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Créer votre compte</h4>
                            <form action="{{route('register')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" id="name" name="name" required=""
                                           autofocus="">
                                </div>

                                <div class="form-group">
                                    <label for="email">Adresse Email</label>
                                    <input id="email" type="email" class="form-control" name="email" required="">
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="password">Mot de passe
                                        </label>
                                        <input id="password" type="password" class="form-control" name="password"
                                               required="">
                                    </div>
                                </div>
                                <div class="form-group no-margin">
                                    <button href="" class="btn btn-primary btn-block" type="submit">
                                        S'inscrire
                                    </button>
                                </div>
                                <div class="text-center mt-3 small">
                                    Déja membre? <a href="{{route('login')}}">Se connecter</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</main>


<script src="{{asset('graindashboard/js/graindashboard.js')}}"></script>
<script src="{{asset('graindashboard/js/graindashboard.vendor.js')}}"></script>

</body>
</html>
