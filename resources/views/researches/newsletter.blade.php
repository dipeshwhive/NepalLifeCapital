@extends('layouts.master')
@php
    use App\Models\Newsletter;
@endphp
@section('content')
    <main>
        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i>
                        Newsletter
                    </p>
                    <h1 class="fs-2 text-light text-center mb-5">
                        Newsletter
                    </h1>
                </div>
            </div>
        </section>

        <section class="container-fluid col-md-6 col-11 shadow card border-0 mt-5">
            <div class="row justify-content-center mt-4">
                <div class="rounded-2">
                    <div class="row">
                        <div class="container-fluid col-md-12">
                            <div class="row mt-3 justify-content-center mb-4">
                                <div class="col-md-10">
                                    <h2 class="txt-color mb-2 fs-4">Explore our Newsletter</h2>
                                    <p class="text-black-50 font-sm mb-3">
                                        Stay ahead of the curve and make informed decisions with our curated content,
                                        designed
                                        to
                                        empower
                                        you on your investment journey. </p>

                                    @foreach ($years as $year)
                                        <div class="card mb-3 border-1">
                                            <div class="row mb-0">
                                                <div class="col-10">
                                                    <div class="card-body">
                                                        <p class="font-lg txt-color" style="margin-bottom:0 !important;">
                                                            {{ $year->year }}
                                                        </p>
                                                        {{-- <p class="font mb-0">Year
                                                        {{ date('Y', strtotime($newsletter->created_date)) }}
                                                    </p> --}}
                                                    </div>
                                                </div>
                                                <div class="col-2 d-flex justify-content-end align-items-center mt-1 font-xl dropdownToggle"
                                                    data-year="{{ $year->id }}">
                                                    <i class="bi bi-arrow-right-short news" style="margin-right: 10px"></i>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-11 px-3">
                                                    @php
                                                        $months = Newsletter::where('year_id', $year->id)
    ->where('is_active', 1)
    ->selectRaw('MAX(id) as id')
    ->groupBy('month')
    ->orderByDesc('id')
    ->pluck('id');

$months = Newsletter::whereIn('id', $months)->get();

                                                    @endphp
                                                    <div class="newsContent{{ $year->id }} " style="display: none;">
                                                        @foreach ($months as $month)
                                                            <p class="font-md bold px-3 text-dark" style="">
                                                                {{ $month->month }}</p>
                                                            @php
                                                                $data = Newsletter::where('month', $month->month)
                                                                    ->where('year_id', $month->year_id)
                                                                    ->where('is_active', 1)
                                                                    ->get();
                                                            @endphp
                                                            @foreach ($data as $info)
                                                                <ul style="list-style: none" class="mt-2">
                                                                    <a title="{{ $info->title }}"
                                                                        href="{{ getNewsletter('assets/pdf/',$info->file) }}"
                                                                        target="_blank"
                                                                        class="news_link font-md">{{ $info->title }}</a>
                                                                </ul>
                                                            @endforeach
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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
        document.querySelectorAll('.dropdownToggle').forEach(function(toggle) {
            toggle.addEventListener('click', function() {
                var yearId = this.getAttribute('data-year');
                var arrowIcon = this.querySelector('.news');
                arrowIcon.classList.toggle('bi-arrow-right-short');
                arrowIcon.classList.toggle('bi-arrow-down-short');

                var content = document.querySelector('.newsContent' + yearId);
                if (content) {
                    content.style.display = content.style.display === 'none' ? 'block' : 'none';
                }
            });
        });
    </script>
@endsection
