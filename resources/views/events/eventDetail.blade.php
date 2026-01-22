@extends('layouts.master')
@section('content')
    <main>

        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i>Event
                        Details
                    </p>
                    <h1 class="fs-1 text-light text-center mb-5">
                        Event Details </h1>
                </div>
            </div>
        </section>

        <section class="container col-md-9 col-auto shadow rounded-2 mt-5 mb-3">
            <div class="container p-3">
                <div class="row">
                    <div class="col-md-6 col-auto mt-3">
                        <h2 class="txt-color fs-4 mb-3 cursor-pointer">{{ $detail->Title }}</h2>
                        <p class="font-lg mb-2"><i class="bi bi-calendar-event"></i>&nbsp;&nbsp;{{ $detail->CreatedDate }}
                        </p>
                        <p class="font mb-3 text-justify">{!! $detail->Description !!}</p>
                    </div>
                    <div class="col-md-6 col-12">
                        <img title="{{ $detail->Title }}" src="{{ getImage($detail->FeaturedImage) }}"
                            alt="{{ $detail->Title }}" class="card-img">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
