@extends('layouts.master')
@section('content')
    <main>

        <section class="container-fluid text-white py-2 px-5 mb-5 d-none d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i>Board
                        of Directors
                    </p>
                    <h1 class="text-light fs-2 text-center mb-5">
                        Board of Directors </h1>
                </div>

            </div>
        </section>

        <section class="container col-9 mt-3">
            <div class="row mt-5 ">
                @foreach ($directors as $director)
                    <div class="col-md-3 col-12 mb-3">
                        <div class="card border-primary front">
                            <img title="{{ $director->Name }}" class="card-img-top"
                                src="{{ getImage('team', $director->{'Featured Image'}) }}" alt="{{ $director->Name }}">
                            <div class="card-body">
                                <p class="text-center txt-color font mb-0">{{ $director->Name }}
                                </p>
                                <p class="text-center font-sm">{{ $director->Designation }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="container-fluid position-relative mt-3 py-5 m-0 p-0 py-0">
            <img title="{{ siteSetting()->HomeTitle }}" src="{{ getImage('site', siteSetting()->HomeFeaturedImage) }}"
                width="100%" alt="{{ siteSetting()->HomeTitle }}" class="img-fluid mt-5">
            <div class="overlay mt-4 position-absolute text-center">
                <h2 class="fs-4 text-white">{{ siteSetting()->HomeTitle }}</h2>
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
        $(function() {
            $("#consultationInquiry").on('submit', function(event) {
                event.preventDefault()
                $(".errors").empty()
                $.ajax({
                    type: "POST",
                    url: "{{ route('saveConsultationInquiry') }}",
                    processData: false,
                    contentType: false,
                    data: new FormData(this),
                    success: function(response) {
                        if (response.status) {
                            toastr.options.timeOut = 10000;
                            toastr.success(response.msg);
                            $("#inputname").val("")
                            $("#name").val("")
                            $("#phone_number").val("")

                        } else {
                            toastr.options = {
                                "closeButton": true,
                                "progressBar": true
                            };
                            toastr.error(response.msg);
                            const errors = response.result

                            $.each(errors, function(key, value) {
                                $('[name="' + key + '"]').addClass('is-invalid').next()
                                    .html(value[0])
                            })
                        }
                    },
                    error: function(error) {
                        console.log(error)
                    }
                })

            })
        })
    </script>
@endsection
