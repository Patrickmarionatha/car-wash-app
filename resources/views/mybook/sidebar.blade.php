<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('mybook') ? 'active' : '' }}" aria-current="page" href="/mybook">
                    <span data-feather="home" class="align-text-bottom"></span>
                    My Booking
                </a>
            </li>
        </ul>
    </div>
</nav>
