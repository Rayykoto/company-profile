@extends('web.default')

@section('content')

<section id="kosong">
    <div class="container">
    </div>
</section>

<!-- Hero Section -->
<section id="header">
    <div id="home" class="head container-fluid">
        <img src="web/assets/img/header-wynacom.png" class="img-fluid" alt="responsive-image">
    </div>
</section>

<section id="headerMob">
    <div id="home" class="head container-fluid">
        <img src="web/assets/img/header_mobile.png" class="img-fluid" alt="responsive-image">
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
                        <img src="web/assets/Assets/icon_Customized Solution.png" style="width:64px; height:64px;"
                            alt="" class="position-absolute top-50 start-50 translate-middle">
                    </div>
                    <h3 class="mt-4">Customized Solution</h3>
                    <p class="mt-3">
                        Each laboratory has different standard procedures that require a system that adapts to its
                        needs.
                        WYN@Health offers fully customizable systems that adapt to the individual
                        needs and standards of procedures of each lab while optimizing results and conforming to ISO
                        standards.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-why text-center">
                    <div class="circle-icon position-relative mx-auto">
                        <img src="web/assets/Assets/icon_Dependable System.png" style="width:64px; height:64px;" alt=""
                            class="position-absolute top-50 start-50 translate-middle">
                    </div>
                    <h3 class="mt-4">Dependable System</h3>
                    <p class="mt-3">
                        Our dependable system records the laboratory tests in a detailed, structured,
                        and accurate process through both pre and post analytic stages.
                        This results in a reduced user error and electronically traceable system.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

            </div>
        </div>

        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="kec col-md-4">
                <div class="card-why text-center">
                    <div class="circle-icon position-relative mx-auto">
                        <img src="web/assets/Assets/icon_Accurate Analysis.png" style="width:64px; height:64px;" alt=""
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
                        <img src="web/assets/Assets/icon_Patient's Safety.png" style="width:64px; height:64px;" alt=""
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
<section id="misi" style="background-image: url('web/assets/img/bg-company.png');">
    <div class="container position-relative">
        <div class="row">
            <div class="comp col-md-10 mx-auto">
                <h3 class="mt-4">Company's Profile</h3>
                <p class="mt-3">
                    Established in 2003, PT. Wynacom Unitama Sejahtera provides WYN@Health and other healthcare systems.
                    We are the sole distributor of Energium Korea’s Phlebotomy Labelling System.
                    We implement our dependable systems in hospitals, laboratories, clinics,
                    and diagnostic and testing centres in both public and private sectors for over 50 cities all over
                    Indonesia.
                </p>
            </div>
        </div>
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
    </div>
</section>

<!-- Maps -->
<section id="maps">
    <div class="container">
        <div class="map col-12 text-center">
            <h2 class="mt-3 pt-100">Customers Distribution Maps</h2>
        </div>
        <img src="web/assets/img/Map trans.png" class="img-fluid" alt="responsive-image">
    </div>
</section>

<!-- cust list -->
<section id="customer">
    <div class="container">
        <div class="map col-12 text-center">
            <h2 class="mt-3 pt-100">Our Customers</h2>
        </div>
        <img src="web/assets/img/cust-list.png" class="img-fluid" alt="responsive-image">
    </div>
</section>

<!-- Gambar -->
<section id="articles">
    <div class="container-fluid">
        <div class="row">
            <div class="art col-md-8">
                <div class="card text-white">
                    <img src="{{ $lastarticle->image }}" class="card-img" alt="Terbaru">
                    <div class="art card-img-overlay">
                        <h5 class="card-title-first">Articles & Events</h5>

                        <div class="card-text-first">
                            <h6><a href="{{ route('articles.show', $lastarticle->slug) }}">{{ $lastarticle->title }}</a>
                            </h6>
                            <p>{{ $lastarticle->created_at->format('d M Y') }}
                                <p>{!! words($lastarticle->description) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="art col-md-4">
                <div class="card text-white">
                    <img src="{{ $secondarticle->image }}" class="card-img" alt="...">
                    <div class="art card-img-overlay">
                        <div class="card-text-second">
                            <h6><a
                                    href="{{ route('articles.show', $secondarticle->slug) }}">{{ $secondarticle->title }}</a>
                            </h6>
                            <p>{{ $secondarticle->created_at->format('d M Y') }}
                                <p>{!! words($secondarticle->description) !!}</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-white">
                        <img src="web/assets/img/articles-2.jpg" class="art card-img" alt="Wynacom">
                        <div class="art card-img-overlay">
                            <div class="link">
                                <h6><a href="{{ route('articles.index') }}">View All Articles</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section id="event">
    <div id="articles" class="container">
        <div class="row">
            <!-- component pagination dekstop for event -->
        </div>

        <div class="row">
            <div class="mob col-md-6 pt-3" id="upcoming_events">
                @include('components.upcoming_event')
            </div>

            <div class="show row">
                <div class="show col-md-3">
                    <h4>Past Events</h4>
                </div>
                {{-- <div class="show col-md-3">
                    <label class="pagination justify-content-end">{{ $past_events->links(); }}</label>
            </div> --}}
        </div>

        <div class="mob col-md-6 pt-3" id="past_events">
            @include('components.past_event')
        </div>
    </div>
    </div>
</section>
<!-- EVENT 2 -->

<!-- Gallery 2-->
<section id="galery2">
    <h2 class="text-center">Gallery</h2>
    <div class="container-fluid">
        <div class="swiper-container position-relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="web/assets/gallery/Event Suramade 2022.jpeg" alt=""></div>
                <div class="swiper-slide"><img src="web/assets/gallery/event all.jpeg" alt=""></div>
                <div class="swiper-slide"><img src="web/assets/img/Map trans.png" alt=""></div>
                <div class="swiper-slide"><img src="web/assets/img/Wynacom-logo.png" alt=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

@include('components.modal-show')

<script>
    $(document).ready(function () {

        $('#upcoming_events').on('click', '.page-link', function (event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_upcoming(page);
        })

        $('#past_events').on('click', '.page-link', function (event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_past(page);
        });

        function fetch_past(page) {
            $.ajax({
                type: "GET",
                url: "/past_event?page=" + page,
                success: function (data) {
                    $('#past_events').html(data);
                }
            });
        }

        function fetch_upcoming(page) {
            $.ajax({
                type: "GET",
                url: "/upcoming_event?page=" + page,
                success: function (data) {
                    $('#upcoming_events').html(data);
                }
            });
        }

    });

</script>

@endsection
