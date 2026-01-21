@extends('layouts.master')
@section('content')
    <main>

        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i> Right
                        Share Price
                        Adjustment Calculator
                    </p>
                    <h1 class="text-light fs-2 text-center mb-5">
                        Right Share Price Adjustment Calculator
                    </h1>
                </div>
            </div>
        </section>


        <section class="container p-4 mt-5 mb-5 col-md-9 col-12 shadow rounded-2">

            <h2 class="txt-color fs-4 mb-2">Explore our Right Share Price Adjustment Calculator</h2>
            <p class="text-black-50 font">
                Stay ahead of the curve and make informed decisions with our curated content, designed to empower you on
                your investment
                journey.
            </p>
            <div class="row">
                <div class="col-md-6 col-12 font mb-3">
                    <form class="border rounded-2 p-3" id="rightSharePriceCalculation">
                        <div>
                            <label for="" class="mt-2 mb-1">Old Share Qty</label>
                            <input type="text" placeholder="Enter units" class="form-control font-md tab-rad"
                                style="background-color: #F5F6F6;" id="oldShareQty" />
                        </div>
                        <div>
                            <label for="" class="mt-2 mb-1">Market price before book close</label>
                            <input type="text" placeholder="Enter" class="form-control font-md tab-rad"
                                style="background-color: #F5F6F6;" id="priceBeforeRight" />
                        </div>
                        <div>
                            <label for="" class="mt-2 mb-1">Right%</label>
                            <input type="text" placeholder="Enter" class="form-control font-md tab-rad"
                                style="background-color: #F5F6F6;" id="rightShareAllowed" />
                        </div>
                        <div>
                            <label for="" class="mt-2 mb-1">Par value (rt issued at)</label>
                            <input type="text" placeholder="Enter" class="form-control font-md tab-rad"
                                style="background-color: #F5F6F6;" id="rightSharePrice" />
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
                                            Number of old share qty</p>
                                        <p class="text-black-50 font-md mt-2">
                                            Old price</p>
                                        <p class="text-black-50 font-md mt-2">
                                            Right Share price</p>
                                        <p class="text-black-50 font-md mt-2">
                                            Right share allowed</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-black-50 font-md mt-2" id="oldShareQuantity">
                                            XXX </p>
                                        <p class="text-black-50 font-md mt-2" id="oldPrice">
                                            XXX </p>
                                        <p class="text-black-50 font-md mt-2" id="rgtSharePrice">
                                            XXX </p>
                                        <p class="text-black-50 font-md mt-2" id="rgtShareAllowed">
                                            XXX </p>

                                    </div>
                                </div>
                                <div class="row">
                                    <hr class="mt-3">
                                    <div class="col-8">
                                        <p class="text-black-50 font-md mt-2">
                                            Right share adjustment price</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-black-50 font-md mt-2 mb-1" id="newPriceAfterRight">
                                            XXX </p>
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

            $('#rightSharePriceCalculation').on('submit', function(e) {
                e.preventDefault();

                var oldShareQty = parseInt($("#oldShareQty").val());
                var rightSharePrice = parseInt($("#rightSharePrice").val());
                var oldPrice = parseInt($("#priceBeforeRight").val());
                var rightShareAllowed = $("#rightShareAllowed").val();

                var newRightShareAllowed = 100 * rightShareAllowed / 100;

                var newPriceAfterRight = 0;

                var newPriceAfterRight = parseFloat(((oldShareQty * oldPrice) + (rightSharePrice *
                    newRightShareAllowed)) / (newRightShareAllowed + oldShareQty)).toFixed(2);

                console.log(newPriceAfterRight)

                $("#oldShareQuantity").text(oldShareQty)
                $("#oldPrice").text('Rs. ' + oldPrice)
                $("#rgtSharePrice").text('Rs. ' + rightSharePrice)
                $("#rgtShareAllowed").text('Rs. ' + rightShareAllowed)
                $("#newPriceAfterRight").text('Rs. ' + newPriceAfterRight)

                $("#oldShareQty").val("")
                $("#rightSharePrice").val("")
                $("#priceBeforeRight").val("")
                $("#rightShareAllowed").val("")
            })
        })
    </script>
@endsection
