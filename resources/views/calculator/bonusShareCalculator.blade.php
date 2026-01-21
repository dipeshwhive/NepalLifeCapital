@extends('layouts.master')
@section('content')
    <main>

        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i> Bonus
                        Share
                        Calculator
                    </p>
                    <h1 class="text-light fs-2 text-center mb-5">
                        Bonus Share Calculator
                    </h1>
                </div>

            </div>
        </section>


        <section class="container p-4 mt-5 mb-5 col-md-9 col-12 shadow rounded-2">

            <h2 class="txt-color fs-4 mb-2">Explore our Bonus Share Calculator</h2>
            <p class="text-black-50 font">
                Stay ahead of the curve and make informed decisions with our curated content, designed to empower you on
                your investment
                journey.
            </p>
            <div class="row">
                <div class="col-md-6 col-12 font mb-3">
                    <form class="border rounded-2 p-3" id="formSubmit">
                        <div>
                            <label for="" class="mt-2 mb-1">Previously held unit</label>
                            <input type="text" placeholder="Enter units" class="form-control font-md tab-rad"
                                style="background-color: #F5F6F6;" id="previouslyHeldUnit" />
                        </div>
                        <div>
                            <label for="" class="mt-2 mb-1">Bonus%</label>
                            <input type="text" placeholder="Enter percentage" class="form-control font-md tab-rad"
                                style="background-color: #F5F6F6;" id="bonusPercentage" />
                        </div>
                        <div>
                            <label for="" class="mt-2 mb-1">Market Price Before (Book close)</label>
                            <input type="text" placeholder="Enter" class="form-control font-md tab-rad"
                                style="background-color: #F5F6F6;" id="bookClostDatePrice" />
                        </div>
                        <div class="mt-3">
                            <button class="button-sm" type="submit">Calculate<span class="circle-sm"><span
                                        class="arrow-sm"></span></span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <div class="card border w-100 p-3">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="card-title fs-5 font" style="color: #064D86;">Details
                                </h3>
                                <div class="row">
                                    <div class="col-8">
                                        <p class="text-black-50 font-md mt-2">
                                            Previously held unit </p>
                                        <p class="text-black-50 font-md mt-2">
                                            Bonus Precentage </p>
                                        <p class="text-black-50 font-md mt-2">
                                            Market Price Before </p>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-black-50 font-md mt-2" id="oldUnit">
                                            XXX </p>
                                        <p class="text-black-50 font-md mt-2" id="bonusPercent">
                                            XXX </p>
                                        <p class="text-black-50 font-md mt-2" id="bookCloseRate">
                                            XXX </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <hr class="mt-3">
                                    <div class="col-8">
                                        <p class="text-black-50 font mt-1 mb-1">
                                            No. of share after bonus </p>
                                        <p class="text-black font" id="newShare">
                                            XXX</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-black font mt-1 mb-1">
                                            Bonus Adjusted Price</p>
                                        <p class="text-black font" id="adjustedPrice">
                                            XXX</p>
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
@section('script')
    <script>
        $(function() {

            $('#formSubmit').on('submit', function(e) {
                e.preventDefault();

                var previouslyHeldUnit = parseInt($("#previouslyHeldUnit").val());
                var bonusPercentage = parseInt($("#bonusPercentage").val());
                var bookClostDatePrice = parseInt($("#bookClostDatePrice").val());

                var noOfShareAfterBonus = previouslyHeldUnit + bonusPercentage;

                var adjustedPrice = parseFloat((previouslyHeldUnit * bookClostDatePrice) /
                    noOfShareAfterBonus).toFixed(2);

                $("#oldUnit").text(previouslyHeldUnit)
                $("#bonusPercent").text(bonusPercentage + '%')
                $("#bookCloseRate").text('Rs. ' + bookClostDatePrice)
                $("#newShare").text(noOfShareAfterBonus)
                $("#adjustedPrice").text('Rs. ' + adjustedPrice)

                $("#previouslyHeldUnit").val("")
                $("#bonusPercentage").val("")
                $("#bookClostDatePrice").val("")

            })
        })
    </script>
@endsection
