@extends('layouts.master')
@section('content')
    <main>

        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i>
                        Contact
                    </p>
                    <h1 class="text-light fs-2 text-center mb-5">
                        Contact</h1>
                </div>
            </div>
        </section>

        <section class="container card col-md-9 col-11 mt-5 mb-5 shadow p-2">
            <div class="row">
                <h2 class="txt-color fs-4 text-center mt-3">
                    Contact With Us
                </h2>
                <div class="col-md-6 border-end p-5">
                    <form id="contactForm" method="post">
                        @csrf

                        <div class="mb-2">
                            <label for="fullName" class="form-label txt-color">Full Name</label>
                            <input type="text" class="form-control font " id="fullName" name="full_name" />

                            <label for="contactNumber" class="form-label txt-color">Contact Number</label>
                            <input type="tel" class="form-control font" id="contactNumber" name="phone_number" />

                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label txt-color">Email</label>
                            <input type="email" class="form-control font " id="email" name="email" />
                        </div>
                        <div class="mb-2">
                            <label for="message" class="form-label txt-color font ">Message</label>
                            <textarea class="form-control " id="message" rows="3" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn-primary btn-lg font">Send</button>
                    </form>
                </div>
                <div class="col-md-6 p-5">
                    <p class="font-lg txt-color mt-0">
                        Contact Details
                    </p>
                    <span class="font-sm">
                        Help Line
                    </span>
                    <p class="font txt-color">
                        {{ siteSetting()->PhoneNumber }}
                    </p>
                    <span class="font-sm">
                        E-mail </span>
                    <p class="font txt-color">
                        {{ siteSetting()->Email }}</p>
                    <span class="font-sm">
                        Location </span>
                    <p class="font txt-color mb-4">
                        {{ siteSetting()->Address }}</p>
                    <div class="col-md-12 col-6" id="map">
                        <iframe src="{{ siteSetting()->MapLink }}" class="map" style="border:1;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.16/dist/sweetalert2.all.min.js"></script>
    <script>
        function clearError() {
            $(".errors").empty()
        }

        $(document).ready(function() {
            $('#contactForm').submit(function(e) {
                clearError()
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: "{{ route('insertContact') }}",
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.response) {
                            Swal.fire({
                                title: 'Success!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'Ok'
                            })
                            $('#contactForm')[0].reset();
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: 'Ok'
                            })
                            const errors = response.result
                            $.each(errors, function(key, value) {
                                $(`[name="${key}"]`).next().html(value[0])
                            })
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endsection
