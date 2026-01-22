@extends('layouts.master')
@section('content')
    <main>
        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">

                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i
                            class="bi bi-dot"></i>Prospectus
                    </p>
                    <h1 class="text-light fs-2 text-center mb-5">
                        Prospectus </h1>
                </div>
            </div>
        </section>
        {{--
    <div class="container-fluid mb-5">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-10 col-12 rounded-2 d-flex align-items-center p-0">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            @foreach ($notices as $notice)
                                        <div class="row border-bottom mb-3" id="noticeContainer">
                                    <div class="col-md-2">
                                        <p class="card-text text-black-50 font">
                                            {{ $notice->CreatedDate }}
                                        </p>
                                    </div>
                                    <div class="col-md-10">
                                        <h6 class="font" style="color: #000;">{{ $notice->title }}
                                        </h6>
                                        <span
                                            class="card-text
                                            text-black-50 font mb-3"
                                            id="noticeDescription">
                                            {!! $notice->description !!}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}



        <section class="container-fluid col-md-9 col-11 mt-5">
            <div class="row justify-content-center mt-4">
                <div class="rounded-2">
                    <div class="row">
                        <div class="container-fluid col-md-12">
                            <div class="row mt-3 justify-content-center mb-4">
                                <div class="col-md-10">
                                    <h2 class="txt-color fs-4 mb-2">Explore our Prospectus</h2>
                                    <p class="text-black-50 font-sm mb-3">
                                        Stay ahead of the curve and make informed decisions with our curated content,
                                        designed to keep you updated on the latest developments and opportunities.

                                    </p>
                                    <div class="row justify-content-center">
                                        @forelse($prospectuses as $prospectus)
                                        <div class="col-12">
                                            <!-- Prospectus Item 1 -->
                                            <a href="{{ getImage($prospectus->PdfFile) }}"
                                                target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                                                <div class="card mb-3 border-1 shadow-sm prospectus-card">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 col-12 text-md-center mb-2 mb-md-0">
                                                                <p class="text-black-50 font mb-0">
                                                                    @php
                                                                        $prospectusDate = $prospectus->CreatedAt
                                                                            ? \Carbon\Carbon::parse($prospectus->CreatedAt)->format('F j, Y')
                                                                            : null;
                                                                    @endphp
                                                                    <i class="bi bi-calendar3 me-2"></i>{{ $prospectusDate ?? 'Date unavailable' }}
                                                                </p>
                                                            </div>
                                                            <div class="col-md-8 col-10">
                                                                <h3 class="txt-color fs-5 mb-1">{{ $prospectus->Title }}</h3>
                                                                <p class="text-muted font-sm mb-0">Click to view the prospectus document</p>
                                                            </div>
                                                            <div class="col-md-1 col-2 text-end">
                                                                <i class="bi bi-file-earmark-pdf-fill text-danger"
                                                                    style="font-size: 1.5rem;"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>


                                        </div>
                                        @empty
                                        <div class="col-12 text-center text-black-50 py-4">
                                            No prospectus documents are available right now. Please check back soon.
                                        </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid position-relative mt-3 py-5 m-0 p-0 py-0">
            <img title="Notice Image" src="{{ getImage(siteSetting()->HomeFeaturedImage) }}" width="100%"
                alt="Notice Image" class="img-fluid mt-5">
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
    </main>
@endsection
@section('script')
    <style>
        .prospectus-card {
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .prospectus-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
            border-color: #00549A !important;
        }
    </style>
@endsection
