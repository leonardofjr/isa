@extends('frontend.layouts.app')
@section('title', 'About - Over 20 years of cleaning service experience')
@section('meta-seo')
    <meta name="description"  content="We've been providing professional janitorial services to commercial facilities in Markham and other areas such as Stouffville and Richmond Hill.">
@endsection
@section('content')

          <section class="container main-section section-1">
              <div class="row">
                  
                 <div class="col-lg-6 image-wrap-8 p-0">
                    <img align="right" src="imgs/reliable-cleaning-service.png" alt="Two businessmen shaking hands.">
                  </div>

                 <div class="col-lg-6 p-0" >
                     <div class=" p-3" style="width 100%; height: 100%">
                      <h1 class="text-uppercase font-weight-bold">{{Request::route()->getName()}}</h1>
                      <p>For over 20 years ISA Commercial Cleaning Services has been providing professional janitorial services to commercial facilities. We have developed systems and processes to ensure the highest degree of quality control and communication. Many businesses in Markham and surrounding areas rely on our commercial cleaning services to keep their facilities healthy and clean every day.</p>
                      </div>
                  </div>


              </div>
            </section>

            <section class="container">
              <div class="row">

                 <div class="col-lg-6 p-0">
                    <div class="bg-primary p-3" style="width: 100%; height: 100%">
                        <h2>OUR CUSTOMER EXPERIENCE AND COMMUNICATION ENSURES YOU GET EVERY BANG FOR YOUR BUCK</h2>
                        <p>We do have dedicated teams of personnel with hands on experience that are always committed to provide reliable and competitive services to all our clients. We execute all our jobs timely to a high safety and quality standard.</p>
                        <ul>
                          <li>Excellent communication and response rate to provide you with the best janitorial services</li>
                          <li>Bonded & Insured for your peace of mind</li>
                          <li>Performance Assurance Program ensures you get the best commercial cleaning service you deserve</li>
                        </ul>
                      </div>
                  </div>

                  <div class="col-lg-6 image-wrap-7 mb-4 mb-lg-0 p-0">
                    <img  src="imgs/business-meeting.png" alt="Three businessmen negioating cleaning quote.">
                  </div>

              </div>
            </section>
     
            <section class="container">
              <div class="row">
                   <div class="col-lg-5 offset-lg-1 d-none d-md-block p-0">
                     <img class="img-fluid"src="imgs/business-man-on-phone.png" alt="">
                  </div>
                    <div class="col-lg-5 p-3 p-lg-4 bg-primary">
                    <h2>PERFORMANCE ASSURANCE PROGRAM</h2>
                    <p>Ask about our performance assurance program that helps to gurantee you high performance cleaning services all the time.</p>
                    <ul>
                      <li>Task List</li>
                      <li>Time Logs</li>
                      <li>Training</li>
                      <li>Inspections</li>
                    </ul>
                  </div>
              </div>
            </div>
         </section>

@endsection