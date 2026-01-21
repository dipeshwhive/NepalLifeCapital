@extends('layouts.master')
@section('content')
    <main>

        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">
                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i>Forms
                    </p>
                    <h1 class="fs-2 text-light text-center mb-5">
                        Forms </h1>
                </div>
            </div>
        </section>

        <section class="container col-md-9 mt-5">
            <div class="row">
                <div class="col-md-5 col-12">
                    <h2 class="txt-color fs-4">Categories</h2>

                    @foreach ($formCategories as $category)
                        <a title="{{ $category->title }}" href="javascript:void(0);"
                            class="text-black-50 border-start p-2 category-bg mb-2"
                            onclick="formList({{ $category->id }})">{{ $category->title }}</a>
                    @endforeach

                </div>
                <div class="col-md-7 col-12">
                    <div class="input-group rounded mt-3">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div id="content" class="container p-2 d-flex justify-content-center form-link mb-2">

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
{{-- @section('script')
    <script>
        $(function() {
            const categories = @json($formCategories[0]);

            formList(categories.id)
        })

        function formList(categoryId) {

            $.ajax({
                url: "{{ route('getFormList') }}",
                method: 'GET',
                data: {
                    categoryId
                },
                success: function(responseData) {

                    if (responseData.status) {
                        const result = responseData.data;

                        $('#content').html(`
                        <div class="col-10">${result.title}
                        </div><div class="col-2 d-flex justify-content-end"><a href="${responseData.image}" target="_blank"><i class="bi bi-box-arrow-up-right"></i></a></div>
                        </div>
                    `)
                    }
                }
            })
        }
    </script>
@endsection --}}

@section('script')
    <script>
        $(function() {
            const categories = @json($formCategories[0]);

            formList(categories.id)
        })

        function formList(categoryId) {

            $.ajax({
                url: "{{ route('getFormList') }}",
                method: 'GET',
                data: {
                    categoryId
                },
                success: function(responseData) {

                    if (responseData.status) {
                        const forms = responseData.data;
                        let html = '<div class="row w-100">';

                        forms.forEach(function(form) {
                            html += `
                                <div class="col-md-12 col-12 mb-3">
                                    <div class="border p-3 h-100 d-flex align-items-center justify-content-between">
                                        <span>${form.title}</span>
                                        <a href="${form.image}" target="_blank" class="ms-2">
                                            <i class="bi bi-box-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            `;
                        });

                        html += '</div>';
                        $('#content').html(html);
                    }
                }
            })
        }
    </script>
@endsection
