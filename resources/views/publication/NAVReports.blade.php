@extends('layouts.master')

@php
use App\Models\NavReport;
@endphp

@section('content')
    <main>
        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i>NAV
                        Reports
                    </p>
                    <h1 class="text-light fs-2 text-center mb-5">
                        NAV Reports </h1>
                </div>

            </div>
        </section>

        <section class="container p-4 mt-5 mb-5 col-md-8 col-12 shadow rounded-2">
            <p class=" font text-black-50 mb-0">NAV Reports</p>
            <h2 class="txt-color fs-4 mb-2">View our NAV reports to unlock your Investment Path</h2>
            <div class="row mb-4">
                @foreach ($navReportCategory as $category)
                    <div class="col-md-6 col-auto mb-3  ">
                        <table class="table table-bordered  table-hover font" style="border-radius: 5px;"
                            id="navTable{{ $category->id }}">
                            <p class="font mb-1">
                                {{ $category->Title }}
                            </p>
                            <thead class="table-active">
                                <tr>
                                    <th scope="col">Transaction Amount</th>
                                    <th scope="col">Commission (%)</th>
                                </tr>
                            </thead>
                            @php
                                $navReports = NavReport::where('CategoryId', $category->id)
                                    ->where('IsActive', 1)
                                    ->get();
                            @endphp
                            <tbody class="font text-black-50">
                                @foreach ($navReports as $report)
                                    <tr>
                                        <th scope="row">{{ $report->TransactionAmount }}</th>
                                        <td>{{ $report->Commission }}</td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        $(function() {

            const categories = @json($navReportCategory);

            categories.map((category) => {
                $("#navTable" + category.id).DataTable()
            })


        })
    </script>
@endsection
