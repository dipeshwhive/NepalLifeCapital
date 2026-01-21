<header>

    <div class="container-fluid topbar text-white py-2 px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-7 px-5 text-start font">
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small class="me-3">{{ siteSetting()->PhoneNumber }}</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>{{ siteSetting()->Email }}</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center small">
                    @foreach (socialSites() as $site)
                        <a title="Social Site" class href="{{ $site->FeaturedLink }}" target="_blank"><img
                                title="Social Site" src="{{ getImage('images', $site->FeaturedImage) }}"
                                alt="Social Site" class-="img-fluid" width="50%" /></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="container col-10 border-bottom">
        <div class="row ">
            <div class="col-md-7 col-12">
                <a title="{{ siteSetting()->SiteName }}" href="{{ route('home') }}"
                    class="navbar-brand d-flex justify-content-md-start justify-content-center">
                    <img title="{{ siteSetting()->SiteName }}" class="img-fluid img"
                        src="{{ getImage('site', siteSetting()->SiteLogo) }}" alt="{{ siteSetting()->SiteName }}"
                        width="30%" />
                </a>
            </div>
            <div class="col-md-5 col-12 d-flex m-auto justify-content-end sm-btn-size p-0">
                <a title="{{ siteSetting()->nav_button_title1 }}" href="{{ siteSetting()->nav_button_link1 }}"
                    target="_blank" class="btn-primary btn-lg font">{{ siteSetting()->nav_button_title1 }}
                    <i class="bi bi-chevron-right"></i></a>
                <a title="{{ siteSetting()->nav_button_title2 }}" href="{{ siteSetting()->nav_button_link2 }}"
                    target="_blank" class="btn-danger btn-lg font mx-2">{{ siteSetting()->nav_button_title2 }}<i
                        class="bi bi-chevron-right"></i></a>
                <a title="{{ siteSetting()->nav_button_title3 }}" href="{{ siteSetting()->nav_button_link3 }}"
                    target="_blank" class="btn-primary btn-lg font">{{ siteSetting()->nav_button_title3 }}
                    <i class="bi bi-chevron-right"></i></a>
                <div class="m-auto mx-2 sub-icon">

                    <a title="Hambuger" href="" class="" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" id="hov"><i class="bi bi-filter-left "
                            style="font-size: 30px"></i></a>
                </div>
            </div>

        </div>
    </div>


    <div class="container py-2 d-lg-block">
        <nav class="navbar navbar-expand-lg bg-white navbar-light font-md">
            {{-- <button type="button" class="navbar-toggler " data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <i class="bi bi-filter-left "></i>
        </button> --}}
            <div class="collapse navbar-collapse " id="navbarCollapse">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-12 d-flex justify-content-lg-center m-0 p-0 navbar-nav">
                            <a title="Home" href="{{ route('home') }}"
                                class="nav-item nav-link {{ Request::url() == route('home') ? 'active' : '' }}"
                                id="hov"><i class="bi bi-house "></i>&nbsp;Home</a>
                            <div class="nav-item dropdown">
                                <a title="Company" href="#" class="nav-link dropdown-toggle " id="hov"
                                    data-bs-toggle="dropdown ">Company</a>
                                <div class="dropdown-menu opt py-4 px-0 bg-white border-0 ">
                                    <div class="row res-padding">
                                        <div class="col-md-5">
                                            <div class="container">
                                                <div class="row">
                                                    <p class="txt-color font mb-1">
                                                        About Company </p>
                                                    <p class="font">
                                                        Let’s learn more about
                                                        Nepal Life Capital </p>
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <a title="Company Profile" class="button-nav font-sm "
                                                                href="{{ route('companyProfile') }}">Company
                                                                Profile<span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                        <div class="mb-2">
                                                            <a title="BOD" class="font-sm button-nav mt-2"
                                                                href="{{ route('boardOfDirector') }}">Board
                                                                of Directors
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                        <div class="mb-2">
                                                            <a title="Management Team" class="font-sm button-nav mt-2"
                                                                href="{{ route('managementTeam') }}">Management
                                                                Team
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>

                                                        <div class="mb-2">
                                                            <a title="Terms & Condition"
                                                                class="font-sm button-nav mt-2"
                                                                href="{{ route('termsAndCondition') }}">Terms and
                                                                Condition
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <a title="Photo Gallery" class="font-sm button-nav "
                                                                href="{{ route('photoGallery') }}">Photo
                                                                Gallery
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                        <div class=" mb-2">

                                                            <a title="Chairman's Message"
                                                                class="font-sm button-nav mt-5"
                                                                href="{{ route('messageFromChairman') }}">Chairman’s
                                                                Message
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                        <div class=" mb-2">

                                                            <a title="Testimonials" class="font-sm button-nav mt-5"
                                                                href="{{ route('testimonial') }}">Testimonials
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                        <div class=" mb-2">

                                                            <a title="Privacy Policies"
                                                                class="font-sm button-nav mt-5"
                                                                href="{{ route('privacyPolicies') }}">Privacy Policies
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7 mobile-hidden ">
                                            <div class="row mx-3">
                                                <p class="txt-color font mb-1">
                                                    Our Portfolio Products
                                                </p>
                                                <p class="font">
                                                    Unleash your Investment
                                                    Potential with our
                                                    Portfolio
                                                    Products
                                                </p>
                                                @foreach (products() as $key => $product)
                                                    @if ($key % 2 == 0)
                                                        <div class="card dbar-blue col-md-5">
                                                            <div class="card-body">
                                                                <p class="font mb-2" style="color: #BAE0FD;">
                                                                    {{ $product->Title }}
                                                                </p>
                                                                <p class="card-text text-white font-xs mb-0">
                                                                    {!! $product->Description !!}
                                                                </p>
                                                                <a title="PMS"
                                                                    href="{{ route('primaryService', PMS()->Slug) }}"
                                                                    class="font-sm mt-0" style="color: #BAE0FD;">
                                                                    Learn More
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card dbar-success mx-3 col-5">
                                                            <div class="card-body">
                                                                <p class="font mb-2" style="color: #b8fadd;">
                                                                    {{ $product->Title }}
                                                                </p>
                                                                <p class="card-text text-white font-xs mb-0">
                                                                    {!! $product->Description !!}
                                                                </p>
                                                                <a title="PMS"
                                                                    href="{{ route('primaryService', PMS()->Slug) }}"
                                                                    class="font-sm mt-0" style="color: #b8fadd;">
                                                                    Learn More
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a title="Company Process" href="{{ route('companyProcess') }}"
                                class="nav-item nav-link {{ Request::is('companyProcess') ? 'active' : '' }}"
                                id="hov">
                                Our Process</a>

                            <div class="nav-item dropdown ">
                                <a title="Services" href="#" class="nav-link dropdown-toggle " id="hov"
                                    data-bs-toggle="dropdown ">Our
                                    Services
                                </a>
                                <div class="dropdown-menu opt-2 py-4 px-0 bg-white border-0 ">
                                    <div class="row res-padding">
                                        <div class="col-md-5">
                                            <div class="container">
                                                <div class="row">
                                                    <p class="txt-color font mb-1 ">
                                                        Our Services </p>
                                                    <p class="font ">
                                                        Let’s learn more about
                                                        Nepal Life Capital </p>
                                                    <div class="col-md-7 col-auto">
                                                        <div class="mb-2">
                                                            <p class="font mb-2">
                                                                Primary
                                                            </p>
                                                            @foreach (primaryService() as $primary)
                                                                <div class="mb-2">
                                                                    <a title="Primary Service"
                                                                        class="font-sm button-nav {{ $loop->first ? 'mb-1' : '' }}"
                                                                        href="{{ route('primaryService', ['slug'=>$service->Slug]) }}">{{ $primary->Title }}<span
                                                                            class="circle-nav"><span
                                                                                class="arrow-nav"></span></span>
                                                                    </a>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-md-5 col-auto">
                                                    <div class="mb-2">
                                                        <p class="font mb-2">
                                                            Mutual Fund
                                                        </p>
                                                        <div class="mb-2">
                                                            <a title="" class="font-sm button-nav mb-1"
                                                                href="{{ route('mutualFund') }}">Mutual
                                                                Fund<span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7 mobile-hidden">
                                            <div class="row">
                                                <p class="txt-color font mb-1">
                                                    Our Portfolio Products
                                                </p>
                                                <p class="font">
                                                    Unleash your Investment
                                                    Potential with our
                                                    Portfolio
                                                    Products
                                                </p>
                                                @foreach (products() as $key => $product)
                                                    @if ($key % 2 == 0)
                                                        <div class="card dbar-blue col-md-5">
                                                            <div class="card-body">
                                                                <p class="font mb-2" style="color: #BAE0FD;">
                                                                    {{ $product->Title }}
                                                                </p>
                                                                <p class="card-text text-white font-xs mb-0">
                                                                    {!! $product->Description !!}
                                                                </p>
                                                                <a title="PMS"
                                                                    href="{{ route('primaryService', PMS()->Slug) }}"
                                                                    class="font-sm mt-0" style="color: #BAE0FD;">
                                                                    Learn More
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card dbar-success mx-3 col-md-5">
                                                            <div class="card-body">
                                                                <p class="font mb-2" style="color: #b8fadd;">
                                                                    {{ $product->Title }}
                                                                </p>
                                                                <p class="card-text text-white font-xs mb-0">
                                                                    {!! $product->Description !!}
                                                                </p>
                                                                <a title="PMS"
                                                                    href="{{ route('primaryService', PMS()->Slug) }}"
                                                                    class="font-sm mt-0" style="color: #b8fadd;">
                                                                    Learn More
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="nav-item dropdown">
                                <a title="Our Publications" href="#" class="nav-link dropdown-toggle "
                                    id="hov" data-bs-toggle="dropdown ">Our
                                    Publications</a>
                                <div class="dropdown-menu opt-3 py-4 px-0 bg-white border-0 ">
                                    <div class="row res-padding">
                                        <div class="col-md-5">
                                            <div class="container">
                                                <p class="txt-color font mb-1 ">
                                                    Our Publications </p>
                                                <p class="font ">
                                                    Let’s learn more about
                                                    Nepal Life Capital </p>
                                                <div class="row ">
                                                    <div class="col-md-6 mb-3">
                                                        <div class=" mb-2">
                                                            <p class="font mb-2">
                                                                Publications
                                                            </p>

                                                            <a title="Notices" class="button-nav font-sm"
                                                                href="{{ route('notices') }}">Notices
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                        <div class="mb-2">
                                                            <a title="Newsletter" class="button-nav"
                                                                href="{{ route('newsletter') }}">Newsletter
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                        <div class="">
                                                            <a title="Newsletter" class="button-nav"
                                                                href="{{ route('prospectus') }}">Prospectus
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7 mobile-hidden">
                                            <div class="row">
                                                <p class="txt-color font mb-1">
                                                    Our Portfolio Products
                                                </p>
                                                <p class="font">
                                                    Unleash your Investment
                                                    Potential with our
                                                    Portfolio
                                                    Products
                                                </p>
                                                @foreach (products() as $key => $product)
                                                    @if ($key % 2 == 0)
                                                        <div class="card dbar-blue col-md-5">
                                                            <div class="card-body">
                                                                <p class="font mb-2" style="color: #BAE0FD;">
                                                                    {{ $product->Title }}
                                                                </p>
                                                                <p class="card-text text-white font-xs mb-0">
                                                                    {!! $product->Description !!}
                                                                </p>
                                                                <a title="PMS"
                                                                    href="{{ route('primaryService', PMS()->Slug) }}"
                                                                    class="font-sm mt-0" style="color: #BAE0FD;">
                                                                    Learn More
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card dbar-success mx-3 col-5">
                                                            <div class="card-body">
                                                                <p class="font mb-2" style="color: #b8fadd;">
                                                                    {{ $product->Title }}
                                                                </p>
                                                                <p class="card-text text-white font-xs mb-0">
                                                                    {!! $product->Description !!}
                                                                </p>
                                                                <a title="PMS"
                                                                    href="{{ route('primaryService', PMS()->Slug) }}"
                                                                    class="font-sm mt-0" style="color: #b8fadd;">
                                                                    Learn More
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="nav-item dropdown">
                                <a title="Our Researches" href="#" class="nav-link dropdown-toggle "
                                    id="hov" data-bs-toggle="dropdown ">Our
                                    Researches</a>
                                <div class="dropdown-menu opt-4 py-4 px-0 bg-white border-0 ">
                                    <div class="row res-padding">
                                        <div class="col-md-5">
                                            <div class="container">
                                                <p class="txt-color font mb-1 ">
                                                    Our Researches </p>
                                                <p class="font ">
                                                    Let’s learn more about
                                                    Nepal Life Capital </p>
                                                <div class="row ">
                                                    <div class="col-md-6">
                                                        <p class="font mb-2">
                                                            Primary
                                                        </p>
                                                        <div class="mb-2">
                                                            <a title="Company Profile" class="button-nav"
                                                                href="{{ route('companyResearch') }}">Company
                                                                Research
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7 mobile-hidden">
                                            <div class="row">
                                                <p class="txt-color font mb-1">
                                                    Our Portfolio Products
                                                </p>
                                                <p class="font">
                                                    Unleash your Investment
                                                    Potential with our
                                                    Portfolio
                                                    Products
                                                </p>
                                                @foreach (products() as $key => $product)
                                                    @if ($key % 2 == 0)
                                                        <div class="card dbar-blue col-md-5">
                                                            <div class="card-body">
                                                                <p class="font mb-2" style="color: #BAE0FD;">
                                                                    {{ $product->Title }}
                                                                </p>
                                                                <p class="card-text text-white font-xs mb-0">
                                                                    {!! $product->Description !!}
                                                                </p>
                                                                <a title="PMS"
                                                                    href="{{ route('primaryService', PMS()->Slug) }}"
                                                                    class="font-sm mt-0" style="color: #BAE0FD;">
                                                                    Learn More
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card dbar-success mx-3 col-5">
                                                            <div class="card-body">
                                                                <p class="font mb-2" style="color: #b8fadd;">
                                                                    {{ $product->Title }}
                                                                </p>
                                                                <p class="card-text text-white font-xs mb-0">
                                                                    {!! $product->Description !!}
                                                                </p>
                                                                <a title="PMS"
                                                                    href="{{ route('primaryService', PMS()->Slug) }}"
                                                                    class="font-sm mt-0" style="color: #b8fadd;">
                                                                    Learn More
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="nav-item dropdown">
                                <a title="Calculators" href="#" class="nav-link dropdown-toggle"
                                    id="hov" data-bs-toggle="dropdown ">
                                    Calculators</a>
                                <div class="dropdown-menu opt-5 py-4 px-0 bg-white border-0 ">
                                    <div class="row res-padding">
                                        <div class="col-md-5 col-auto">
                                            <div class="container">
                                                <p class="txt-color font mb-1 ">
                                                    Calculators </p>
                                                <p class="font ">
                                                    Let’s calculate the essentials to get you started ! </p>
                                                <div class="row ">
                                                    <div class="col-4">
                                                        <div class="mb-2">
                                                            <a title="Buy Calculator" class="button-nav"
                                                                href="{{ route('buyCalculator') }}">Buy
                                                                Calculator
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                        <div class="mb-2">
                                                            <a title="Sell Calculator" class="button-nav"
                                                                href="{{ route('sellCalculator') }}">Sell
                                                                Calculator
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                        {{-- <div class="mb-2">
                                                        <a title="" class="button-nav" href="{{ route('sipCalculator') }}">SIP
                                                            Calculator
                                                            <span class="circle-nav"><span
                                                                    class="arrow-nav"></span></span>
                                                        </a>
                                                    </div> --}}
                                                    </div>
                                                    <div class="col-7">

                                                        <div class="mb-2">
                                                            <a title="Bonus Share Calculator" class="button-nav"
                                                                href="{{ route('bonusShareCalculator') }}">Bonus
                                                                Share
                                                                Calculator
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                        <div class="mb-2">
                                                            <a title="Share Price Adjustment Calculator"
                                                                class="button-nav"
                                                                href="{{ route('rightSharePriceCalculation') }}">
                                                                Share Price Adjustment
                                                                Calculator
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mobile-hidden">
                                            <div class="row">
                                                <p class="txt-color font mb-1">
                                                    Our Portfolio Products
                                                </p>
                                                <p class="font">
                                                    Unleash your Investment
                                                    Potential with our
                                                    Portfolio
                                                    Products
                                                </p>
                                                @foreach (products() as $key => $product)
                                                    @if ($key % 2 == 0)
                                                        <div class="card dbar-blue col-md-5">
                                                            <div class="card-body">
                                                                <p class="font mb-2" style="color: #BAE0FD;">
                                                                    {{ $product->Title }}
                                                                </p>
                                                                <p class="card-text text-white font-xs mb-0">
                                                                    {!! $product->Description !!}
                                                                </p>
                                                                <a title="PMS"
                                                                    href="{{ route('primaryService', PMS()->Slug) }}"
                                                                    class="font-sm mt-0" style="color: #BAE0FD;">
                                                                    Learn More
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card dbar-success mx-3 col-5">
                                                            <div class="card-body">
                                                                <p class="font mb-2" style="color: #b8fadd;">
                                                                    {{ $product->Title }}
                                                                </p>
                                                                <p class="card-text text-white font-xs mb-0">
                                                                    {!! $product->Description !!}
                                                                </p>
                                                                <a title="PMS"
                                                                    href="{{ route('primaryService', PMS()->Slug) }}"
                                                                    class="font-sm mt-0" style="color: #b8fadd;">
                                                                    Learn More
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <a title="Events" href="{{ route('eventsList') }}"
                                class="nav-item nav-link {{ Request::is('event-list') ? 'active' : '' }}"
                                id="hov">Events</a>
                            <a title="Notices" href="{{ route('notices') }}"
                                class="nav-item nav-link {{ Request::is('notices') ? 'active' : '' }}"
                                id="hov">Notices</a>
                            <a title="Contact" href="{{ route('contact') }}"
                                class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}"
                                id="hov">Contact</a>
                            <!-- CSS -->
                            <style>
                            </style>



                            {{-- <div class="col m-auto d-flex justify-content-end align-content-end menu-hide">
                            <div class="nav-item dropdown">
                                <a title="" href="#" class=" " id="hov" data-bs-toggle="dropdown ">
                                    <i class="bi bi-calculator mx-4"></i></a>
                                <div class="dropdown-menu opt-5 p-3 bg-white border-0 ">
                                    <div class="row res-padding">
                                        <div class="col-md-5 col-auto">
                                            <div class="container">
                                                <p class="txt-color font mb-1 ">
                                                    Calculators </p>
                                                <p class="font ">
                                                    Let’s calculate the essentials to get you started ! </p>
                                                <div class="row ">
                                                    <div class="col">
                                                        <div class="mb-2">
                                                            <a title="" class="button-nav"
                                                                href="{{ route('buyCalculator') }}">Buy
                                                                Calculator
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                        <div class="mb-2">
                                                            <a title="" class="button-nav"
                                                                href="{{ route('sellCalculator') }}">Sell
                                                                Calculator
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                        <div class="mb-2">
                                                            <a title="" class="button-nav"
                                                                href="{{ route('sipCalculator') }}">SIP
                                                                Calculator
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                        <div class="mb-2">
                                                            <a title="" class="button-nav"
                                                                href="{{ route('bonusTaxCalculator') }}">Bonus
                                                                Tax
                                                                Calculator
                                                                <span class="circle-nav"><span
                                                                        class="arrow-nav"></span></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mobile-hidden">
                                            <div class="row">
                                                <p class="txt-color font mb-1">
                                                    Our Portfolio Products
                                                </p>
                                                <p class="font">
                                                    Unleash your Investment
                                                    Potential with our
                                                    Portfolio
                                                    Products
                                                </p>
                                                <div class="card dbar-blue col-5 mx-3">
                                                    <div class="card-body">
                                                        <p class="font mb-2" style="color: #BAE0FD;">Portfolio
                                                            Management
                                                            Services
                                                        </p>
                                                        <p class="card-text text-white font-xs mb-0">With
                                                            our portfolio
                                                            management
                                                            service, we
                                                            balance
                                                            liquidity, risk,
                                                            and wealth
                                                            growth for
                                                            individuals and
                                                            institutions.
                                                        </p>
                                                        <a title="" href class="font-xs mt-0" style="color: #BAE0FD;">
                                                            Learn More
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card dbar-success  col-5">
                                                    <div class="card-body">
                                                        <p class="font mb-2" style="color: #b8fadd;">Free
                                                            Demat Account
                                                        </p>
                                                        <p class="card-text text-white font-xs mb-0">Empower
                                                            Your
                                                            Investments:
                                                            Free Demat
                                                            Account
                                                            Enrollment
                                                            with Expert
                                                            Guidance and Two
                                                            Years of Renewal
                                                            Support
                                                        </p>
                                                        <a title="" href class="font-sm mt-0" style="color: #b8fadd;">
                                                            Learn More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var navItem = document.querySelector(".nav-item");

        navItem.addEventListener("mouseenter", function() {
            var dropdownMenu = this.querySelector(".dropdown-menu");
            dropdownMenu.style.display = "block";
        });

        navItem.addEventListener("mouseleave", function() {
            var dropdownMenu = this.querySelector(".dropdown-menu");
            dropdownMenu.style.display = "none";
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const researchesButton = document.getElementById("researchesDropdown");
        const researchesMenu = document.getElementById("researchesMenu");

        researchesButton.addEventListener("click", function() {
            researchesMenu.classList.toggle("show");
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        var links = document.querySelectorAll(".nav-item.nav-link");

        links.forEach(function(link) {
            link.addEventListener("click", function(event) {
                links.forEach(function(link) {
                    link.classList.remove(
                        "active");
                });
                this.classList.add("active");

            });
        });
    });
</script>
