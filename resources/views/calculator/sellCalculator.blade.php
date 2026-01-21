@extends('layouts.master')
@section('content')
    <main>
        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i> Sell
                        Calculator
                    </p>
                    <h1 class="fs-2 text-light text-center mb-5">
                        Sell Calculator
                    </h1>
                </div>

            </div>
        </section>

        <section class="container p-4 mt-5 mb-5 col-md-9 col-11 shadow rounded-2">

            <h2 class="txt-color fs-4 mb-2">Explore our Secondary Sell Calculator</h2>
            <p class="text-black-50 font">
                Stay ahead of the curve and make informed decisions with our curated content, designed to empower you on
                your investment
                journey.
            </p>
            <div class="row">
                <div class="col-md-6 col-12 font mb-3">
                    <form class="border rounded-2 p-3" id="sellCalculator">

                        <div>
                            <label for="" class="mt-2 mb-1">Units</label>
                            <input type="text" placeholder="Enter units" class="form-control font-md tab-rad"
                                style="background-color: #F5F6F6;" id="sellingUnit" />
                        </div>
                        <div>
                            <label for="" class="mt-2 mb-1">Buy Amount*</label>
                            <input type="text" placeholder="Enter" class="form-control font-md tab-rad"
                                style="background-color: #F5F6F6;" id="boughtAmount" />
                        </div>
                        <div>
                            <label for="" class="mt-2 mb-1">Enter Sell Amount</label>
                            <input type="text" placeholder="Enter" class="form-control font-md tab-rad"
                                style="background-color: #F5F6F6;" id="sellingAmount" />
                        </div>
                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="7.5" />
                            <label class="form-check-label" for="inlineRadio1">7.5% Capital Gain</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="5" />
                            <label class="form-check-label" for="inlineRadio2">5% Capital Gain</label>
                        </div>
                        <div class="mt-1">
                            <button class="button-sm">Calculate<span class="circle-sm"><span class="arrow-sm"></span></span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card border p-3">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="card-title fs-4 font" style="color: #064D86;">Details
                                </h3>
                                <div class="row">
                                    <div class="col-8">
                                        <p class="text-black-50 font-md mt-2">
                                            Number of Units </p>
                                        <p class="text-black-50 font-md mt-2">
                                            Buy Price </p>
                                        <p class="text-black-50 font-md mt-2">
                                            Sell Price </p>
                                        <p class="text-black-50 font-md mt-2">
                                            SEBON Charge </p>
                                        <p class="text-black-50 font-md mt-2">
                                            Broker Commision </p>
                                        <p class="text-black-50 font-md mt-2">
                                            DP Charge </p>
                                        <p class="text-black-50 font-md mt-2">
                                            Capital Gain </p>

                                    </div>
                                    <div class="col-4 text-end">
                                        <p class="text-black-50 font-md mt-2" id="soldUnit">
                                            XXX </p>
                                        <p class="text-black-50 font-md mt-2" id="boughtPrice">
                                            XXX </p>
                                        <p class="text-black-50 font-md mt-2" id="soldPrice">
                                            XXX </p>
                                        <p class="text-black-50 font-md mt-2" id="SEBONCharge">
                                            XXX </p>
                                        <p class="text-black-50 font-md mt-2" id="brokerCommission">
                                            XXX </p>
                                        <p class="text-black-50 font-md mt-2" id="DMATCharge">
                                            XXX </p>
                                        <p class="text-black-50 font-md mt-2" id="capitalGain">
                                            XXX </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <hr class="mt-3">
                                    <div class="col-7">
                                        <p class="text-black-50 font mt-1 mb-1">
                                            Amount Receivable </p>
                                        <p class="text-black font" id="totalReceivable">
                                            XXXXX</p>
                                    </div>
                                    <div class="col-5 text-end">
                                        <p class="text-danger font mt-1 mb-1">
                                            Total Profit/Loss</p>
                                        <p class="text-black font" id="totalProfitorLoss">
                                            XXXXX</p>
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
        function checkCheckedRadioButton(groupName) {
            return $("input[name='" + groupName + "']:checked").val();
        }


        $(function() {
            $('#sellCalculator').on('submit', function(e) {
                e.preventDefault();

                var sellingUnit = parseInt($("#sellingUnit").val());
                var boughtAmount = parseInt($("#boughtAmount").val());
                var sellingAmount = parseInt($("#sellingAmount").val());

                var totalSellingAmount = parseInt(sellingUnit * sellingAmount);
                console.log(totalSellingAmount)


                var sellingBrokerCommission = 0;

                if (totalSellingAmount > parseInt(10000000)) {
                    var sellingBrokerCommission = parseFloat(totalSellingAmount * 0.27 / 100).toFixed(2);
                }

                if (parseInt(2000000) < totalSellingAmount && totalSellingAmount <= parseInt(10000000)) {
                    var sellingBrokerCommission = parseFloat(totalSellingAmount * 0.30 / 100).toFixed(2);
                }


                if (parseInt(500000) < totalSellingAmount && totalSellingAmount <= parseInt(2000000)) {
                    var sellingBrokerCommission = parseFloat(totalSellingAmount * 0.34 / 100).toFixed(2);
                }

                if (parseInt(50000) < totalSellingAmount && totalSellingAmount <= parseInt(500000)) {
                    var sellingBrokerCommission = parseFloat(totalSellingAmount * 0.37 / 100).toFixed(2);
                }

                if (totalSellingAmount <= 50000) {
                    var sellingBrokerCommission = parseFloat(totalSellingAmount * 0.40 / 100).toFixed(2);
                }
                if (totalSellingAmount <= 2500) {
                    var sellingBrokerCommission = 10;
                }

                console.log(sellingBrokerCommission)

                var sebonCommissionForSelling = parseFloat(totalSellingAmount * 0.015 / 100).toFixed(2);

                //broker commission during buying
                var totalBuyingAmount = boughtAmount * sellingUnit;


                var buyingBrokerCommission = 0;

                if (totalBuyingAmount > parseInt(10000000)) {
                    var buyingBrokerCommission = parseFloat((totalBuyingAmount * 0.27 / 100)).toFixed(2);
                }

                if (parseInt(2000000) < totalBuyingAmount && totalBuyingAmount <= parseInt(10000000)) {
                    var buyingBrokerCommission = parseFloat((totalBuyingAmount * 0.30 / 100)).toFixed(2);
                }

                if (parseInt(500000) < totalBuyingAmount && totalBuyingAmount <= parseInt(2000000)) {
                    var buyingBrokerCommission = parseFloat((totalBuyingAmount * 0.34 / 100)).toFixed(2);
                }
                if (parseInt(50000) < totalBuyingAmount && totalBuyingAmount <= parseInt(500000)) {
                    var buyingBrokerCommission = parseFloat((totalBuyingAmount * 0.37 / 100)).toFixed(2);
                }

                if (totalBuyingAmount <= 50000) {
                    var buyingBrokerCommission = parseFloat((totalBuyingAmount * 0.40 / 100)).toFixed(2);
                }

                if (totalBuyingAmount <= 2500) {
                    var buyingBrokerCommission = 10;
                }

                var sebonCommissionForBuying = parseFloat(totalBuyingAmount * 0.015 / 100).toFixed(2);

                var DPFee = 25;

                var profitOrLoss = sellingAmount - boughtAmount;

                var totalProfit = profitOrLoss * sellingUnit;

                var capitalGainPercent = checkCheckedRadioButton('inlineRadioOptions');


                var totalPayable = (parseFloat(totalBuyingAmount) + parseFloat(buyingBrokerCommission) +
                    parseFloat(sebonCommissionForBuying) + parseFloat(DPFee));

                var buyingExp = totalPayable - totalBuyingAmount;


                var sellingExp = parseFloat(sebonCommissionForSelling) + parseFloat(DPFee) + parseFloat(
                    sellingBrokerCommission);

                var CapitalGainApplicableAmount = parseFloat(totalProfit) - parseFloat(buyingExp) -
                    parseFloat(sellingExp);

                var capitalGain = 0;

                var totalReceivable = 0;


                if (profitOrLoss > 0) {
                    capitalGain = parseFloat(CapitalGainApplicableAmount * capitalGainPercent / 100)
                        .toFixed(2);

                    var totalReceivable = parseFloat(totalSellingAmount - sellingBrokerCommission -
                        sebonCommissionForSelling - DPFee - capitalGain).toFixed(2);

                }

                if (profitOrLoss < 0) {
                    var totalReceivable = parseFloat(totalSellingAmount - sellingBrokerCommission -
                        sebonCommissionForSelling - DPFee - capitalGain).toFixed(2);
                }
                var totalProfitorLoss = parseFloat(totalSellingAmount - totalPayable - capitalGain - DPFee -
                    sellingBrokerCommission - sebonCommissionForSelling).toFixed(2);

                $("#soldUnit").text(sellingUnit)
                $("#boughtPrice").text('Rs. ' + boughtAmount)
                $("#soldPrice").text('Rs. ' + sellingAmount)
                $("#SEBONCharge").text('Rs. ' + sebonCommissionForSelling)
                $("#brokerCommission").text('Rs. ' + sellingBrokerCommission)
                $("#DMATCharge").text('Rs. ' + DPFee)
                $("#totalReceivable").text('Rs. ' + totalReceivable)
                $("#capitalGain").text('Rs. ' + capitalGain)
                $("#totalProfitorLoss").text('Rs. ' + totalProfitorLoss)


                $("#sellingUnit").val("")
                $("#boughtAmount").val("")
                $("#sellingAmount").val("")
                $("#inlineRadio1").prop('checked', false)
                $("#inlineRadio2").prop('checked', false)


            })
        })
    </script>
@endsection
