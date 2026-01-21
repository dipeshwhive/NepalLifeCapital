@extends('layouts.master')
@section('content')
    <main>
        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">

                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i
                            class="bi bi-dot"></i>Notices
                    </p>
                    <h1 class="text-light fs-2 text-center mb-5">
                        Notices </h1>
                </div>
            </div>
        </section>
        {{--
    <div class="container-fluid mb-5">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-10 col-12 rounded-2 d-flex align-items-center p-0">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            @foreach ($notices as $notice)
                                <div class="row border-bottom mb-3" id="noticeContainer">
                                    <div class="col-md-2">
                                        <p class="card-text text-black-50 font">
                                            {{ $notice->CreatedDate }}
                                        </p>
                                    </div>
                                    <div class="col-md-10">
                                        <h6 class="font" style="color: #000;">{{ $notice->title }}
                                        </h6>
                                        <span
                                            class="card-text
                                            text-black-50 font mb-3"
                                            id="noticeDescription">
                                            {!! $notice->description !!}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


        <section class="container-fluid col-md-9 col-11 mt-5">
            <div class="row justify-content-center mt-4">
                <div class="rounded-2">
                    <div class="row">
                        <div class="container-fluid col-md-12">
                            <div class="row mt-3 justify-content-center mb-4">
                                <div class="col-md-10">
                                    <h2 class="txt-color fs-4 mb-2">Explore our Notice</h2>
                                    <p class="text-black-50 font-sm mb-3">
                                        Stay ahead of the curve and make informed decisions with our curated content,
                                        designed
                                        to
                                        empower
                                        you on your investment journey. </p>

                                    @foreach ($notices as $notice)
                                        <div class="card mb-3 border-1 ">
                                            <div class="row mb-0 ">
                                                <div class="col-3 text-center d-flex align-items-center">
                                                    <div class="card-body ">
                                                        <p class="text-black-50 font mb-0">
                                                            {{ $notice->CreatedDate }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-7 align-items-center d-flex">
                                                    <div class="card-body">
                                                        <h3 class="txt-color fs-5 mb-0">{{ $notice->Title }}</h3>
                                                    </div>
                                                </div>
                                                <div class="col-2 d-flex justify-content-end align-items-center mt-1 font-xl dropdownToggle"
                                                    data-notice="{{ $notice->id }}">
                                                    <i class="bi bi-arrow-right-short news" style="margin-right: 10px"></i>

                                                </div>
                                            </div>
                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-md-11 px-3">
                                                    <div class="newsContent{{ $notice->id }}" style="display: none;">
                                                        <div class="mb-3 d-flex justify-content-center">
                                                            <img title="Notice Image"
                                                                src="{{ getImage('notices', $notice->FeaturedImage) }}"
                                                                alt="Notice Image" class="card-img w-50">
                                                        </div>

                                                        <ul>
                                                            <span class="font">{!! $notice->Description !!}
                                                            </span>
                                                        </ul>
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

        <section class="container-fluid position-relative mt-3 py-5 m-0 p-0 py-0">
            <img title="Notice Image" src="{{ getImage('site', siteSetting()->HomeFeaturedImage) }}" width="100%"
                alt="Notice Image" class="img-fluid mt-5">
            <div class="overlay mt-4 position-absolute text-center">
                <h3 class="fs-5 text-white">{{ siteSetting()->HomeTitle }}</h3>
                <p class="text-white font-md">{{ siteSetting()->HomeSubTitle }}</p>
                <div class="justify-content-center d-flex">
                    <button class="button-md">
                        Start Planning Your Wealth Journey Now<span class="circle-md"><span class="arrow-md"></span></span>
                    </button>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        document.querySelectorAll('.dropdownToggle').forEach(function(toggle) {
            toggle.addEventListener('click', function() {
                const noticeId = this.getAttribute('data-notice');
                const arrowIcon = this.querySelector('.news');
                const content = document.querySelector('.newsContent' + noticeId);

                arrowIcon.classList.toggle('bi-arrow-right-short');
                arrowIcon.classList.toggle('bi-arrow-down-short');

                if (content) {
                    content.style.display = content.style.display === 'none' ? 'block' : 'none';
                }
            });
        });
    </script>
@endsection
