@extends('frontend.layouts.app')
@section('title', 'Best cleaning services | Markham, Stouffville, Richmond Hill')
@section('meta-seo')
    <meta name="description"  content="ISA Commercial Cleaning Services has been providing commercial and janitorial cleaning services for offices, churches, daycares, schools and much more.">
@endsection
@section('content')
<section id="jumbotron" class="d-md-flex align-items-md-center">
    <div class="jumbotron-overlay"></div>
        <div class="container">
            <div class="row content">
                <div class="col-md-8">
                    <h1 class="h1 pb-3">BEST PROFESSIONAL CLEANING SERVICES IN MARKHAM, RICHMOND HILL AND PICKERING. </h1>
                    <p class="lead text-uppercase">Cleaning satisfaction starts with communication.</p>
                    <p>Stop wasting money in poor cleaning services that promise but never deliver and just <a class="link" href="contact">contact us</a> to find out why we're Markham's most reliable cleaning service today.</p>
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
    <section class="container main-section section-2">
              <div class="row">

                 <div class="col-lg-6 p-0">
                    <div class=" p-3" style="width: 100%; height: 100%">
                    <h2>CLEANING OFFICES, SCHOOLS AND MUCH MORE FOR OVER 20 YEARS</h2>
                    <p>For over 20 years we have provided professional janitorial services in Markham and surrounding areas such as Whitchurch Stouffville and Richmond Hill</h1>
                      </div>
                  </div>

                  <div class="col-lg-6 image-wrap-7 mb-4 mb-lg-0 p-0">
                    <img  src="imgs/floor-scrubbing-machine.png" alt="A floor cleaning specialist scrubbing marble floors with a professional floor scrubbing machine">
                  </div>

              </div>
    </section>
    
    <section class="container mb-4">
              <div class="row">
                  
                 <div class="col-lg-6 image-wrap-8 p-0 d-none d-md-block">
                    <img  class="float-right" src="imgs/bucket-cleaning-supplies.png" alt="Office cleaner holding a bucket of office cleaning supplies.">
                  </div>

                 <div class="col-lg-6 p-0" >
                     <div class=" bg-primary p-3" style="width 100%; height: 100%">
                        <h2>CUSTOMER SATISFACTION ISN’T A MOP OR A BROOM, IT’S COMMUNICATION</h2>
                        <p>For over 20 years we have provided professional janitorial services in Markham and surrounding areas such as Whitchurch Stouffville and Richmond Hill</h1>
                      </div>
                  </div>


              </div>
    </section>


    <section class="main-section section-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 bg-primary p-3 p-lg-5">
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
@endsection