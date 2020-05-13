@extends('frontend.layouts.app')
@section('title', 'Best cleaning services | Markham, Stouffville, Richmond Hill')
@section('meta-seo')
    <meta name="description"  content="ISA Commercial Cleaning Services has been providing commercial and janitorial cleaning services for offices, churches, daycares, schools and much more.">
@endsection
@section('content')
@include('frontend.components.modals.free-quote')
<section id="jumbotron" class="d-md-flex align-items-md-center">
    <div class="jumbotron-overlay"></div>
        <div class="container">
            <div class="row content">
                <div class="col-md-8">
                    <h1 class="h1 pb-3">BEST PROFESSIONAL CLEANING SERVICES IN MARKHAM</h1>
                    <p class="lead">Stop wasting money in poor cleaning services that promise, but never deliver, <a class="link" href="contact">contact us</a> to find out why we're Markham's most reliable cleaning service today.</p>
                    <div class="btn-wrapper mb-3">
                        <a href="tel://6476889189"> <button class="btn btn-white-transparent font-weight-bold">(647) 688-9189</button></a>
                        <a mail="mailto:info@isaclean.ca"> <button class="btn btn-white-transparent font-weight-bold">info@isaclean.ca</button></a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="bg-white-transparent px-5 py-2">
                        <h3 class="pb-3">GET A FREE QUOTE</h3>
                        @include('frontend.components.forms.free-quote')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container page">
        <div class="row">
            <div class="col-md-4">
                Icon
            </div>
            <div class="col-md-4">
                Icon
            </div>
            <div class="col-md-4">
                Icon
            </div>
        </div>
    </section>

    <section class="container  page">
              <div class="row">
                 <div class="col-lg-6">
                    <img class="img-fluid" src="imgs/floor-scrubbing-machine.png" alt="A floor cleaning specialist scrubbing marble floors with a professional floor scrubbing machine">
                  </div>
                 <div class="col-lg-6">
                    <h2 class="text-uppercase">Markham<br>Professional Cleaners</h2>
                    <p>ISA Commercial Cleaning Services is based in Markham and has been serving Markham businesses for over 25 years; providing <a href="services">professional commercial cleaning services</a> across Markham. We have a large, dedicated team of qualified cleaners that primarily provide cleaning services for offices, schools, education facilities, child care centres, medical centres, gyms and sporting complexes.</a></p>
                  </div>



              </div>
    </section>
    <section class="container py-5 page">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-uppercase">FIRST IMPRESSIONS ARE IMPORTANT</h2>
                <p>We understand how important a first impression is to you, your employees and your visitors. We have over 25 years of experience providing professional cleaning services in Markham,  providng cleaning services such as office cleaning services, sanctuary cleaning services and <a href="services">much more.</a></p>
            </div>
            <div class="col-md-4">
                <img src="#" alt="">
            </div>
        </div>
    </section>
    <section class="bg-primary">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="float-right">
                        <div class="bg-white-transparent px-5 py-2">
                            <h3 class="pb-3">GET A FREE QUOTE</h3>
                            @include('frontend.components.forms.free-quote')
                        </div>
                    </div>

               </div>

                <div class="col-lg-8 text-right" >
                    <div class="content">
                       <h2 class="h2">CLEANING SATISFACTION BEGINS WITH COMMUNICATION</h2>
                       <p>ISA Commercial Cleaning Services believes that first step to provide the best cleaning services not with a mop or a broom, it's through listening, communicating and intiating.</h1>
                     </div>
                 </div>
             </div>
        </div>

    </section>


    <section class="main-section section-4">
        <div class="container page">
            <div class="row">
                <div class="col-lg-6 p-3 p-lg-5">
                    <h2>6 REASONS WE’RE THE BEST CLEANING SERVICE IN MARKHAM</h2>
                    <ol>
                        <li>Cleaning offices, schools and much more for over 20 years</li>
                        <li>Flexible programs to save you money</li>
                        <li>4 Step program designed to keep your facility clean and healthy</li>
                        <li>Fully insured for your peace of mind</li>
                        <li>Highly aware of the dangers of chemical based products and airborne dust</li>
                        <li>Customer Satisfaction starts with communication</li>
                    </ol>
                </div>

                <div class="col-lg-6 image-wrap p-0">
                     <img style="width: 100%"   src="/imgs/carpet-cleaning.png" alt="A professional cleaner vaccuming an office carpet.">
                </div>
            </div>
         </div>
    </section>

    <section>
        <div class="container page">

        </div>
    </section>
@endsection