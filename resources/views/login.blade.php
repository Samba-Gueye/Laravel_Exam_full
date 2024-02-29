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
                            <h4 class="card-title">Connexion</h4>
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                @if(\Illuminate\Support\Facades\Session::has('erreur'))
                                   <div class="alert alert-danger" role="alert">
                                       {{\Illuminate\Support\Facades\Session::get('erreur')}}
                                   </div>
                                @endif
                                <div class="form-group">
                                    <label for="email">Adresse Email</label>
                                    <input id="email" type="email" class="form-control" name="email" required=""
                                           autofocus="">
                                </div>

                                <div class="form-group">
                                    <label for="password">Mot de passe
                                    </label>
                                    <input id="password" type="password" class="form-control" name="password"
                                           required="">
                                    <div class="text-right">
                                        <a href="" class="small">
                                            Mot de passe oublié?
                                        </a>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-check position-relative mb-2">
                                        <input type="checkbox" class="form-check-input d-none" id="remember"
                                               name="remember">
                                        <label class="checkbox checkbox-xxs form-check-label ml-1" for="remember"
                                               data-icon="&#xe936">Se souvenir de moi</label>
                                    </div>
                                </div>

                                <div class="form-group no-margin">
                                    <button href="" class="btn btn-primary btn-block" type="submit">
                                        Se connecter
                                    </button>
                                </div>
                                <div class="text-center mt-3 small">
                                    Pas encore membre? <a href="{{route('register')}}">S'inscrire</a>
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
