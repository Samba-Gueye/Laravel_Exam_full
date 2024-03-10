@include('layouts.navbar')
@include('layouts.topnav')
@include('layouts.sidenav')

<div class="content">
        <div class="py-4 px-3 px-md-4">

            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">Nos voitures</div>
            </div>

            <div class="row">
                @foreach($vehicule as $vehicule)
                    <div class="col-md-6 col-xl-4 mb-3 mb-md-4">
                    <!-- Card -->
                    <div class="card h-70">
                        <div class="card-header d-flex">
                            <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">{{$vehicule->type}}</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="media align-items-center px-3 px-md-4 mb-3 mb-md-4">
                                <div class="media-body">
                                    <h4 class="h3 lh-1 mb-2">{{$vehicule->prix_location}} FCFA/jour</h4>
                                    <p class="small text-muted mb-0">
                                      <span class="">{{$vehicule->marque}} {{$vehicule->modele}}</span>
                                    </p>
                                </div>
                            </div>
                             <div class="">
                                <img  height="200" width="350" src="photos/{{$vehicule->photo}}">
                            </div>
                            <a type="submit" class="btn btn-toolbar" href="{{route('vehicule.details', ['id' => $vehicule->id]) }}">Voir details</a>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                @endforeach
                </div>


        </div>


    </div>
</main>


<script src="{{asset('graindashboard/js/graindashboard.js')}}"></script>
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
