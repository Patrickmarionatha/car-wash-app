@extends('layouts.secondary')

@section('container')
    <section id="behind">

        <!-- cover -->
        {{-- <div class="container-fluid banner vw-100 vh-100"> --}}
        <div class="container">
            <div class="row">
                <div class="col text-center text-warning pt-5">
                    <h2>Galleries</h2>
                </div>
            </div>
            <div class="row justify-content-center pt-lg-5">
                <div class="col-lg-4 mb-3">
                    <img src="Assets/1.jpeg" class="card-img-top" alt="">
                </div>
                <div class="col-lg-4 mb-3">
                    <img src="Assets/2.jpeg" class="card-img-top" alt="">
                </div>
                <div class="col-lg-4 mb-3">
                    <img src="Assets/3.jpeg" class="card-img-top" alt="">
                </div>
                <div class="col-lg-4 mb-3">
                    <img src="Assets/4.jpeg" class="card-img-top" alt="">
                </div>
                <div class="col-lg-4 mb-3">
                    <img src="Assets/5.jpeg" class="card-img-top" alt="">
                </div>
                <div class="col-lg-4 mb-3">
                    <img src="Assets/6.jpeg" class="card-img-top" alt="">
                </div>
                {{-- <div class="col-lg-3 mb-3">
                    <img src="Assets/.jpg" class="card-img-top" alt="">
                </div>
                <div class="col-lg-3 mb-3">
                    <img src="Assets/.jpg" class="card-img-top" alt="">
                </div> --}}
            </div>
        </div>
        {{-- </div> --}}
        <!-- akhir cover -->

        {{-- member --}}
        <div class="row text-center text-warning pt-lg-5">
            <div class="col">
                <h1>Member Group 3</h1>
            </div>
        </div>
        <div class="row justify-content-center pt-lg-5 text-center">
            <div class="col-lg-4">
                <img src="Assets/gandi.jpeg" alt="" width="400" class="rounded-circle">
                <div class="card-body">
                    <h3 class="card-text">Mohamad Gandi Efendi</h3>
                    <h3 class="card-text">2101669796</h3>
                    <h3 class="card-text">Computer Science</h3>
                    <h3 class="card-text">Kampus Kemanggisan</h3>
                    <h3 class="card-text">081287116156</h3>
                    <h3 class="card-text">mohamad.efendi001@binus.ac.id</h3>
                    <h3 class="card-text">Binus SOCS</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <img src="Assets/raditya.jpeg" alt="" width="400" class="rounded-circle">
                <div class="card-body">
                    <h3 class="card-text">Raditya Tohpati</h3>
                    <h3 class="card-text">2101679033</h3>
                    <h3 class="card-text">Computer Science</h3>
                    <h3 class="card-text">Kampus Alam Sutera</h3>
                    <h3 class="card-text">081212350225</h3>
                    <h3 class="card-text">raditya.tohpati@binus.ac.id</h3>
                    <h3 class="card-text">Binus SOCS</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <img src="Assets/patrick.jpg" alt="" width="400" class="rounded-circle">
                <div class="card-body">
                    <h3 class="card-text">Patrick Marionatha</h3>
                    <h3 class="card-text">2201770712</h3>
                    <h3 class="card-text">Computer Science</h3>
                    <h3 class="card-text">Kampus Alam Sutera</h3>
                    <h3 class="card-text">089657521674</h3>
                    <h3 class="card-text">Patrick.marionatha@binus.ac.id</h3>
                    <h3 class="card-text">Binus SOCS</h3>
                </div>
            </div>
        </div>
        {{-- akhir member --}}
    </section>
    <footer class="text-warning" id="footerAbout">
        <p>
            Contact Us :<br>
            Phone : (021) 123 459 1549<br>
            Email : AECarWash@Book.com
        </p>
    </footer>
@endsection
