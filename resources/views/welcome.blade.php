@extends('web.default')

@section('content')

    <!-- Hero Section -->
    <section id="header">
        <div id="home" class="container-fluid">
            <img src="web/assets/img/Header.png" class="img-fluid" alt="responsive-image">
        </div>
    </section>

    <!-- Why Us -->
    <section id="why">
        <div id="why-us" class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Why Us?</h2>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-2">

                </div>
                <div class="col-md-4">
                    <div class="card-why text-center">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="web/assets/Assets/Icon-propertybaru.png" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Customized Solution</h3>
                        <p class="mt-3">
                            Every laboratory has different standard procedures.
                            As such, a system should be adaptable to its needs.
                            WYN@Health is a fully customized system, adapted
                            to the needs and Standard of Procedure to optimize
                            results while conforming to ISO standards.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-why text-center">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="web/assets/Assets/Icon-propertybaru.png" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Dependable System</h3>
                        <p class="mt-3">
                            Records the laboratory test process in a detailed,
                            structured and accurate. As well as simplify the
                            process of pre-analytic, analytic and post-analytic.
                            The process is electronically traceable and
                            reducesuser errors.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-2">

                </div>
                <div class="col-md-4">
                    <div class="card-why text-center">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="web/assets/Assets/Icon-propertybaru.png" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Accurate Analysis</h3>
                        <p class="mt-3">
                            Accurate sampling by getting actual results to
                            reduce errors and double checking, using an
                            integrated system.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-why text-center">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="web/assets/Assets/Icon-propertybaru.png" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Your Patient's Safety</h3>
                        <p class="mt-3">
                            We prevent errors in results or interpretation of
                            results. Patient’s safety is an important element
                            that needs to be considered in issuing laboratory
                            examination results, because it involves human
                            safety.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

    <!-- section Vision Mission -->
    <section id="misi">
        <div class="container position-relative">
            <div class="row">
                <div class="comp col-md-10 mx-auto">
                    <h3 class="mt-4">Company's Profile</h3>
                    <p class="mt-3">
                        Established since 2003, PT. Wynacom Unitama Sejahtera is WYN@Health Laboratory Information and
                        other healthcare system provider.
                        Also appointed as sole distributor of Phlebotomy Labeling System from Energium - Korea. Having
                        implementation sites in more than 50
                        cities all over Indonesia ranging from hospitals, laboratory clinics, diagnostics and testing
                        centres, we customize solutions to your needs,
                        providing a dependable system and accurate analysis for your patients' safety.
                    </p>
                </div>
            </div>
            <img src="web/assets/Assets/Accsent 1.png" alt="" class="h-100 position-absolute top-0 start-0">
            <div class="row">
                <div class="col-10 mx-auto">
                    <hr class="text-light" style="height: 2px; color: #fff; border-radius: 2px;">
                </div>
            </div>

            <div class="container mt-2">
                <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="card-visi col-md-5">
                        <h4>Vision</h4>
                        <p class="mt-3">
                            To be the best healthcare system provider.
                        </p>
                    </div>
                    <div class="card-visi col-md-5">
                        <h4>Mission</h4>
                        <p class="mt-3">
                            To bring inspiration, innovation and ideas to improve healthcare
                            service for a better community.
                        </p>
                    </div>
                </div>
            </div>
            <!-- <img src="assets/Assets/Hero Image.png" alt="" class="position-absolute end-0 bottom-0"> -->
        </div>
    </section>

    <!-- Maps -->
    <section id="maps">
        <div class="container">
            <div class="col-12 text-center">
                <h2 class="mt-3 pt-100">Customers Distribution Maps</h2>
            </div>
            <img src="web/assets/img/Map trans.png" class="img-fluid" alt="responsive-image">
        </div>
    </section>


    <!-- Gambar -->
    <section id="gambar">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-2">
                    <img src="web/assets/Assets/kontak-img.png" class="card-img" alt="Wynacom" style="width: 100%;">
                    @foreach ( $articles as $article )
                            {{ $articles->title }}
                    @endforeach
                </div>
                <div class="col-md-4">
                    <div> <img src="web/assets/Assets/kontak-img.png" class="card-img" alt="Wynacom" style="width: 100%;">
                    </div>
                    <div class="mt-2">
                        <img src="web/assets/Assets/kontak-img.png" class="card-img" alt="Wynacom"
                            style="width: 100%; height: 196px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="event">
        <div id="articles" class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Upcoming Events</h4>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="web/assets/img/Map trans.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Event's Name</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This content is a little bit longer.
                                    </p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h4>Past Events</h4>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="web/assets/img/Map trans.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Event's Name</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This content is a little bit longer.
                                    </p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <!-- <section id="galery">
        <div class="container">
            <div class="carousel">
              <div class="carousel__face"><img src="assets/img/Map trans.png"></div>
              <div class="carousel__face"><img src="assets/img/Map trans.png"></div>
              <div class="carousel__face"><img src="assets/img/Map trans.png"></div>
            </div>
          </div>
    </section> -->

    <!-- Gallery 2-->
    <section id="galery2">
        <h2 class="text-center">Gallery</h2>
        <div class="container-fluid">
        <div class="swiper-container position-relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="web/assets/img/Map trans.png" alt=""></div>
                <div class="swiper-slide"><img src="web/assets/img/Wynacom-logo.png" alt=""></div>
                <div class="swiper-slide"><img src="//into-the-program.com/demo/images/sample012.jpg" alt=""></div>
                <div class="swiper-slide"><img src="//into-the-program.com/demo/images/sample007.jpg" alt=""></div>
                <div class="swiper-slide"><img src="//into-the-program.com/demo/images/sample008.jpg" alt=""></div>
                <div class="swiper-slide"><img src="//into-the-program.com/demo/images/sample009.jpg" alt=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    </section>

@endsection