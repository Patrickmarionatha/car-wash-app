@extends('layouts.main')

@section('container')
    <!-- cover -->
    <div class="container-fluid banner vw-100 vh-100">
        <div class="container">
            <!-- Tulisan Tengah -->
            <div class="kata">
                <br><br><br><br><br><br>
                <h2>
                    Welcome to A'E Car Wash!<br>
                    what kind of services do you need?
                </h2>
            </div>
            <!-- Akhir Tulisan tengah -->

            <!-- Booking -->
            <div class="book">
                <a class="nav-link text-warning mb-lg-3" href="/book">
                    <h1>Book Now!</h1>
                </a>
            </div>
            <!-- akhir Booking -->
        </div>
        <!-- Footer -->
        <footer class="position-absolute bottom-0">
            <p>
                Best car wash app on the planet<br>
                this website will make the customer easily book a car wash on their nearest location
            </p>
        </footer>
        <!-- Akhir Footer -->
    </div>
    <!-- akhir cover -->

@endsection
