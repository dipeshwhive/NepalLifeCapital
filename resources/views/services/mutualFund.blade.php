@extends('layouts.master')
@section('content')
    @extends('layouts.master')
@section('content')
    <main>

        <section class="container-fluid col-md-9 col-12 text-white d-lg-block mt-5">
            {{-- <h5 class="text-black-50">Unlock Your Investment Potential with Our</h5> --}}
            <h1 class="txt-color fs-2">Mutual Fund Number First [1]</h1>
            <div class="row">
                <div class="col-md-8 col-12">
                    <p class="font-sm text-black-50">Mutual Fund is Something somethingMutual Fund is Something
                        somethingMutual
                        Fund is Something somethingMutual Fund is Something somethingMutual Fund is Something
                        somethingMutual
                        Fund is Something somethingMutual Fund is Something somethingMutual Fund is Something
                        somethingMutual
                        Fund is Something somethingMutual Fund is Something somethingMutual Fund is Something something</p>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-6 col-auto mb-3">
                    <div class="card mt-2 mb-3 bg-light-blue border-0">
                        <div class="card-body ">

                            <h2 class="card-title txt-color font-lg">
                                Mutual Fund 01 [Scheme I] </h2>

                            <p class="card-text text-black-50 font-sm mt-2">
                                Let the experts handle your investments. Our portfolio manager makes buy-sell decisions to
                                meet
                                your objectives within agreed limits. Ideal for investors seeking professional management in
                                the
                                capital market.
                            </p>
                        </div>
                    </div>
                    <div class="card mt-3 mb-3 bg-light-pink border-0">
                        <div class="card-body ">
                            <h2 class="card-title text-danger font-lg">Mutual Fund 02 [Scheme II]
                            </h2>

                            <p class="card-text text-black-50 font-sm mt-2">We follow your lead. We suggest, notify, and
                                seek
                                approval before executing transactions. For clients preferring greater involvement in their
                                investments, our non-discretionary service offers personalized advice and discussions on
                                investment matters.
                            </p>
                        </div>
                    </div>

                    <div class="card mt-2 mb-3 bg-light-blue border-0">
                        <div class="card-body ">

                            <h2 class="card-title txt-color font-lg">
                                Mutual Fund 03 [Scheme III] </h2>

                            <p class="card-text text-black-50 font-sm mt-2">
                                Let the experts handle your investments. Our portfolio manager makes buy-sell decisions to
                                meet
                                your objectives within agreed limits. Ideal for investors seeking professional management in
                                the
                                capital market.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-auto ">
                    <img title="Graphics" alt="Graphics" src="{{ asset('assets/img/graphics/photo.png') }}"
                        class="img-fluid w-100">
                </div>
            </div>
        </section>


        {{-- @if ($service->slug == 'Portfolio_Management_Service') --}}
        <section class="container-fluid col-md-9 col-auto">
            <div class="row justify-content-center mt-5">
                <div class=" rounded-2 justify-content-center d-flex flex-column align-items-center">
                    <div class="col-md-7 col-auto">
                        <p class="text-center fw-bold mb-2 fs-5 text-black-50">
                            Unleash your Investment Potential with our </p>
                        <h2 class="text-center fs-4 txt-color">Mutual Funds</h2>
                    </div>
                    <p class="font">
                        Products completely curated to enable you to achieve your goals.
                    </p>

                </div>
            </div>
        </section>

        <section class="container col-md-7 col-11 shadow rounded-2 mb-5 mt-5">
            <div class="container p-3">
                <p class="d-flex mb-0 justify-content-start align-content-center font">Explore Mutual Funds</p>
                <h2 class="txt-color fs-4  mb-3 text center">
                    Mutual Fund 01 [Scheme I]
                </h2>
                <p class="font-sm text-black-50">
                    Explore the vibrant landscape of Nepal's capital market through our comprehensive company reports.
                    As of
                    January 2024, the market boasts an impressive 82 registered stock brokers, signaling an era of
                    unprecedented
                    opportunities for investors. Our reports delve into the evolving dynamics of NEPSE, providing
                    valuable
                    insights into the market's expansion and potential.
                </p>
                <p class="font-sm text-black-50">
                    Discover the role of brokers as trusted guides, facilitating seamless transactions and illuminating
                    your
                    investment path with invaluable expertise. Dive deeper into the costs associated with investing,
                    including
                    broker commissions, SEBON fees, DP charges, and capital gain taxes. Our reports offer clarity on
                    these
                    expenses, empowering you to make informed decisions aligned with your financial objectives.
                </p>
                <p class="font-sm text-black-50">
                    Beyond numbers, we explore the multifaceted roles of brokers in your investment journey. From
                    providing
                    market access and conducting research to offering tailored advice and portfolio management services,
                    brokers
                    serve as invaluable partners in your quest for financial success. With transparency, trust, and
                    expert
                    guidance, our company reports equip you to navigate the complexities of the Nepalese capital market
                    with
                    confidence.
                </p>
                <p class="font-sm text-black-50">
                    Embrace the potential of Nepal's capital market with our insightful company reports. With the right
                    knowledge and support, your investment journey promises to be both enriching and rewarding. </p>
                <div class="card">
                    <table class="table font table-hover rounded-2">
                        <thead class="table- card-header">
                            <tr>
                                <th scope="col-md-6">
                                    Particulars</th>
                                <th scope="col-md-6">Details</th>
                            </tr>
                        </thead>
                        <tbody class="font text-black-50">
                            {{-- @foreach ($companyResearchTable as $data) --}}
                            <tr>
                                <th scope="row">Nature of the Scheme </th>
                                <td>Close-end Scheme</td>
                            </tr>
                            <tr>
                                <th scope="row">Fund Name</th>
                                <td>Close-end Scheme</td>
                            </tr>
                            <tr>
                                <th scope="row">Scheme Name</th>
                                <td>Close-end Scheme</td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section class="container-fluid position-relative mt-3 py-5 m-0 p-0 py-0">
            <img title="Graphics" src="{{ asset('assets/img/graphics/section.jpg') }}" width="100%" alt="Graphics"
                class="img-fluid mt-5">
            <div class="overlay mt-4 position-absolute text-center">
                <h2 class="text-white fs-4">“ Shape Your Financial Future
                    with Us “</h2>
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

        <section class="container-fluid mt-4">
            <div class="row justify-content-center">
                <div class="col-md-9 col-auto">
                    <div class="row">
                        <div class="col-lg-6 col-auto p-3">
                            <div class="card topbar text-center mt-2 mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="mt-4 text-light fs-4  mb-3">Open a free Demat
                                                account</h2>
                                            <div>
                                                <p class="font-sm text-light mb-4">Empower Your Investments:
                                                    Free
                                                    Demat Account Enrollment with Expert Guidance
                                                    and Two Years of Renewal Support</p>
                                                <p> </p>
                                            </div>
                                            <div>
                                                <button class="button-md mb-2">
                                                    Get your Demat account today<span class="circle-md"><span
                                                            class="arrow-md"></span></span>
                                                </button>
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
                                            <h2 class="fs-4 mt-3 text-danger ">Explore our Portfolio
                                                Management
                                                Services</h2>
                                            <div>
                                                <p class="font-sm text-danger">Empower Your
                                                    Investments:
                                                    Free
                                                    Demat
                                                    Account Enrollment with Expert Guidance and Two
                                                    Years of
                                                    Renewal
                                                    Support</p>
                                            </div>
                                            <div>
                                                <button class="button-md-red ">
                                                    Learn More<span class="circle-md-red"><span
                                                            class="arrow-md-red"></span></span>
                                                </button>
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
    </main>
@endsection
