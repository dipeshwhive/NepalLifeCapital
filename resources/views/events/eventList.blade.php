@extends('layouts.master')
@section('content')
    <main>
        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i>Events
                    </p>
                    <h1 class="fs-2 text-light text-center mb-5">
                        Latest Events </h1>
                </div>
            </div>
        </section>

        <section class="container col-md-8 col-12 mt-3">
            <div class="row mt-5 mb-2">
                <div class="col-6">
                    <p class="font-xl"><b><i class="bi bi-newspaper" style="margin-right:8px "></i>Latest Events</b>
                    </p>
                </div>
            </div>

            <div class="row">
                @foreach ($events as $event)
                    <div class="col-md-4 col-12 mb-2">
                        <div class="card border-0">
                            <a title="Event" href="{{ route('eventDetail', $event->Slug) }}">
                                <img title="Event Image" class="card-img-top"
                                    src="{{ getImage('events', $event->FeaturedImage) }}" alt="Event Image">
                            </a>
                            <div class="card-body">
                                <a title="Event" href="{{ route('eventDetail', $event->Slug) }}">
                                    <p class="mb-2 font-lg-bold text-black-50 p-0">{{ $event->Title }}
                                    </p>
                                </a>
                                <div class="row">
                                    <span class="font"><i class="bi bi-person-circle" style="margin-right:5px;"></i>Nepal
                                        Life
                                        Capital &nbsp; . &nbsp;{{ $event->CreatedDate }}</span>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
    </main>
@endsection
