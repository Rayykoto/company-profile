<!-- Navbar -->
<section id="topheader">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
            <a class="navbar-brand" href="{{ route('web.home') }}">
                <img src="{{ asset('web/assets/img/logo.png') }}" alt="" width="350px;" class="d-inline-block align-text-top me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="{{ route('web.home') . '#home' }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('web.home') . '#why-us' }} ">Why Us?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('product.index') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('web.home') . '#articles' }}">Articles & Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('contact.index') }}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('web.home') . '#customer' }}">Our Customers</a>
                    </li>
                    <li class="nav-item">
                        <img src="{{ asset('web/assets/img/logowynhealth.png') }}" style="width: ; height:55px; border:none; margin-top:-13px;" class="img-thumbnail" alt="...">
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>