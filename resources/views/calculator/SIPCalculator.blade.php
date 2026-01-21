@extends('layouts.master')
@section('content')
    <main>

        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">

                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i> SIP
                        Calculator
                    </p>
                    <h1 class="text-light text-center fs-2 mb-5">
                        SIP Calculator
                    </h1>
                </div>

            </div>
        </section>

        <section class="container p-4 mt-5 mb-5 col-md-9 col-11 shadow rounded-1">
            <h2 class="txt-color fs-4 mb-2">Explore our Systematic Investment Plan (SIP Calculator)</h2>
            <p class="text-black-50 font-md">
                Stay ahead of the curve and make informed decisions with our curated content, designed to empower you on
                your investment
                journey.
            </p>
            <div class="row">
                <div class="col-md-6 font-md mb-2">
                    <form class="border rounded-2 p-3">
                        <div>
                            <label for="" class="mt-2 mb-1">Investment Period</label>
                            <select name="" class="form-select font-md tab-rad" style="background-color: #F5F6F6;"
                                id="investment_period" onchange="SIPCalculator()">
                                <option value="0">Select</option>
                                <option value="1">Annual</option>
                                <option value="2">Semi-Annual</option>
                                <option value="4">Quarterly</option>
                                <option value="12">Monthly</option>
                            </select>
                        </div>
                        <div>
                            <label for="" class="mt-2 mb-1"> Monthly Investment Amount (Rs.)</label>
                            <input type="text" placeholder="Enter" class="form-control font-md tab-rad"
                                style="background-color: #F5F6F6;" id="investment_amount" onchange="SIPCalculator()"
                                value="0" />
                        </div>
                        <div>
                            <label for="" class="mt-2 mb-1"> Expected annual return (%)</label>
                            <input type="text" placeholder="Enter" class="form-control font-md tab-rad"
                                style="background-color: #F5F6F6;" id="expected_annual_return" onchange="SIPCalculator()"
                                value="0" />
                        </div>
                        <div>
                            <label for="" class="mt-2 mb-1">Years (yrs)</label>
                            <input type="text" placeholder="Enter" class="form-control font-md tab-rad"
                                style="background-color: #F5F6F6;" id="years" onchange="SIPCalculator()"
                                value="0" />
                        </div>

                    </form>
                </div>
                <div class="col-md-6 col-auto font-md p-4">
                    <div class="row mb-3">
                        <div class="card mb-2 border">
                            <div class="p-1 mt-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="card-title fs-5 font" style="color: #064D86;">Expected SIP Returns
                                        </h3>
                                        <div class="row">
                                            <div class="col-9">
                                                <p class="text-black-50 font-md mt-2">
                                                    Total Amount Expected
                                                </p>
                                                <p class="text-black-50 font-md mt-2">
                                                    Total Amount Invested </p>
                                                <p class="text-black-50 font-md mt-2">
                                                    Total gain </p>
                                                <p class="text-black-50 font-md mt-2 mb-1">
                                                    Total gain </p>
                                                <p class="text-black font">
                                                    Rs. 1415</p>
                                            </div>
                                            <div class="col-3">
                                                <p class="text-black-50 font-md mt-2" id="totalExpectedAmount">
                                                    Rs. 5955 </p>
                                                <p class="text-black-50 font-md mt-2" id="totalAmountInvested">
                                                    Rs. 4540 </p>
                                                <p class="text-black-50 font-md mt-2" id="totalGain">
                                                    Rs. 1415 </p>
                                                <p class="text-black-50 font-md mt-2 mb-1" id="totalGain">
                                                    Total gain </p>
                                                <p class="text-black font-md">
                                                    Rs. 1415</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="card mb-2 border">

                                <table class="table font  table-hover rounded-2 text-center">
                                    <thead class="card-header font-md">
                                        <tr>
                                            <th scope="col">Periods</th>
                                            <th scope="col">SIP Amount (NPR)</th>
                                            <th scope="col">Returns (NPR)</th>
                                            <th scope="col">Balance (NPR)</th>
                                        </tr>
                                    </thead>
                                    <tbody class="font-md text-black-50">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>5000</td>
                                            <td>62.50</td>
                                            <td>5062.50</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>5000</td>
                                            <td>62.50</td>
                                            <td>5062.50</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>5000</td>
                                            <td>62.50</td>
                                            <td>5062.50</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>5000</td>
                                            <td>62.50</td>
                                            <td>5062.50</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>5000</td>
                                            <td>62.50</td>
                                            <td>5062.50</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>5000</td>
                                            <td>62.50</td>
                                            <td>5062.50</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>5000</td>
                                            <td>62.50</td>
                                            <td>5062.50</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>5000</td>
                                            <td>62.50</td>
                                            <td>5062.50</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>5000</td>
                                            <td>62.50</td>
                                            <td>5062.50</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>5000</td>
                                            <td>62.50</td>
                                            <td>5062.50</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>5000</td>
                                            <td>62.50</td>
                                            <td>5062.50</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>5000</td>
                                            <td>62.50</td>
                                            <td>5062.50</td>
                                        </tr>
                                    </tbody>
                                </table>
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
        function SIPCalculator() {

            var investmentPeriod = parseInt($("#investment_period").val());
            var investmentAmount = parseInt($("#investment_amount").val());
            var expectedAnnualReturn = parseFloat($("#expected_annual_return").val()) /
                100; // convert percentage to decimal
            var years = parseInt($("#years").val());

            var totalMonths = years * 12;
            var totalInvestment = investmentAmount * investmentPeriod * years;
            var monthlyReturn = expectedAnnualReturn / 12;
            var futureValue = 0;

            // Adjust the investment period based on frequency
            var periodsPerYear = 12 / investmentPeriod; // Calculate how many periods per year
            // var totalPeriods = years * periodsPerYear;

            // Calculate periodic investment amount
            var periodicInvestmentAmount = investmentAmount * periodsPerYear;
            // var periodicInvestmentAmount = investmentAmount/(investmentPeriod*totalMonths)

            if (monthlyReturn > 0 && totalMonths > 0) {
                // futureValue = parseInt(investmentAmount * (Math.pow(1 + monthlyReturn, totalMonths - 1))* (1 + monthlyReturn)/ monthlyReturn);

                futureValue = parseInt(periodicInvestmentAmount * (((Math.pow(1 + monthlyReturn, totalMonths)) - 1) /
                    monthlyReturn) * (1 + monthlyReturn));
            }

            var gain = futureValue - totalInvestment

            $("#totalExpectedAmount").text('Rs. ' + futureValue)
            $("#totalAmountInvested").text('Rs. ' + totalInvestment)
            $("#totalGain").text('Rs. ' + gain)

        }
    </script>
@endsection
