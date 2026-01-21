@extends('layouts.master')
@section('content')
    <style>
        .menu {
            display: flex;
        }

        .menu-item {
            flex: 1;
            padding: 12px 20px;
            background-color: #00549a;
            text-align: center;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s ease-in-out;
        }

        .menu-item:hover {
            background-color: #00437b;
        }

        .menu-item.active {
            background-color: #00437b;
        }

        /* Content Section Styles */
        .content-section {
            padding: 20px;
        }

        #home {
            display: block;
        }
    </style>
    <main>

        <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
            <div class="row gx-0 justify-content-center">
                <div class="col-md-12 col-12">

                    <p class="text-center font mt-4 mb-3">
                        <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i> Photo
                        Gallery
                    </p>
                    <h1 class="text-light fs-2 text-center mb-5">
                        Photo Gallery
                    </h1>
                </div>
            </div>
        </section>
        <section class="container-fluid p-0 m-0 footer mt-5">
            <div class="row justify-content-center mt-4">
                <div class="col-md-9 col-11 py-5 rounded-2">
                    <div class="row mb-3">
                        <div class="col-md-12 col-auto">
                            <h2 class="fs-4 txt-color">Explore Our Gallery: Discover Moments of Inspiration and Excellence
                            </h2>
                            <p class="text-black-50 font-sm">View our latest Events, Programs and happenings at Nepal Life
                                Capital. </p>
                        </div>
                        <div class="menu">
                            @foreach ($photoCategory as $category)
                                <button class="menu-item {{ $loop->first ? 'active' : '' }}"
                                    onclick="showSection('{{ $category->id }}', this)">{{ $category->title }}</button>
                            @endforeach
                        </div>

                        @foreach ($photoCategory as $item)
                            @php
                                $photos = DB::table('gallery')
                                    ->where('category_id', $item->id)
                                    ->where('is_active', 1)
                                    ->get();
                            @endphp
                            <div id="{{ $item->id }}" class="content-section">
                                <div class="row justify-content-center">
                                    @foreach ($photos as $photo)
                                        <div class="col-md-4 col-auto mb-2">
                                            <img src="{{ getImage('gallery', $photo->FeaturedImage) }}" class="w-100"
                                                alt="gallery image">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        function showSection(sectionId, element) {
            // Hide all sections
            var sections = document.getElementsByClassName('content-section');
            for (var i = 0; i < sections.length; i++) {
                sections[i].style.display = 'none';
            }

            // Show the selected section
            var selectedSection = document.getElementById(sectionId);
            selectedSection.style.display = 'block';

            // Remove 'active' class from all menu items
            var menuItems = document.getElementsByClassName('menu-item');
            for (var i = 0; i < menuItems.length; i++) {
                menuItems[i].classList.remove('active');
            }

            // Add 'active' class to the clicked menu item
            element.classList.add('active');
        }
    </script>
@endsection
