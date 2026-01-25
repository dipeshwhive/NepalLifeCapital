 <style>
     /* Keyframes for sliding in the name */
     @keyframes slide-in {
         0% {
             opacity: 0;
             transform: translateY(-20px);
         }

         100% {
             opacity: 1;
             transform: translateY(0);
         }
     }

     @media only screen and (min-width: 300px) and (max-width: 750px) {
         .click {
             font-size: 13px !important;
         }
     }

     /* Transition for color change */
     .animated-name {
         transition: color 0.5s ease;
     }

     /* Add other styles and animations here if needed */
 </style>

 <footer>
     <div class="container-fluid col-md-9 col-11 mt-5">
         <div class="row justify-content-center mt-4">
             <div class="rounded-2">
                 <div class="row">
                     <div class="col-md-7 col-12">
                         <h3 class="fs-5 txt-color">Have any Question?</h3>
                         <p class="text-black-50 font">Our mission is to
                             transform
                             challenges into opportunities, complexity into
                             simplicity,
                             and
                             ideas into reality.</p>
                     </div>
                     {{-- <div class="col-md-5 col-auto mb-3">
                    <div class="d-flex justify-content-end btn-green">
                        <button class="button-lighter">
                            View all FAQs<span class="circle-lighter"><span class="arrow-lighter"></span></span>
                        </button>
                    </div>0
                </div> --}}
                     <div class="container-fluid col-md-12">
                         <div class="row justify-content-center">
                             <div class="col-md-7" id="faqsList">

                             </div>
                             <div class="col-md-5 col-11 rounded-2">
                                 @foreach (FAQCategory() as $key => $category)
                                     @if ($key % 2 == 0)
                                         {{-- <a> --}}
                                         <div class="row d-flex justify-content-end mb-3 " id="originalDiv">
                                             <div class="card col-md-9  border-1 red"
                                                 style="background-color: #FEF2F2; border:1px solid #D1252B; ">
                                                 <div class="card-body">
                                                     <a title="{{ $category->Title }}" href="javascript:void(0)"
                                                         onclick="FAQList({{ $category->id }})" class="font mb-2"
                                                         style="color: #D1252B;">{{ $category->Title }}
                                                     </a>
                                                     <p class="font">
                                                         {{ getFAQCount($category->id) }}
                                                     </p>
                                                 </div>
                                             </div>
                                         </div>
                                         {{-- </a> --}}
                                     @else
                                         <div class="row d-flex justify-content-end mb-3" id="originalDiv2">
                                             <div class="col-md-9 card border-1 blue"
                                                 style="background-color: #E0EFFE; border:1px solid #0172C8; ">
                                                 <div class="card-body">
                                                     <a title="{{ $category->Title }}" href="javascript:void(0)"
                                                         onclick="FAQList({{ $category->id }})" class="font mb-2"
                                                         style="color: #0172C8;">{{ $category->Title }}</a>
                                                     <p class="font">
                                                         1
                                                     </p>
                                                 </div>
                                             </div>
                                         </div>
                                     @endif
                                 @endforeach

                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     {{-- <script>
    // Get reference to the original and replacement divs
    const originalDiv = document.getElementById('originalDiv');
    const replacementDiv = document.getElementById('replacementDiv');

    // Add click event listener to the original div
    originalDiv.addEventListener('click', function() {
        // Hide the original div
        originalDiv.style.display = 'none';
        // Show the replacement div
        replacementDiv.style.display = 'block';
    });
    const originalDiv2 = document.getElementById('originalDiv2');
    const replacementDiv2 = document.getElementById('replacementDiv2');

    // Add click event listener to the original div
    originalDiv2.addEventListener('click', function() {
        // Hide the original div
        originalDiv2.style.display = 'none';
        // Show the replacement div
        replacementDiv2.style.display = 'block';
    });
</script> --}}
     {{-- Book a Consultation --}}
     <div class="container col-md-9 col-11">
         <div class="row justify-content-center mt-5">
             <div class="p-5 gradient rounded-2 justify-content-center d-flex align-items-center">
                 <div class="row">
                     <div class="col-md-8 col-auto">
                         <div class="mt-4">
                             <h3 class="text-white mb-3">{{ consultation()->Title }}</h3>
                                <div class="text-white font">
                                    {!! consultation()->Description !!}
                                </div>

                             <form class="row mt-4 mb-4" id="consultationInquiry" method="post">
                                 @csrf
                                 <div class="col-md-6 mb-2">
                                     <input type="text" class="form-control font-md" name="name"
                                         placeholder="Enter your fullname" id="name" />
                                 </div>
                                 <div class="col-md-6 mb-0">
                                     <input type="text" class="form-control font-md" name="phone_number"
                                         placeholder="Enter your phone number" id="phone_number" />
                                 </div>
                                 <div class="mb-3">
                                     <button class="button-md" type="submit">
                                         Book a Consultation<span class="circle-md"><span
                                                 class="arrow-md"></span></span>
                                     </button>
                                 </div>
                             </form>
                         </div>
                     </div>
                     <div class="col-md-4 mt-3 col-auto">
                         <div class="img-fluid justify-content-center d-flex">
                             <img title="Consultation"
                                 src="{{ getImage(consultation()->FeaturedImage) }}"
                                 alt="Consultation" class=" img-fluid w-100">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="container-fluid p-0 m-0 topbar mt-5">
         <div class="container py-4">
             <div class="row justify-content-center mb-2">
                 <img title="{{ siteSetting()->SiteName }}" class="img-fluid w-50"
                     src="{{ asset('assets/img/logo/logo.png') }}" alt="{{ siteSetting()->SiteName }}" />
             </div>
             <p
                 class="col-7 d-flex justify-content-center text-center align-content-center m-auto font text-white mb-2">
                 Nepal
                 Life
                 Capital: Premier investment management firm.
                 Personalized
                 solutions for individuals and institutions. Expert
                 portfolio
                 management & strategic advice. Trusted for
                 transparency &
                 tailored
                 solutions.
             </p>
             <div class="row">
                 <div class="col-11 justify-content-center align-content-center m-auto font text-white mb-2 border-top">
                     <div class="row border-bottom mt-4">
                         <div class="col-md-3 col-12">
                             <div class="mb-3">
                                 <h3 class="fs-5 text-light">About</h3>
                             </div>
                             <div class="mb-3">
                                 <a title="Company
                                     Profile"
                                     class="font text-white-50" href="{{ route('companyProfile') }}">Company
                                     Profile</a>
                             </div>
                             <div class="mb-3">
                                 <a title="Board
                                     of
                                     Directors"
                                     class="font text-white-50" href="{{ route('boardOfDirector') }}">Board
                                     of
                                     Directors</a>
                             </div>
                             <div class="mb-3">
                                 <a title="Management
                                     Team"
                                     class="font text-white-50" href="{{ route('managementTeam') }}">Management
                                     Team</a>
                             </div>
                             <div class="mb-3">
                                 <a title="Photo Gallery" class="font text-white-50"
                                     href="{{ route('photoGallery') }}">Photo
                                     Gallery</a>
                             </div>
                             <div class="mb-3">
                                 <a title="Chairman's
                                     Message"
                                     class="font text-white-50" href="{{ route('messageFromChairman') }}">Chairman's
                                     Message</a>
                             </div>
                             <div class="mb-3">
                                 <a title="Events" class="font text-white-50"
                                     href="{{ route('eventsList') }}">Events</a>
                             </div>
                             <div class="mb-3">
                                 <a title="Testimonials" class="font text-white-50"
                                     href="{{ route('testimonial') }}">Testimonials</a>
                             </div>
                             <div class="mb-4">
                                 <a title="Contact Us" class="font text-white-50" href>Contact
                                     us</a>
                             </div>
                         </div>

                         <div class="col-md-3 col-12">
                             <h3 class="fs-5 text-light mb-3">Services</h3>

                             @foreach (primaryService() as $primary)
                                 <div class="mb-3">
                                     <a title="{{ $primary->Title }}" class="font text-white-50"
                                         href="{{ route('primaryService', $primary->Slug) }}">{{ $primary->Title }}</a>
                                 </div>
                             @endforeach

                             <h3 class="text-light fs-5 mb-3 mt-4">Calculators</h3>
                             <div class="mb-3">
                                 <a title="Buy
                                     Calculator"
                                     class="font text-white-50" href="{{ route('buyCalculator') }}">Buy
                                     Calculator</a>
                             </div>
                             <div class="mb-3">
                                 <a title="Sell
                                     Calculator"
                                     class="font text-white-50" href="{{ route('sellCalculator') }}">Sell
                                     Calculator</a>
                             </div>
                             <div class="mb-3">
                                 <a title="Bonus Share Calculator" class="font text-white-50"
                                     href="{{ route('bonusShareCalculator') }}">
                                     Bonus Share Calculator</a>
                             </div>
                             <div class="mb-4">
                                 <a title=" Right Share Price Adjustment Calculator" class="font text-white-50"
                                     href="{{ route('rightSharePriceCalculation') }}">
                                     Right Share Price Adjustment Calculator</a>
                             </div>
                         </div>
                         <!-- another -->


                         <!-- another 1 -->
                         <div class="col-md-3 col-12">
                             <h3 class="fs-5 text-light mb-3">Quick
                                 Links</h3>
                             <div class="mb-3">
                                 <a title="Meroshare" class="font text-white-50"
                                     href="{{ siteSetting()->NavButtonLink1 }}">Meroshare
                                 </a>
                             </div>
                             @foreach (footerQuickLinks() as $quickLink)
                                 <div class="mb-3">
                                     <a title="{{ $quickLink->Title }}" class="font text-white-50"
                                         href="{{ $quickLink->Url }}" target="_blank">{{ $quickLink->Title }}
                                     </a>
                                 </div>
                             @endforeach

                             <h3 class="text-light fs-5 mb-3 mt-4">Resources</h3>
                             <div class="mb-3">
                                 <a title="" class="font text-white-50" href="{{ route('notices') }}">Notices
                                 </a>
                             </div>
                             <div class="mb-3">
                                 <a title="Newsletter" class="font text-white-50"
                                     href="{{ route('newsletter') }}">Newsletter
                                 </a>
                             </div>
                             {{-- <div class="mb-4">
                            <a title="" class="font text-white-50" href="">FAQs</a>
                        </div> --}}
                         </div>
                         <div class="col-md-3 col-12">
                             <h3 class="text-light fs-5 mb-3">Get Regular
                                 Updates</h3>
                             <div class="d-flex justify-content-start">
                                 <div class="d-inline-flex align-items-center justify-content-center">
                                     @foreach (socialSites() as $site)
                                         <a title="" class href="{{ $site->FeaturedLink }}"
                                             target="_blank"><img src="{{ getImage($site->FeaturedImage) }}"
                                                 alt class-="img-fluid" width="50%" /></a>
                                     @endforeach
                                 </div>
                             </div>
                             <h3 class="text-light fs-5 mb-3 mt-4">Downloads</h3>
                             <div class="mb-3">
                                 <a title="Forms" class="font-md text-white-50" href="{{ route('form') }}">Forms
                                 </a>
                             </div>
                             <div class="mb-3">
                                 <a title="Notices" class="font-md text-white-50"
                                     href="{{ route('notices') }}">Notices
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="container-fluid p-0 m-0 topbar" id="clickableDiv">
                 <div class="container col-11">
                     <div class="row ">
                         <div class="col-md-6 text-white font-md mt-3">
                             <span>&copy;{!! str_replace('{year}', date('Y'), siteSetting()->FooterText) !!}
                            </span>
                         </div>
                         <div class="col-md-6 text-md-end mt-3">
                             <div class="ftr-jus font-md">
                                 <div class="d-inline-flex align-items-center justify-content-center font">
                                     <a title="Terms and
                                         Conditions"
                                         class="text-white" href="{{ route('termsAndCondition') }}">Terms and
                                         Conditions</a>
                                     <a title="" class="text-white mx-4"></a>
                                     <a title="Privacy Policies" class="text-white"
                                         href="{{ route('privacyPolicies') }}">Privacy Policies</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>

 <script>
     let clickCounter = 0;

     // Function to handle clicks
     function handleClick() {
         clickCounter++;
         if (clickCounter === 17) {
             document.getElementById('clickableDiv').innerHTML =
                 '<div class="text-center mt-3 click" style="font-size: 16px; font-family: Trebuchet MS, sans-serif;"><span class="text-light">Made by </span><span class="animated-name">Bimochan Alisha Shrestha Bajimaya</span></div>';

             document.querySelector('.animated-name').classList.add('slide-in');

             animateColor();
         }
     }

     // Function to animate text color
     function animateColor() {
         const nameSpan = document.querySelector('.animated-name');
         let hue = 0;
         setInterval(() => {
             hue = (hue + 2) % 360;
             nameSpan.style.color = `hsl(${hue}, 90%, 70%)`;
         }, 50);
     }

     // Add event listener to the div
     document.getElementById('clickableDiv').addEventListener('click', handleClick);
 </script>
