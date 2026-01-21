@extends('layouts.master')
@section('content')
    <main>
        @if ($notifications->count())
            @foreach ($notifications as $notification)
                <div id="popup{{ $notification->id }}" class="modal fade notification">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close mx-3" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <button type="button" class="btn btn-danger" aria-label="Close" onclick="closeAll()">Close
                                    All</button>
                            </div>
                            <div class="modal-body">
                                <img title="Modal Image" src="{{ getImage('notification', $notification->FeaturedImage) }}"
                                    class="w-100" alt="Modal Image" />
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    // JavaScript code to show the popup notice on page load
                    document.addEventListener('DOMContentLoaded', function() {
                        var myModal = new bootstrap.Modal(document.getElementById('popup' + {{ $notification->id }}));
                        myModal.show();
                    });


                    function closeAll() {
                        // $("#popup"+{{ $notification->id }}).modal("hide")
                        $('.modal').modal('hide');
                    }
                </script>
            @endforeach
        @endif

        <section class="container-fluid p-0 fadeIn" data-wow-delay="0.1s">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    @foreach ($sliders as $slider)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img title="{{ $slider->MainTitle }}" class="w-100"
                                src="{{ getImage('slider', $slider->FeaturedImage) }}" alt="{{ $slider->MainTitle }}" />
                            <div class="carousel-caption">
                                <div class="container-fluid col-9 mb-5">
                                    <div class="row">
                                        <div class="">
                                            {!! $loop->first
                                                ? '<h1 class="text-white mb-2 animated fs-2 slideInDown">'
                                                : '<h2 class="text-white mb-2 animated fs-2 slideInDown">' !!}
                                            {{ $slider->MainTitle }}
                                            {!! $loop->first ? '</h1>' : '</h2>' !!}
                                            <p class=" font-md-lt mb-3">
                                                {{ $slider->SubTitle }}
                                            </p>
                                            {{-- <div class="">
                                            <button class="button-md">
                                                Learn more<span class="circle-md"><span class="arrow-md"></span></span>
                                            </button>
                                        </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Previous button -->
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <!-- Next button -->
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        {{--
    <div class="container col-7 shadow rounded-2 overlap">
        <div class="row">
            <p class="d-flex justify-content-center align-content-center font-md topic mb-0"><b>Our
                    Mutual Fund Scheme</b></p>
            <p class="d-flex m-auto justify-content-center align-content-center font sub small">Personalized
                and Curated based on your financial requirement</p>
        </div>
        <div class="container p-2">
            <div class="row justify-content-center">

                @foreach ($mutualFundSchemes as $key => $mutualFund)
                    @if ($key % 2 == 0)
                        <div class="col-auto col-md-6">
                            <div class="card over mt-3 mb-2 bg-success">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="card-title text-white font-md">
                                                {{ $mutualFund->Title }}
                                            </p>
                                        </div>
                                        <div class="col-4">
                                            <a href
                                                class="d-flex text-white text-decoration-underline p-0 font-xs justify-content-end">
                                                Explore
                                                Scheme
                                            </a>
                                        </div>
                                    </div>
                                    <span
                                        class="bg-white font-sm text-success rounded rounded-3 p-1">{{ $mutualFund->SchemeType }}</span>
                                    <div class="row">
                                        <div class="col-10">
                                            <p class="card-text text-white font-sm mt-3">Maturity
                                                Period
                                                (Yrs)
                                            </p>
                                        </div>
                                        <div class="col-2 justify-content-end d-flex">
                                            <p class="card-text text-white font-sm mt-3">{{ $mutualFund->MaturityPeriod }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-9">
                                            <p class="card-text text-white font-sm ">Size
                                                of fund
                                                (Rs.)
                                            </p>
                                        </div>
                                        <div class="col-3 justify-content-end d-flex">
                                            <p class="card-text text-white font-sm ">{{ $mutualFund->FundSize }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-auto col-md-6 mb-3">
                            <div class="card over1 mt-3 mb-2 bg-primary">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="card-title text-white font-md">{{ $mutualFund->Title }}
                                            </p>
                                        </div>
                                        <div class="col-4">
                                            <a href
                                                class="d-flex text-white text-decoration-underline p-0 font-xs justify-content-end">
                                                Explore
                                                Scheme
                                            </a>
                                        </div>
                                    </div>
                                    <span
                                        class="bg-white font-sm text-primary rounded rounded-3 p-1">{{ $mutualFund->SchemeType }}</span>

                                    <div class="row">
                                        <div class="col-10">
                                            <p class="card-text text-white font-sm mt-3">Maturity
                                                Period
                                                (Yrs)</p>

                                        </div>
                                        <div class="col-2 justify-content-end d-flex">
                                            <p class="card-text text-white font-sm mt-3">{{ $mutualFund->MaturityPeriod }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-9">
                                            <p class="card-text text-white font-sm ">Size
                                                of fund
                                                (Rs.)
                                            </p>

                                        </div>
                                        <div class="col-3 justify-content-end d-flex">
                                            <p class="card-text text-white font-sm ">{{ $mutualFund->FundSize }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div> --}}

        <!-- Another Section -->
        <section class="container col-md-9 col-auto mt-5">
            <h2 class="txt-color fs-3">{{ $home1->Title1 }}</h2>
            <p class="font">
                {!! $home1->description1 !!}
            </p>
            <div class="row mb-5">
                <div class="col-md-6 mb-2">
                    <div class="card mt-2 mb-3 bg-light-blue border-0">
                        <div class=" card-body small ">
                            <h3 class=" card-title txt-color font-lg">Our
                                Mission
                            </h3>
                            <p class="card-text text-black-50 font mt-2">{!! $aboutUs->mission !!}</p>
                        </div>
                    </div>
                    <div class="card mt-3 mb-3 bg-light-pink border-0">
                        <div class="card-body ">

                            <h3 class="card-title text-danger font-lg">Our Vision</h3>
                            <p class="card-text text-black-50 font mt-2">{!! $aboutUs->vision !!}</p>
                        </div>
                    </div>
                    <div class="">
                        <a title="Company Profile" href="{{ route('companyProfile') }}"><button class="button-md">Learn
                                more<span class="circle-md"><span class="arrow-md"></span></span>
                            </button></a>
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-end align-content-end ">
                    <img title="Graphics" src="{{ asset('assets/img/graphics/Group.png') }}" width="90%"
                        class="img-fluid " alt="Graphics">
                </div>
            </div>
        </section>

        <!-- OUR SERVICES -->
        <section class="container col-md-9 col-auto mt-5">
            <h2 class="txt-color fs-3 text-center">
                Our Services
            </h2>
            <p class="font text-center">Nepal Life Capital offers rigorous data-driven investment strategies geared to
                build
                long term wealth. </p>
            <div class="row">
                <div class="col-auto col-md-6 mt-4 mb-3">
                    <img title="Graphics" src="{{ asset('assets/img/graphics/photo.png') }}" class="img-fluid w-100"
                        alt="Graphics">
                </div>
                <div class="col-auto col-md-6 mt-4">
                    @foreach (homePrimaryService() as $service)
                        <div class="card front mt-3 mb-3 border-primary w-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <h3 class="card-title font-lg" style="color: #064D86;">{{ $service->Title }}
                                        </h3>
                                        <p class="card-text text-black-50 font mt-2">
                                            {!! Str::limit($service->description, 150) !!}
                                        </p>

                                        <div class="">
                                            <a title="Service" href="{{ route('primaryService', ['slug'=>$service->Slug]) }}">
                                                <button class="button-md">Learn more<span class="circle-md"><span
                                                            class="arrow-md"></span></span>
                                                </button></a>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <img title="Graphics" src="{{ asset('assets/img/graphics/img.png') }}"
                                            class="w-100 d-flex justify-content-end align-content-end" alt="Graphics">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Our Services end -->

        <!-- Another Section -->
        <section class="container-fluid position-relative mt-3 py-5 m-0 p-0 py-0">
            <img title="{{ siteSetting()->HomeTitle }}"
                src="{{ getImage('site', siteSetting()->HomeFeaturedImage) }}" width="100%"
                alt="{{ siteSetting()->HomeTitle }}" class="img-fluid mt-5">
            <div class="overlay mt-4 position-absolute text-center low-banner text-white">
                <h2 class="text-white fs-3">{{ siteSetting()->HomeTitle }}</h2>
                {{ siteSetting()->HomeSubTitle }}
                <div class="justify-content-center d-flex">
                    <a title="{{ siteSetting()->HomeRouteName }}"
                        href="{{ route('primaryService', PMS()->Slug) }}"><button class="button-md">
                            {{ siteSetting()->HomeRouteName }}<span class="circle-md"><span
                                    class="arrow-md"></span></span>
                        </button></a>
                </div>
            </div>
        </section>

        <section class="container-fluid col-md-9 col-11 px-3">
            <div class="row justify-content-center">
                <div class="col-md-9 div-free-demat text-center topbar rounded-2 text-white">
                    <h2 class="mt-5 text-light fs-3 ">{{ $home2->Title2 }}</h2>
                    {!! $home2->description2 !!}
                    <div>
                        <button class="button-md mb-4 ">
                            {{ $home2->route2 }}<span class="circle-md"><span class="arrow-md"></span></span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid">
            <div class="row justify-content-center mt-5">
                <div class="col-md-9 col-auto p-4 bg-light-blue rounded-3">
                    <div class="row">
                        <div class="col-md-8 col-auto">
                            <h2 class="txt-color fs-3 ">
                                Our Approach
                            </h2>
                            <p class="font">Capitalmind Wealth offers rigorous data-driven investment strategies
                                geared
                                to
                                build long term wealth. With Adaptive Momentum, Resilient and Surge India, you can get
                                your
                                ideal portfolio mix best-suited to achieve your long-term goals.</p>
                        </div>
                        <div class="col-auto col-md-4 d-flex approach mb-4">
                            <img title="Approach" src="{{ asset('assets/img/graphics/approach.png') }}" class="w-25"
                                alt="Approach">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        @foreach ($approaches as $approach)
                            <div class="col-md-6 col-auto mb-3">
                                <div class="card front border-primary" style="border-radius:20px;">
                                    <div class="card-body">
                                        <h2 class="card-title fs-3" style="color: #064D86 ;">{{ $loop->iteration }}
                                        </h2>
                                        <p class="card-text text-black-50 font mt-2">{!! $approach->description !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid">
            <div class="row justify-content-center mt-5">
                <div
                    class="col-md-9 col-11 p-5 gradient rounded-3 justify-content-center d-flex flex-column align-items-center">
                    <div class="img-fluid justify-content-center d-flex">
                        <img title="Graphic Image" src="{{ asset('assets/img/graphics/Vector.png') }}"
                            alt="Graphic Image" class="img-sm img-fluid">
                    </div>
                    <div class="text-center col-12 col-sm-12 mt-4 text-white">
                        <h2 class="text-white fs-3 mb-3">{{ $home3->Title3 }}</h2>
                        {!! $home3->description3 !!}
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route('primaryService', PMS()->Slug) }}"><button class="button-md">
                                    Learn More<span class="circle-md"><span class="arrow-md"></span></span>
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container col-md-9 col-11">
            <div class="row justify-content-center mt-5">
                <div class="rounded-2 justify-content-center d-flex flex-column align-items-center">
                    <h2 class="text-center fs-3 txt-color">
                        Why with Nepal Life Capital
                    </h2>
                    <p class="font">
                        Nepal Life Capital offers rigorous data-driven investment strategies geared to build long term
                        wealth.
                    </p>
                </div>
            </div>
        </section>

        <section class="container col-md-9 col-11">
            <div class="row justify-content-center p-3">
                <div class="rounded-2 justify-content-center d-flex align-items-center p-0">
                    <div class="row">
                        <div class="col-sm-6 col-11">
                            @foreach ($features as $feature)
                                <div class="">
                                    <h2 class="font mb-1 fs-4" style="color: #064D86;">{{ $loop->iteration }}
                                    </h2>
                                    <h3 class="font fs-5 m-0" style="color: #000;">{{ $feature->Title }}
                                    </h3>
                                    <hr class="my-1">
                                    <p class="card-texokt text-black-50 font mb-3">{!! $feature->description !!}
                                    </p>
                                </div>
                            @endforeach

                        </div>
                        <div class="col-md-6 col-auto">
                            <div class="img-fluid">
                                <img title="Image" src="{{ asset('assets/img/graphics/photo.png') }}" alt="Image"
                                    class="img-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid col-md-9 col-11">
            <div class="row justify-content-center mt-5">
                <div class=" rounded-2 justify-content-center d-flex flex-column align-items-center">
                    <div class="col-md-8 col-11">
                        <h2 class="text-center fs-4 txt-color">
                            Unleash your Investment Potential with our Portfolio Products
                        </h2>
                    </div>
                    <p class="font">
                        Products completely curated to enable you to achieve your goals.
                    </p>
                </div>
            </div>
        </section>

        <section class="container-fluid col-md-9 col-auto mt-4">
            <div class="row justify-content-center">
                <div class="">
                    <div class="row justify-content-center">
                        @foreach ($portfolioProducts as $product)
                            <div class="col-md-6 col-auto mb-3">
                                <div class="card front border-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="img-fluid justify-content-center d-flex">
                                                    <img title="Product Image"
                                                        src="{{ getImage('products', $product->FeaturedImage) }}"
                                                        alt="Product Image" class="w-75">
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-auto">
                                                <h2 class="card-title fs-4" style="color: #064D86; ">
                                                    {{ $product->Title }}
                                                </h2>
                                                <p class="card-text text-black-50 font-sm mt-2">
                                                    {!! $product->description !!}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-2 position-relative">
                                            <div class="col-4">
                                                <p class="text-black-50 font-sm">Objective</p>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-black-50 font-sm">Min.
                                                    Investment
                                                    (Rs.)
                                                </p>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-black-50 font-sm">Lock in
                                                    Period
                                                    (yrs)</p>
                                            </div>
                                        </div>
                                        <div class="row position-relative">
                                            <div class="col-4">
                                                <p class="text-black-50 font-sm">{{ $product->objectives }}</p>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-black-50 font-sm">{{ $product->MinInvestment }}</p>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-black-50 font-sm">{{ $product->LockPeriod }}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="">
                                                <div class="">
                                                    <a title="PMS link"
                                                        href="{{ route('primaryService', PMS()->Slug) }}"><button
                                                            class="button-md">
                                                            Learn More<span class="circle-md"><span
                                                                    class="arrow-md"></span></span>
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid col-md-9 col-11 px-3">
            <div class="row justify-content-center mt-5">
                <div class="p-3 text-center bg-pink rounded-2">
                    <h2 class="mt-5 fs-4 text-danger">{{ $home4->Title4 }}</h2>
                    <div>
                        <p class="font text-danger mb-4 text-center">{!! $home4->description4 !!}</p>
                    </div>
                    <div>
                        <a title="PMS" href="{{ route('primaryService', PMS()->Slug) }}"><button
                                class="button-md-red mb-4">
                                Learn More<span class="circle-md-red"><span class="arrow-md-red"></span></span>
                            </button></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid">
            <div class="row justify-content-center mt-5">
                <div class="col-md-9 rounded-2 justify-content-center d-flex flex-column align-items-center">
                    <h2 class="text-center fs-3 txt-color">
                        Our Success Stories </h2>
                </div>
            </div>
        </section>

        <section class="container col-md-9 col-11">
            <div class="row justify-content-center mt-4">
                <div id="carouselExampleControls" class="p-5 bg-light-green rounded-2 carousel slide"
                    data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="row justify-content-center">
                            <div class="col-10">
                                @foreach ($testimonials as $testimonial)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }} ">
                                        <p class="font mt-2" style="color: #565F64;">{!! $testimonial->message !!}
                                        </p>
                                        <p class="font mb-0" style="color: #565F64;">{{ $testimonial->name }}
                                        </p>
                                        <p class="font" style="color: #565F64;">{{ $testimonial->designation }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Previous button -->
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <!-- Next button -->
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid mt-5 col-md-9 col-11">
            <div class="row justify-content-center mt-4">
                <div class="rounded-2">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h2 class="txt-color fs-4">Featured Newsletters</h2>
                            <p class="text-black-50 font">View our latest
                                resources,
                                publication to gain more knowledge.</p>
                        </div>
                        <div class="col-md-6 col-auto">
                            <div class=" d-flex justify-content-end">
                                <button class="button-lighter"><a title="Newsletter" href="{{ route('newsletter') }}">
                                        View all resources<span class="circle-lighter"><span
                                                class="arrow-lighter"></span></span>
                                    </a></button>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        @foreach ($newsletters as $newsletter)
                            <div class="col-md-3 col-sm-12 mb-2">
                                <h3 class="font fs-5 text-black mb-1">{{ $newsletter->year->year }}
                                </h3>
                                <a title="Newsletter File" href="{{ getImage('newsletter', $newsletter->file) }}"
                                    target="_blank" class="card-text text-black-50 font">{{ $newsletter->Title }}</a>
                            </div>
                        @endforeach
                    </div> --}}
                </div>
            </div>
        </section>

        <section class="container-fluid col-md-12 p-0 m-0 footer mt-5" style="background-color: #F0F8FF;">
            <div class="container p-5">
                <div class="row justify-content-center mt-4">
                    <div class="col-md-11 col-12 rounded-2">
                        <div class="row mb-3">
                            <div class="col-md-6 col-12">
                                <h2 class="txt-color fs-4">Our Gallery</h2>
                                <p class="text-black-50 font">View our latest
                                    Events,
                                    Programs and happenings at Nepal Life
                                    Capital.</p>
                            </div>
                            <div class="col-md-6 col-auto">
                                <div class="d-flex justify-content-end ">
                                    <button class="button-lighter"><a title="Gallery"
                                            href="{{ route('photoGallery') }}">
                                            View all images<span class="circle-lighter"><span
                                                    class="arrow-lighter"></span></span>
                                        </a></button>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-auto mb-2">
                                <img title="Gallery Image"
                                    src="{{ getImage('gallery', $firstGalleryImage->FeaturedImage) }}" class="w-100"
                                    alt="
                                    gallery image">
                            </div>
                            <div class="col-md-8 col-auto">
                                <div class="row">

                                    @foreach ($otherGalleryImage as $image)
                                        <div class="col-md-3 col-auto mb-2">
                                            <img title="Other Gallery"
                                                src="{{ getImage('gallery', $image->FeaturedImage) }}" class="w-100"
                                                alt="Otherr Gallery">
                                        </div>
                                    @endforeach

                                    {{-- <div class="col-md-6 col-auto">
                                    <img src="{{ asset('assets/img/gallery/image 135.png') }}" class="w-100" alt>
                                </div> --}}
                                </div>
                                <div class="row mt-2">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
@endsection
