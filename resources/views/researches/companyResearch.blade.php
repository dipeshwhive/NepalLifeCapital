@extends('layouts.master')
@section('content')
    <main>
        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i>Company Research
                    </p>
                    <h1 class="fs-2 text-light text-center mb-5">
                        Company Research </h1>
                </div>
            </div>
        </section>

        <section class="container col-10 mt-5 rounded-2">
            <div class="row">
                @foreach ($companyResearches as $research)
                    <div class="col-md-3 col-12 mb-3">
                        <div class="card p-3 border">
                            <div class="">
                                <h2><i class="bi bi-filter-square text-black-50"></i></h2>
                            </div>
                            <a title="{{ $research->Title }}" href="{{ getImage($research->File) }}"
                                target="_blank" class="font txt-color mb-0 mt-2">
                                {{ $research->Title }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
