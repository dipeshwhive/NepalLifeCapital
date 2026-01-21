@extends('layouts.master')
@section('content')
    <main>

        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i>
                        Mutual
                        Fund Reports
                    </p>
                    <h1 class="text-light fs-2 text-center mb-5">
                        Mutual Fund Reports
                    </h1>
                </div>

            </div>
        </section>

        <section class="container p-4 mt-5 mb-5 col-md-8 col-auto shadow rounded-2">
            <p class="text-black-50 font mb-2">
                Mutual Fund Reports
            </p>
            <h2 class="txt-color fs-4 mb-2">View our Mutual Fund reports to unlock your Investment Path</h2>
            <div class="card border w-100">
                <table class="table  table-hover font" id="mutualFundReports">
                    <thead class="font">
                        <tr class="table-active">
                            <th scope="col">Document Name</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody class="font text-black-50">
                        @foreach ($mutualFundReports as $mutualFund)
                            <tr>
                                <th scope="row">{{ $mutualFund->DocumentName }}</th>
                                <td>{{ $mutualFund->CreatedDate }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        $(function() {
            $("#mutualFundReports").DataTable()
        })
    </script>
@endsection
