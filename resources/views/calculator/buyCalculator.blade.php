@extends('layouts.master')
@section('content')
    <main>

        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i> Buy
                        Calculator
                    </p>
                    <h1 class="text-light fs-2 text-center mb-5">
                        Buy Calculator
                    </h1>
                </div>

            </div>
        </section>


        <section class="container p-4 mt-5 mb-5 col-md-9 col-11 shadow rounded-2">

            <h2 class="txt-color fs-4 mb-2">Explore our Buy Calculator</h2>
            <p class="text-black-50 font">
                Stay ahead of the curve and make informed decisions with our curated content, designed to empower you on
                your investment
                journey.
            </p>
            <div class="row">
                <div class="col-md-6 col-12 font mb-3">
                    <form class="border rounded-2 p-3" id="formSubmit">
                        <div>
                            <label for="" class="mt-2 mb-1">Units</label>
                            <input type="text" placeholder="Enter units" class="form-control font-md tab-rad"
                                style="background-color: #F5F6F6;" id="unit" />
                        </div>
                        <div>
                            <label for="" class="mt-2 mb-1">Buy Amount</label>
                            <input type="text" placeholder="Enter" class="form-control font-md tab-rad"
                                style="background-color: #F5F6F6;" id="amount" />
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
                                <h3 class="fs-5 card-title font" style="color: #064D86;">Details
                                </h3>
                                <div class="row">
                                    <div class="col-8">
                                        <p class="text-black-50 font-md mt-2">
                                            Number of Units </p>
                                        <p class="text-black-50 font-md mt-2">
                                            Buy Price </p>
                                        <p class="text-black-50 font-md mt-2">
                                            Price Before Commision </p>
                                        <p class="text-black-50 font-md mt-2">
                                            SEBON Charge </p>
                                        <p class="text-black-50 font-md mt-2">
                                            Broker Commision </p>
                                        <p class="text-black-50 font-md mt-2 mb-1">
                                            DP Charge </p>

                                </div>
                                <div class="col-4">
                                    <p class="text-black-50 font-md mt-2" id="boughtUnit">
                                        XXX </p>
                                    <p class="text-black-50 font-md mt-2" id="boughtPrice">
                                        XXX </p>
                                    <p class="text-black-50 font-md mt-2" id="priceBeforeCommission">
                                        XXX </p>
                                    <p class="text-black-50 font-md mt-2 mb-1" id="SEBONCharge">
                                        XXX </p>
                                    <p class="text-black-50 font-md mt-2 mb-1" id="brokerCommission">
                                        XXX </p>
                                    <p class="text-black-50 font-md mt-2 mb-1" id="DMATCharge">
                                        XXX </p>
                                </div>
                            </div>
                            <div class="row">
                                <hr class="mt-3">
                                <div class="col-8">
                                    <p class="text-black-50 font mt-1 mb-1">
                                        Total payable </p>
                                    <p class="text-black font" id="totalPayable">
                                        XXX</p>
                                </div>
                                <div class="col-4">
                                    <p class="text-black font mt-1 mb-1">
                                        WACC</p>
                                    <p class="text-black font" id="WACC">
                                        XXX</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('script')
    <script>
        $(function() {

            $('#formSubmit').on('submit', function(e) {
                e.preventDefault();

                var unit = parseInt($("#unit").val());
                var amount = parseInt($("#amount").val());

                var transactionAmount = parseInt(unit * amount);


                var brokerCommission = 0;

                if (transactionAmount > parseInt(10000000)) {
                    var brokerCommission = parseFloat((transactionAmount * 0.27 / 100)).toFixed(2);
                }

                if (parseInt(2000000) < transactionAmount && transactionAmount <= parseInt(10000000)) {
                    var brokerCommission = parseFloat((transactionAmount * 0.30 / 100)).toFixed(2);
                }

                if (parseInt(500000) < transactionAmount && transactionAmount <= parseInt(2000000)) {
                    var brokerCommission = parseFloat((transactionAmount * 0.34 / 100)).toFixed(2);
                }
                if (parseInt(50000) < transactionAmount && transactionAmount <= parseInt(500000)) {
                    var brokerCommission = parseFloat((transactionAmount * 0.37 / 100)).toFixed(2);
                }

                if (transactionAmount <= 50000) {
                    var brokerCommission = parseFloat((transactionAmount * 0.40 / 100)).toFixed(2);
                }

                if (transactionAmount <= 2500) {
                    var brokerCommission = 10;
                }



                var sebonCommission = parseFloat((transactionAmount * 0.015 / 100)).toFixed(2);

                var DPFee = 25;

                var totalPayable = (parseFloat(transactionAmount) + parseFloat(brokerCommission) +
                    parseFloat(sebonCommission) + parseFloat(DPFee));


                var WACC = parseFloat((totalPayable / unit)).toFixed(2);

                $("#boughtUnit").text(unit)
                $("#boughtPrice").text('Rs. ' + amount)
                $("#priceBeforeCommission").text('Rs. ' + transactionAmount)
                $("#SEBONCharge").text('Rs. ' + sebonCommission)
                $("#brokerCommission").text('Rs. ' + brokerCommission)
                $("#DMATCharge").text('Rs. ' + DPFee)
                $("#totalPayable").text('Rs. ' + totalPayable)
                $("#WACC").text('Rs. ' + WACC)

                $("#unit").val("")
                $("#amount").val("")

            })
        })
    </script>

@endsection
