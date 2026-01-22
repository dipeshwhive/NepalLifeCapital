@extends('layouts.master')
@section('content')
    <main>

        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i>
                        Company Profile
                    </p>
                    <h1 class="text-light fs-2 text-center mb-5">
                        Company Profile
                    </h1>
                </div>

            </div>
        </section>

        <section class="container col-md-9 col-12 mt-5">
                <div class="card border-white mt-1 mb-3">
                <img title="Company Image" src="{{ getImage($aboutUs->FeaturedImage) }}" alt="company image">
            </div>
        </section>


        <!-- Overlap Div -->
        <section class="container col-md-7 col-10 col-sm-8 shadow rounded-2 company-overlap">
            <div class="container p-3">
                <p class="d-flex mb-0 justify-content-start align-content-center font sub small">{{ $aboutUs->SubTitle }}
                </p>
                <p class="d-flex justify-content-start txt-color align-content-center font-lg mb-3"><b>{{ $aboutUs->Title }}
                    </b></p>
                <p class="font-sm text-black-50">
                    {!! $aboutUs->Description !!}
                </p>

            </div>
        </section>


        <!-- Another Section -->
        <section class="container col-12 col-md-9 mt-5">
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="card mt-2 bg-light-blue border-0">
                        <div class="card-body  ">
                            <h2 class="card-title txt-color font-lg">Our
                                Mission
                            </h2>
                            <p class="card-text text-black-50 font mt-2">{!! $aboutUs->Mission !!}</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mt-2 bg-light-pink border-0">
                        <div class="card-body">
                            <h2 class="card-title text-danger font-lg">Our
                                Vision
                            </h2>

                            <p class="card-text text-black-50 font mt-2">{!! $aboutUs->Vision !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <div class="card mt-1 p-2 mb-3 border-0" style="background-color: #FFFCEA;">
                    <p class="font-lg mt-2 p-1" style="color: #E27C00;">
                        Objectives
                    </p>
                    <div class="row p-1">
                        @foreach ($objectives as $objective)
                                <div class="col-md-4 col-12">
                                <p class="text-black font mb-0">
                                    {{ $objective->Title }}
                                </p>
                                <p class="text-black-50 font">
                                    {!! $objective->Description !!}
                                </p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!-- Section end -->

        <!-- Another Section -->
        <section class="container-fluid position-relative mt-3 py-5 m-0 p-0 py-0">
            <img title="{{ siteSetting()->HomeTitle }}" src="{{ getImage(siteSetting()->HomeFeaturedImage) }}"
                width="100%" alt="{{ siteSetting()->HomeTitle }}" class="img-fluid mt-5">
            <div class="overlay mt-4 position-absolute text-center">
                <h3 class="fs-5 text-white">{{ siteSetting()->HomeTitle }}</h3>
                <p class="text-white font-md">{{ siteSetting()->HomeSubTitle }}</p>
                <div class="justify-content-center d-flex">
                    <button class="button-md">
                        Start Planning Your Wealth Journey Now<span class="circle-md"><span class="arrow-md"></span></span>
                    </button>
                </div>
            </div>
        </section>

        <section class="container-fluid mt-4">
            <div class="row justify-content-center">
                <div class="col-md-9 col-auto">
                    <div class="row">
                        <div class="col-lg-6 col-auto p-3">
                            <div class="card topbar text-center mt-2 mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="mt-4 fs-5 text-light">{{ $home1->Title1 }}</h3>
                                            <div class="text-white font pb-2">
                                                {!! $home1->Description1 !!}
                                            </div>

                                            <div>
                                                <a href="{{ siteSetting()->NavButtonLink3 }}" target="_blank">
                                                    <button class="button-md mb-2">
                                                        Get your Demat account today<span class="circle-md"><span
                                                                class="arrow-md"></span></span>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-auto p-3">
                            <div class="card bg-pink  text-center  mt-2 mb-3">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col">
                                            <h3 class="mt-3 fs-5 text-danger">{{ $home3->Title3 }}</h3>
                                            <div>
                                                <p class="font text-danger">{!! $home3->Description3 !!}</p>
                                            </div>
                                            <div>
                                                <a title="Learn More" href="{{ route('contact') }}">
                                                    <button class="button-md-red ">
                                                        Learn More<span class="circle-md-red"><span
                                                                class="arrow-md-red"></span></span>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container col-md-9 col-auto">
            <div class="row justify-content-center p-3">
                <div class="rounded-2 justify-content-center d-flex align-items-center p-0">
                    <div class="row">
                        <div class="col-sm-6 col-auto">
                            @foreach ($features as $feature)
                                <div class="">
                                    <h3 class="font-md mb-1" style="color: #064D86;">{{ $loop->iteration }}
                                    </h3>
                                    <h3 class="font m-0" style="color: #000;">{{ $feature->Title }}
                                    </h3>
                                    <hr class="my-1">
                                    <p class="card-text text-black-50 font-sm mb-3">{!! $feature->Description !!}
                                    </p>
                                </div>
                            @endforeach

                        </div>
                        <div class="col-md-6 col-auto">
                            <div class="img-fluid">
                                <img title="Feature" src="{{ asset('assets/img/graphics/photo.png') }}" alt="Feature"
                                    class="img-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
