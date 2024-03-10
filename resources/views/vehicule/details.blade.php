@include('layouts.navbar')
@include('layouts.topnav')
@include('layouts.sidenav')

<div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="row">
                            <div class="col-12">
                                <!-- Card -->
                                <div class="card mb-3 mb-md-4">
                                    <div id="walletsContent" class="card-body tab-content">
                                        <div class="tab-pane fade show active" id="bitcoin" role="tabpanel">
                                            <div class="row text-center">
                                                <div class="col-6 col-md-4 mb-3 mb-md-0">
                                                    <div class="h3 mb-0">
                                                        {{$vehicule->marque}} <sup class="h5">
                                                            @if($vehicule->modele ==="X4 2020" )
                                                                X SERIES
                                                            @else
                                                                @if($vehicule->modele ==="AMG GT 63 SE" || $vehicule->modele==="AMG ROADSTER SL 55")
                                                                    AMG CLASSES
                                                                @endif
                                                           @endif </sup>
                                                    </div>
                                                    <small class="text-muted">Total Sales</small>
                                                </div>

                                                <div class="col-6 col-md-4 mb-3 mb-md-0 border-left">
                                                    <div class="h3 mb-0">
                                                        <span class="text-success">Modéle: </span>{{$vehicule->modele}}
                                                    </div>
                                                    <small class="text-muted">Today Sales (USD)</small>
                                                </div>

                                                <div class="col-12 col-md-4 border-left">
                                                    <div class="h3 mb-0">
                                                        <span class="text-success"></span>{{$vehicule->type}}<sup class="h5"></sup>
                                                    </div>
                                                    <small class="text-muted">Net Profit (%)</small>
                                                </div>
                                            </div>
                                            <div class="card flex-row  p-3 p-md-4">

                                                <div class="row justify-content-between  mb-2">
                                                    <div class="col">
                                                        <img src="{{ asset('photos/' . $vehicule->photo) }}" height="400" width="750" alt="Photo du véhicule">
                                                    </div>
                                                    <div class="col-auto  mt-6">
                                                        <h5 class="h6 font-weight-semi-bold text-uppercase mb-0 ml-6"><span class="text-success small "> Modéle du véhicule: </span>{{$vehicule->marque.'  '.$vehicule->modele}}</h5>
                                                        <br>
                                                        <br>
                                                        <h5 class="h6 font-weight-semi-bold text-uppercase mb-0 ml-6"><span class="text-success small "> Type du véhicule: </span>{{$vehicule->type}}</h5>
                                                        <br>
                                                        <br>
                                                        <h5 class="h6 font-weight-semi-bold text-uppercase mb-0 ml-6"><span class="text-success small "> Prix de la location: </span>{{$vehicule->prix_location.'  FCFA/ JOUR'}}</h5>
                                                        <br>
                                                        <br>
                                                        <h5 class="h6 font-weight-semi-bold text-uppercase mb-0 ml-6"><span class="text-success small "> Chauffeur : </span>{{$vehicule->chauffeur->prenom.'  '.$vehicule->chauffeur->nom}}</h5>
                                                        <br>
                                                        <br>
                                                         <h5 class="h6 font-weight-semi-bold text-uppercase mb-0 ml-6"><span class="text-success small "> Kilometrage actuelle: </span>{{$vehicule->km_defaut.'  Kilometres au compteur'}}</h5>
                                                        <br>
                                                        <br>
                                                        <h5 class="h6 font-weight-semi-bold text-uppercase mb-0 ml-6"><span class="text-success small "> Kilometrage actuelle: </span>{{'  Vehicule '.$vehicule->etat}}</h5>
                                                    </div>

                                                </div>
                                            </div>
                                            @if( $vehicule->disponibilite === "Disponible" || $vehicule->etat === "En panne" )

                                                <a type="submit" class="btn btn-toolbar float-right" href="{{route('location.create')}}">Louer cette voiture</a>
                                            @endif

                                        </div>

                                </div>
                                <!-- End Card -->
                            </div>
                        </div>
            </div>
        </div>
</div>



</main>


<script src="{{asset('graindashboard/js/graindashboard.js')}}"></div>
<script src="{{asset('graindashboard/js/graindashboard.vendor.js')}}"></script>

<!-- DEMO CHARTS -->
<script src="{{asset('demo/resizeSensor.js')}}"></script>
<script src="{{asset('demo/chartist.js')}}"></script>
<script src="{{asset('demo/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('demo/gd.chartist-area.js')}}"></script>
<script src="{{asset('demo/gd.chartist-bar.js')}}"></script>
<script src="{{asset('gd.chartist-donut.js')}}"></script>
<script>
    $.GDCore.components.GDChartistArea.init('.js-area-chart');
    $.GDCore.components.GDChartistBar.init('.js-bar-chart');
    $.GDCore.components.GDChartistDonut.init('.js-donut-chart');
</script>
</body>
</html>
