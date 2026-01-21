 @extends('layouts.master')
 @section('content')
     <main>
         <section class="container-fluid text-white py-2 px-5 d-lg-block" style="background-color: #00549A;">
             <div class="row gx-0 justify-content-center">
                 <div class="col-md-12 col-12">
                     <p class="text-center font mt-4 mb-3">
                         <a title="Home" href="{{ route('home') }}" class="text-white">Home</a> <i class="bi bi-dot"></i>Our
                         Processes
                     </p>
                     <h1 class="text-light fs-2 text-center mb-5">
                         Our Processes </h1>
                 </div>

             </div>
         </section>

         <section class="container-fluid col-md-9 col-11">
             <div class="row justify-content-center mt-5">
                 <div class=" rounded-2 justify-content-center d-flex flex-column align-items-center">
                     <div class="col-md-10 col-auto">
                         <h2 class="text-center fs-4 txt-color">Explore our Working Mechanisam
                         </h2>
                         <p class="font text-black-50 text-center">
                             We work in a very Professional and corporate way We work in a very Professional and
                             corporate
                             way
                             We
                             work in a very Professional and corporate way We work in a very Professional and corporate
                             way
                             We
                             work
                             in a very Professional and corporate way
                         </p>
                     </div>
                 </div>
             </div>
         </section>


         <section class="container-fluid col-md-9 col-11 shadow card mt-5 mb-5">
             <div class="row justify-content-center mt-4">
                 <div class="rounded-2">
                     <div class="row">
                         <div class="container-fluid col-md-12 col-11">
                             <div class="row mt-3 justify-content-center mb-4">
                                 <div class="col-md-10">
                                     <h3 class="txt-color fs-5 mb-2">Responsibilities under Portfolio Management</h3>
                                     <p class="text-black-50 font-sm mb-3">
                                         Stay ahead of the curve and make informed decisions with our curated content,
                                         designed
                                         to empower you on your investment journey. </p>
                                     <div class="row">
                                         <div class="col-md-6">
                                             @foreach ($ourProcess as $process)
                                                 <div class="card mb-3 border-1">
                                                     <div class="card-body">
                                                         <p class="font mb-0">{{ $process->title }}
                                                         </p>
                                                     </div>
                                                 </div>
                                             @endforeach
                                         </div>
                                         <div class="col-md-6 mt-4 mb-3">
                                             <img title="Image" src="{{ asset('assets/img/graphics/photo.png') }}"
                                                 class="img-fluid w-100" alt="Image">
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>


         <section class="container-fluid col-md-9 col-11 mt-5">
             <div class="row justify-content-center mt-5">
                 <div class=" rounded-2 ">
                     <h3 class="fs-5  txt-color">ON BOARDING PROCESS FOR PMS (documents / processes)
                     </h3>
                     <p class="font text-black-50">
                         Stay ahead of the curve and make informed decisions with our curated content, designed to
                         empower
                         you on your investment journey.
                     </p>
                 </div>
             </div>
         </section>

         <section class="container col-md-9 mt-5 rounded-2">
             <div class="row justify-content-center">

                 @foreach ($pmsDocument as $item)
                     <div class="col-md-2 col-8 mb-3">
                         <div class="card p-4 border">
                             <div class="d-flex justify-content-center">
                                 <h3><i class="bi bi-filter-square text-black-50"></i></h3>
                             </div>
                             <div class="text-center font txt-color mb-0 mt-2">
                                 {{ $item->title }}
                             </div>
                         </div>
                     </div>
                 @endforeach

             </div>
         </section>
     </main>
 @endsection
