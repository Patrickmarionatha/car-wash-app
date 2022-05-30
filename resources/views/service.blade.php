@extends('layouts.secondary')

@section('container')
    <!-- cover -->
    <div class="container-fluid banner vw-100 vh-100">
        <div class="container position-relative top-50 translate-middle-y">
            <!-- Service detail -->
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="card bg-light text-dark text-center" style="width: 18rem;">
                        <div class="card-body">
                            <a class="btn btn-light btn-lg" href="/cleaning">Cleaning</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card bg-light text-dark text-center" style="width: 18rem;">
                        <div class="card-body">
                            <a class="btn btn-light btn-lg" href="/detailing">Detailing</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card bg-light text-dark text-center" style="width: 18rem;">
                        <div class="card-body">
                            <a class="btn btn-light btn-lg" href="/coating">Coating</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- akhir service detail -->
        </div>
    </div>
    <!-- akhir cover -->
@endsection