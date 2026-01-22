@extends('layouts.master')
@section('content')
    <main>

        <section class="container-fluid col-md-9 col-12 d-lg-block mt-5">
            <p class="fs-2 text-black-50 mb-0">Unlock Your Investment Potential with Our</p>
        <h1 class="fs-2 txt-color">{{ $service->Title }}</h1>
            <div class="row">
                <div class="col-md-8 col-12">
                    <p class="font-sm text-black-50" style="text-align: justify">{!! $service->Description !!}</p>
                </div>
                @if (!empty($service->FeaturedImage) || (empty($service->SubTitle1) && empty($service->SubTitle2)))
                    <div class="col-md-4 col-auto justify-content-end align-content-end ">
                        <img src="{{ getImage($service->FeaturedImage) }}" width="100%" class="img-fluid me-5">
                    </div>
                @endif
            </div>




            <div class="row mb-5">
                <div class="col-md-6 col-auto mb-3">
                    @if (!empty($service->SubTitle1))
                        <div class="card mt-2 mb-3 bg-light-blue border-0">
                            <div class="card-body ">

                                <h6 class="card-title txt-color font-lg">
                                    {{ $service->SubTitle1 }}
                                </h6>

                                <p class="card-text text-black-50 font-sm mt-2">{!! $service->SubDescription1 !!}
                                </p>
                            </div>
                        </div>
                    @endif
                    @if (!empty($service->SubTitle2))
                        <div class="card mt-3 mb-3 bg-light-pink border-0">
                            <div class="card-body ">
                                <h6 class="card-title text-danger font-lg">{{ $service->SubTitle2 }}
                                </h6>

                                <p class="card-text text-black-50 font-sm mt-2">{!! $service->SubDescription2 !!}
                                </p>
                            </div>
                        </div>
                    @endif

                </div>
                @if (!empty($service->SubTitle1))
                    <div class="col-md-6 col-auto justify-content-end align-content-end ">
                        <img src="{{ asset('assets/img/graphics/photo.png') }}" class width="100%" class="img-fluid me-5">
                    </div>
                @endif

            </div>
        </section>

        @if ($service->Slug == 'Portfolio_Management_Service')
            <section class="container-fluid col-md-9 col-auto">
                <div class="row justify-content-center">
                    <div class="rounded-2 justify-content-center d-flex flex-column align-items-center">
                        <div class="col-md-7 col-auto">
                            <h3 class="text-center txt-color fs-4">
                                Unleash your Investment Potential with our Portfolio Products
                            </h3>
                        </div>
                        <p class="font">
                            Products completely curated to enable you to achieve your goals.
                        </p>
                    </div>
                </div>
            </section>

            <section class="container-fluid col-md-9 mt-4 ">
                <div class="row justify-content-center">
                    @foreach ($portfolioProducts as $product)
                        <div class="row mb-0">
                            <div class="col-12">
                                <div class="card front mt-3 mb-3 border-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-7 col-auto">
                                                <div class="row">
                                                    <div class="col-md-4 col-auto">
                                                        <div class="img-fluid">
                                                            <img title="Product Image"
                                                                src="{{ getImage($product->FeaturedImage) }}"
                                                                alt="Product Image" class="w-75">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-auto">
                                                        <h3 class="fs-4 card-title" style="color: #064D86; ">
                                                            {{ $product->Title }}
                                                        </h3>
                                                        <p class="card-text text-black-50 font mt-2">{!! $product->Description !!}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-auto p-3">
                                                        <p class="text-dark-50 font mb-1 ">
                                                            Target Market
                                                        </p>
                                                        <p class="text-black-50 font mb-3">
                                                            {{ $product->TargetMarket }}
                                                        </p>
                                                        <p class="text-dark-50 font mb-1 ">
                                                            Features </p>
                                                        <p class="text-black-50 font mb-1">
                                                            {!! $product->Features !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-auto ">
                                                <div class="row mb-3">
                                                    <div class="col-md-4 col-auto">
                                                        <p class="text-black-50 font mb-1">
                                                            Category </p>
                                                        <p class="text-dark-50 font mb-1 ">
                                                            {{ $product->Category }}</p>
                                                    </div>
                                                    <div class="col-md-4 col-auto">
                                                        <p class="text-black-50 font mb-1">
                                                            Contract Period </p>
                                                        <p class="text-dark-50 font mb-1 ">
                                                            {{ $product->ContractPeriod }}</p>
                                                    </div>
                                                    <div class="col-md-4 col-auto">
                                                        <p class="text-black-50 font mb-1">
                                                            Lock in Period </p>
                                                        <p class="text-dark-50 font mb-1 ">
                                                            {{ $product->LockPeriod }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-4 col-auto">
                                                        <p class="text-black-50 font mb-1">
                                                            AUM Fees </p>
                                                        <p class="text-dark-50 font mb-1 ">
                                                            {{ $product->AUMFees }}
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4 col-auto">
                                                        <p class="text-black-50 font mb-1">
                                                            Hurdle Rate </p>
                                                        <p class="text-dark-50 font mb-1 ">
                                                            {{ $product->HurdleRate }}
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4 col-auto">
                                                        <p class="text-black-50 font mb-1">
                                                            Expected Return </p>
                                                        <p class="text-dark-50 font mb-1 ">
                                                            {{ $product->ExpectedReturn }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-auto">
                                                        <p class="text-black-50 font mb-1">
                                                            Minimum Portfolio </p>
                                                        <p class="text-dark-50 font mb-1 ">
                                                            {{ $product->MinimumPortfolio }}
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4 col-auto">
                                                        <p class="text-black-50 font mb-1">
                                                            Performance Fee </p>
                                                        <p class="text-dark-50 font mb-1 ">
                                                            {{ $product->PerformanceFee }}
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4 col-auto mb-0">
                                                        <p class="text-black-50 font mb-1">
                                                            Exit Load </p>
                                                        <p class="text-dark-50 font mb-1 ">
                                                            {{ $product->ExitLoad }} </p>
                                                    </div>
                                                    <div class="mb-5">
                                                        <a title="Enquire Now" href="{{ route('contact') }}"><button
                                                                class="button-md">
                                                                Enquire Now<span class="circle-md"><span
                                                                        class="arrow-md"></span></span>
                                                            </button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </section>
        @endif

        @if ($service->Slug == 'Depository-Participant-Services')
            <section class="container-fluid mt-5 mb-3">
                <div class="row justify-content-center mt-5 mb-3">
                    <div class="col-md-9 col-auto p-4 rounded-2">
                        <div class="text-center">
                            <p class="text-black-50 fw-bold">Functions of a</p>
                            <h3 class="txt-color fs-4">Depository Participant </h3>
                        </div>
                        <div class="row mb-2">
                            @foreach ($DPFunctions as $function)
                                <div class="col-md-6 col-auto mb-3">
                                    <div class="card front border-primary">
                                        <div class="card-body">
                                            <h4 class="fs-5 card-title" style="color: #064D86 ;">{{ $loop->iteration }}
                                            </h4>
                                            <p class="card-text text-black-50 font mt-2">{{ $function->Title }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif



    </main>
@endsection
