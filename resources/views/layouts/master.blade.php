<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ siteSetting()->SiteName }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content name="keywords" />
    <meta content name="description" />
    <!-- Favicon -->
    <link href="{{ getImage(siteSetting()->Favicon) }}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet" />
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/datatable.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/toastr.min.css') }}" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/datatable.js') }}"></script>
    <script src="{{ asset('assets/plugins/toastr.min.js') }}"></script>
    <script>
        $(function(){
            const category = @json(FAQCategory()[0]);

            FAQList(category.id)
        });

        function FAQList(categoryId) {

            $.ajax({
                url: "{{ route('getFaqList') }}",
                method: 'GET',
                data: {
                    categoryId
                },
                success: function(responseData) {

                    if (responseData.status) {
                        console.log(responseData.data)
                        // const result = responseData.data;
                        $('#faqsList').html(responseData.data);
                    }
                }
            })
        }
    </script>

    <script>
        $(function () {
            $("#consultationInquiry").on('submit', function (event) {
                event.preventDefault()
                // $(".errors").empty()
                $.ajax({
                    type: "POST",
                    url: "{{route('saveConsultationInquiry')}}",
                    processData: false,
                    contentType: false,
                    data: new FormData(this),
                    success: function (response) {
                        if (response.status) {
                            toastr.options.timeOut = 10000;
                            toastr.success(response.msg);
                            $("#name").val("")
                            $("#phone_number").val("")

                        } else {
                            toastr.options = {
                                "closeButton": true,
                                "progressBar": true
                            };
                            toastr.error(response.msg);
                            const errors = response.result

                            $.each(errors, function (key, value) {
                                $('[name="' + key + '"]').addClass('is-invalid').next()
                                    .html(value[0])
                            })
                        }
                    },
                    error: function (error) {
                        console.log(error)
                    }
                })

            })
        })
    </script>
    @yield('script')
</body>

</html>
