@extends('layouts.master')
@section('content')
    <main>

        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i>
                        Client Testimonial
                    </p>
                    <h1 class="text-light fs-1 text-center mb-5">
                        Client Testimonial </h1>
                </div>

            </div>
        </section>
        {{--
    <div class="container col-md-9 col-12 mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6 col-auto p-3">
                <div class="card border-white mt-3 mb-1">
                    <div class="card-body">
                        <p class="card-text font-md mb-1 text-black-50">
                            Driven by Experience, Guided by Vision</p>
                        <h3 class="card-text txt-color mb-0">
                            What our Clients; has to say </h3>
                        <p class="card-text font mt-3 text-black-50">
                            Our management team is a dynamic blend of seasoned professionals and visionary leaders
                            dedicated to steering our company
                            towards success. With a wealth of experience and a forward-thinking approach, they champion
                            innovation, excellence, and
                            integrity in all that we do.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-11 p-3">
                <div class="card front mb-3 border-primary">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-6 mb-2">
                                <img src="{{ asset('assets/img/mgmt-team/image 139.jpg') }}" class="card-img"
                                    alt="" />
                            </div>
                            <div class="col-md-8 col-12">
                                <h4 class="card-text  txt-color mb-0">
                                    Mr. Nabin Baskota
                                </h4>
                                <p class="card-text font text-black-50 mb-2">
                                    CEO
                                </p>
                                <p class="card-text font mb-0">
                                    Mr. Baskota, is the foremost personality to initiate and set up the organization
                                    ensuring core entrepreneurial acumen in Nepalese Financial Market. He holds more than a
                                    decade of experience in the capital market of Nepal leveraging greater outcomes in
                                    various avenues of financial investment.
                                </p>
                                <span>
                                    <a href="">
                                        <i class="bi bi-linkedin font-md"></i>
                                    </a>
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div> --}}

        <section class="container col-md-9 col-11 mt-5">
            <div class="row justify-content-center mt-4">
                <div id="carouselExampleControls" class="p-5 bg-light-green rounded-2 carousel slide"
                    data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="row justify-content-center">
                            <div class="col-10">

                                @foreach ($testimonials as $testimonial)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }} ">
                                        <p class="font mt-2" style="color: #565F64;">{!! $testimonial->Message !!}
                                        </p>
                                        <p class="font mb-0" style="color: #565F64;">{{ $testimonial->Name }}
                                        </p>
                                        <p class="font" style="color: #565F64;">{{ $testimonial->Designation }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Previous button -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <!-- Next button -->
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                                <span class="carousel-control-next" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- <div class="container-fluid position-relative mt-3 py-5 m-0 p-0 py-0">
        <img src="{{ asset('assets/img/graphics/section.jpg') }}" width="100%" alt class="img-fluid mt-5">
        <div class="overlay mt-4 position-absolute text-center">
            <h4 class="text-white">“ Shape Your Financial Future
                with Us “</h4>
            <p class="text-white font-md">Let Our Experts Guide You
                Toward
                Financial
                Success</p>
            <div class="justify-content-center d-flex">
                <button class="button-md">
                    Start Planning Your Wealth Journey Now<span class="circle-md"><span class="arrow-md"></span></span>
                </button>
            </div>
        </div>
    </div> --}}
    </main>
@endsection
