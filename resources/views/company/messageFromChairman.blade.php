@extends('layouts.master')
@section('content')
    <main>

        <section class="container-fluid text-white py-2 px-5 d-none d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">

                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i
                            class="bi bi-dot"></i>Chairman's Message
                    </p>
                    <h1 class="text-light fs-2 text-center mb-5">
                        Chairman's Message </h1>
                </div>
            </div>
        </section>
        @if ($message)
            <section class="container col-md-8 col-11 shadow rounded-2 mt-5">
                <div class="container p-3">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <img title="{{ $message->Title }}" src="{{ getImage($message->FeaturedImage) }}"
                                alt="{{ $message->Title }}" class="card-img">
                        </div>
                        <div class="col-md-8 col-auto mt-3">
                                <p class="d-flex justify-content-start txt-color align-content-center font-lg mb-3"><b>
                                    {{ $message->Title }}</b></p>
                                <p class=" mb-3 font-lg">
                                {!! $message->Description !!}</p>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </main>
@endsection
