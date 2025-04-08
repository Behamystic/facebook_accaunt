<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('index') }}">
            <img src="{{ asset('images/logo.png') }}" class="about-image custom-border-start img-fluid logo-image">

            <div class="d-flex flex-column">
                <strong class="logo-text">Gotto</strong>
                <small class="logo-slogan">Online Job Portal</small>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-center ms-lg-5">
                <li class="nav-item"><a class="nav-link active" href="{{ route('index') }}">Homepage</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Gotto</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown">Pages</a>
                    <ul class="dropdown-menu dropdown-menu-light">
                        <li><a class="dropdown-item" href="{{ route('job_listings') }}">Job Listings</a></li>
                        <li><a class="dropdown-item" href="{{ route('job_details') }}">Job Details</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item ms-lg-auto"><a class="nav-link" href="#">Register</a></li>
                <li class="nav-item"><a class="nav-link custom-btn btn" href="#">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
