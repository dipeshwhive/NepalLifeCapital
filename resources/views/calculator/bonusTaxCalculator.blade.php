@extends('layouts.master')
@section('content')
    <main>

        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i>Bonus
                        Tax Calculator
                    </p>
                    <h1 class="text-light fs-1 text-center mb-5">
                        Bonus Tax Calculator </h1>
                </div>

            </div>
        </section>

        <section class="container-fluid mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-md-9 col-11 shadow rounded-2 p-5">
                    <h2 class="txt-color fs-4">Explore our Systematic
                        Investment Plan (SIP Calculator)</h2>
                    <div>
                        <p class="font-sm text-black-50">Stay ahead of the curve
                            and
                            make informed decisions with our curated content,
                            designed to empower you on your investment journey.
                        </p>
                    </div>
                    <h2 class="txt-color fs-4 mt-5 ">Needs to researched</h2>
                </div>
            </div>
        </section>
    </main>
@endsection
