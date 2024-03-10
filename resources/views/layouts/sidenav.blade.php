<main class="main">
    <!-- Sidebar Nav -->
    <aside id="sidebar" class="js-custom-scroll side-nav">
        <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
            <!-- Title -->
            <li class="sidebar-heading h6">Accueil</li>
            <!-- End Title -->

            <!-- Dashboard -->
            <li class="side-nav-menu-item active">
                <a class="side-nav-menu-link media align-items-center" href="{{route('home')}}">
                    <span class="side-nav-menu-icon d-flex mr-3">
                        <i class="gd-dashboard"></i>
                    </span>
                    <span class="side-nav-fadeout-on-closed media-body">Notre Cataloge</span>
                </a>
            </li>
            @if(auth()->user()->email=="sambagueye326@gmail.com")
                <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="{{route('location')}}" >
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-check-box"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Location</span>
                </a>
            </li>
            @endif


            <!-- Title -->
            <li class="sidebar-heading h6">Gestion</li>
            <!-- End Title -->

            <!-- Users -->
            <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subUsers">
                    <span class="side-nav-menu-icon d-flex mr-3">
                        <i class="gd-car"></i>
                    </span>
                    <span class="side-nav-fadeout-on-closed media-body">Voitures</span>
                    <span class="side-nav-control-icon d-flex">
                        <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                    </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Users: subUsers -->
                <ul id="subUsers" class="side-nav-menu side-nav-menu-second-level mb-0">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{route('vehicule')}}">Liste des voitures</a>
                    </li>
                    @if(auth()->user()->email=="sambagueye326@gmail.com")
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{route('vehicule.create')}}">Ajouter une voiture</a>
                    </li>
                    @endif
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{route('vehicule.EnLoc')}}">Voitures en service</a>
                    </li>
                    @if(auth()->user()->email=="sambagueye326@gmail.com")
                        <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{route('vehicule.EnPanne')}}">Voiture en panne</a>
                    </li>
                    @endif

                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{route('vehicule.Audepot')}}">Voitures disponibles</a>
                    </li>

                </ul>
                <!-- End Users: subUsers -->
            </li>

             <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href=""
                   data-target="#subPages">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-user"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Chauffeurs</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Pages: subPages -->
                <ul id="subPages" class="side-nav-menu side-nav-menu-second-level mb-0">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{route('chauffeur')}}">Liste des Chauffeurs</a>
                    </li>
                    @if(auth()->user()->email=="sambagueye326@gmail.com")
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{route('chauffeur.create')}}">Ajouter un chauffeur</a>
                    </li>
                    @endif
                     <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{route('chauffeur.Dispo')}}">Chauffeurs disponibles</a>
                    </li>

                </ul>
                <!-- End Pages: subPages -->
            </li>
        </ul>
    </aside>
