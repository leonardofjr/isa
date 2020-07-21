@extends('frontend.layouts.app')
@section('title', 'Best cleaning services | Markham, Stouffville, Richmond Hill')
@section('meta-seo')
    <meta name="description"  content="ISA Commercial Cleaning Services has been providing commercial and janitorial cleaning services for offices, places of worship, daycares, schools and much more.">
@endsection
@section('content')
@include('frontend.components.modals.free-quote')
<section id="jumbotron" class="d-md-flex align-items-md-center">
    <div class="jumbotron-overlay"></div>
        <div class="container">
            <div class="row content">
                <div class="col-md-8">
                    <h1 class="pb-3">BEST PROFESSIONAL CLEANING SERVICES IN MARKHAM</h1>
                    <p class="lead">Our mission is to provide you with a healthy clean environment for you, your staff and your visitors. <a class="link" href="get-a-free-quote"> Find out why we're the reliable cleaning service</a>.</p>
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

    <section class="container page py-5">
              <div class="row">
                 <div class="col-md-6">
                    <img class="img-fluid" src="imgs/welcome-image.png" alt="A floor cleaning specialist scrubbing marble floors with a professional floor scrubbing machine">
                  </div>
                 <div class="col-md-6">
                     <p>
                         WELCOME TO ISA COMMERCIAL CLEANING SERVICES
                        <h2 class="font-weight-bold">Great Toronto Area <br> Professional Cleaners.</h2>
                        ISA Commercial Cleaning Services is based in Markham and has been serving businesses all over the great toronto area for over 20 years; providing professional commercial cleaning services in cities and towns such as Toronto, Markham, Richmond Hill, Stouffville, Newmarket, Pickering and Oshawa. We have a large, dedicated team of qualified cleaners that primarily provide cleaning services for offices, schools, education facilities, child care centres, churches, gyms and sporting complexes.
                     </p>
                  </div>



              </div>
    </section>

    <section class="container page py-5">
        <h2 class="text-center">What We Clean</h2>
        <div class="row">
            <div class="col-md-3">
                <img class="img-fluid" src='{{asset("imgs/office-cleaning-services.png")}}' alt="sd">
                <h3>Office Cleaning</h3>
                <p>Welcome to ISA Commercial Cleaning Services. Your Professional Office Cleaning Service. We have been cleaning offices around the Great Toronto Area for over 20yrs. Providing competitive and affordable office cleaning solutions for offices across Toronto, Markham, Richmond Hill, Stouffville, Newmarket, Pickering and Oshawa.</p>
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src='{{asset("imgs/commercial-cleaning-services.png")}}' alt="sd">
                <h3>Commercial Cleaning</h3>
                <p>ISA Commercial Cleaning Services Welcomes You. We are Industry leaders offering Businesses a Professional Commercial Cleaning Company with Services All over the Toronto, Markham, Richmond Hill, Stouffville, Newmarket, Pickering and Oshawa. We Provide Commercial Cleaning Contracts at Competitive And Affordable Rates.</p>
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src='{{asset("imgs/childcare-cleaning-services.png")}}' alt="sd">
                <h3>Childcare Cleaning</h3>
                <p>ISA Commercial Cleaning Services is based in Markham offering Professional Childcare Cleaning Services With many years’ experience offering Our Clients Completive and Affordable Rates Satisfaction Guaranteed.</p>
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src='{{asset("imgs/gym-sporting-complex-cleaning-services.png")}}' alt="sd">
                <h3>Gym & Sporting Complex Cleaning</h3>
                <p>ISA Commercial Cleaning Services Welcomes You. We are Industry leaders offering businesses across the Toronto, Markham, Richmond Hill, Stouffville, Newmarket, Pickering and Oshawa Professional Cleaning Contractors for Gyms, Fitness Centres, and Sporting Complexes. We Provide Commercial Cleaning Contracts at Competitive And Affordable Rates.</p>
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src='{{asset("imgs/school-university-cleaning-services.png")}}' alt="sd">
                <h3>School & University Cleaning</h3>
                <p>ISA Commercial Cleaning Services is an industry cleaning leader. Offering Schools, TAFEs, & Universities Professional Cleaning Contractors at Competitive & Affordable Rates Satisfaction and Flexible Service Guaranteed in cities and towns such as Toronto, Markham, Richmond Hill, Stouffville, Newmarket, Pickering and Oshawa.</p>
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src='{{asset("imgs/retail-shopping-complex-cleaning-services.png")}}' alt="sd">
                <h3>Retail & Shopping Complex Cleaning</h3>
                <p>Welcome to ISA Commercial CLeaning Services We are leaders in our Industry, offering cleaning ervices in cities and towns such as Toronto, Markham, Richmond Hill, Stouffville, Newmarket, Pickering and Oshawa. Retail Businesses & Shopping Complexes The Best Professional Commercial Cleaners With Services All over the Great Toronto Area.</p>
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src='{{asset("imgs/cinema-theatre-complex-cleaning-services.png")}}' alt="sd">
                <h3>Cinema & Theatre Complex Cleaning</h3>
                <p>ISA Commercial Cleaning Services Welcomes You. Providing Commercial Cinema Cleaning & Theatre Cleaning with Services All over the Great Toronto Area. Our Rates are Affordable and competitive. Offering the Highest Standard in cleaning Services Customer Satisfaction Guaranteed.</p>
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src='{{asset("imgs/places-of-worship-cleaning-services.png")}}' alt="sd">
                <h3>Places of Worship Cleaning</h3>
                <p>ISA Commercial Cleaning Services Welcomes You. We are Industry leaders offering Businesses a Professional Commercial Cleaning Company with Services All over cities and towns such as Toronto, Markham, Richmond Hill, Stouffville, Newmarket, Pickering and Oshawa. We Provide Commercial Cleaning Contracts at Competitive And Affordable Rates.</p>
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
                       <h2 class="">CLEANING SATISFACTION BEGINS WITH COMMUNICATION</h2>
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
                    <h2>There are Many Reasons Why having a Clean Working Environment is Important</h2>
                    <p>
                        Here at ISA Commercial Cleaning Services we aim to ensure the Highest Standard in commercial and office cleaning for businesses in cities and towns such as Toronto, Markham, Richmond Hill, Stouffville, Newmarket, Pickering and Oshawa. Having flexible work hours and staff enables our company to offer the Best tailored office cleaning packages to suit our clients individual retirements and needs. Allowing for minimal to no disruption in the workplace or for your employees. Having a clean office working space and business can not only help increase productivity but also help lowering any occupation and safety problems that may occur by having a clean and safe work environment .
                    </p>
                    <p>We understand the importance of the high level of stranded needed in the Commercial cleaning Sector and carry out regular audits to sure our highest cleaning standards are maintained</p>
                </div>

                <div class="col-lg-6 p-3 p-lg-5">
                    <h2>There are Many Reasons Why having a Clean Working Environment is Important</h2>
                    <p>
                        The team at ISA Commercial Cleaning Services make this easy for you.
                        There are two great ways you can ensure a quality clean for your office and work place – You can employ cleaning professionals yourself or hire cleaning professionals from a commercial cleaning service in the Great Toronto Area like ISA Commercial Cleaning Services. Our High standards and internal checks we have in place, with our staff along with regular audits, give our clients peace of mind knowing there cleaning requirements will be done right the first time. Having a large team environment allows our company to not only be competitive and affordable for many business in town and cities such as Toronto, Markham, Richmond Hill, Stouffville, Newmarket, Pickering and Oshawa. needing Cleaning Contractors but also give our company the winning edge. By giving our clients the flexibility needed throughout the day when cleaning requirements are needed outside of business hours. Our individual tailored cleaning packages for both office cleaning and commercial cleaning makes cleaning easy. Call our team today for any cleaning advice or your cleaning needs.
                    </p>
                </div>
            </div>
         </div>
    </section>
@endsection