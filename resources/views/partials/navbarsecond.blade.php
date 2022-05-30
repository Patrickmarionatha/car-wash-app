    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="nav-link text-warning active" href="/">Home</a>
            @auth
                <div class="collapse navbar-collapse text-right" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome Back, {{ Auth::user()->username }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/book">Book Now</a></li>
                                <li><a class="dropdown-item" href="/mybook">My Booking</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        Logout <i class="bi bi-box-arrow-right"></i></button>
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            @endauth
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- akhir navbar -->
