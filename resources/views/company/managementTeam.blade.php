@extends('layouts.master')
@section('content')
    <main>
        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i
                            class="bi bi-dot"></i>Management team
                    </p>
                    <h3 class="text-light text-center mb-5">
                        Management team </h3>
                </div>

            </div>
        </section>

        <section class="container col-md-9 col-12 mt-3">
            <div class="row">
                <div class="col-md-6 col-auto p-3">
                    <div class="card border-white mt-3 mb-1">
                        <div class="card-body">
                            <p class="card-text font-md mb-0 text-black-50">
                                Driven by Experience, Guided by Vision</p>
                            <p class="card-text font-lg txt-color mb-0">
                                Meet Our Team of Experts </p>
                            <p class="card-text font mt-3 text-black-50">
                                Our management team is a dynamic blend of seasoned professionals and visionary leaders
                                dedicated to steering our company
                                towards success. With a wealth of experience and a forward-thinking approach, they champion
                                innovation, excellence, and
                                integrity in all that we do.</p>
                        </div>
                    </div>
                </div>
                @foreach ($managingTeams as $key => $team)
                    <div class="col-md-6 col-auto p-3">
                        <div class="card front mb-3 border-primary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-5">
                                        <img title="{{ $team->Name }}" src="{{ getImage($team->FeaturedImage) }}"
                                            class="card-img" alt="{{ $team->Name }}"
                                            style="height:180px;object-fit:cover">
                                    </div>
                                    <div class="col-md-8 col-10">
                                        <p class="card-text font-lg txt-color mb-0">{{ $team->Name }}</p>
                                        <p class="card-text font text-black-50 mb-2">{{ $team->Designation }}</p>
                                        <p class="card-text font mb-0">
                                            {{ Str::limit(strip_tags($team->Description), 200) }}
                                        </p>
                                        <div>
                                            <a title="LinkedIn" href="{{ $team->LinkedinLink }}" target="_blank">
                                                <i class="bi bi-linkedin font-md"></i>
                                            </a>
                                        </div>
                                        <!-- Read More Button -->
                                        <button type="button" class="btn btn-sm btn-primary mt-2" data-bs-toggle="modal"
                                            data-bs-target="#teamModal{{ $key }}">
                                            Read More
                                        </button>
                                        <!-- LinkedIn -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bootstrap Modal -->
                    <div class="modal fade" id="teamModal{{ $key }}" tabindex="-1"
                        aria-labelledby="teamModalLabel{{ $key }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                        <h2 class="fs-5 modal-title" id="teamModalLabel{{ $key }}">
                                        {{ $team->Name }}
                                        -
                                        {{ $team->Designation }}</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body fs-4">
                                    {!! $team->Description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="container-fluid position-relative mt-3 py-5 m-0 p-0 py-0">
            <img title="Graphic" src="{{ asset('assets/img/graphics/section.jpg') }}" width="100%" alt="Graphic"
                class="img-fluid mt-5">
            <div class="overlay mt-4 position-absolute text-center">
                <h3 class="text-white fs-5">“ Shape Your Financial Future
                    with Us “</h3>
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
        </section>
    </main>
@endsection
