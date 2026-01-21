@extends('layouts.master')
@section('content')
    <main>

        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i>
                        Privacy Policies
                    </p>
                    <h1 class="text-light text-center mb-5 fs-2">
                        Privacy Policies</h1>
                </div>
            </div>
        </section>

        <section class="container col-md-7 col-11 shadow rounded-2 mb-5 mt-5">
            <div class="container p-3">
                {{-- <p class="d-flex mb-0 justify-content-start align-content-center font"></p> --}}
                <h2 class="d-flex justify-content-center fs-4 txt-color align-content-center mb-3 text center">

                    {{ $privacyAndPolicy->title }}

                </h2>
                <p class="font-sm text-black-50">
                    {!! $privacyAndPolicy->description !!}
                </p>

            </div>
        </section>
    </main>
@endsection
