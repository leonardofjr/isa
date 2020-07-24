@extends('frontend.layouts.app')
@section('title', 'Quote - ISA Commercial Cleaning Services')
@section('meta-seo')
    <meta name="description"  content="We provide cleaning services in Markham and surrounding areas such as Stouffville and Richmond Hill">
@endsection
@section('content')
<section class="container">
   <div class="row">
      <div class="col-lg-6">
        <h1 class="text-uppercase font-weight-bold">{{Request::route()->getName()}}</h1>
        <div>
            <p>We provide free commercial cleaning estimates.&nbsp;Simply complete our quick form, and a&nbsp;member of our team will be in touch with you to discuss your needs and set up a time to meet and see your facility.</p>
            <h3>Customer Satisfaction is our Mission.&nbsp;</h3>
            <p>We’re proud to deliver excellent cleaning services each and every day. Your satisfaction is extremely important to us.</p>
            <p>Every hour of every day, we strive to:</p>
            <ul>
               <li>Provide our customers with a level of high-quality cleaning services.</li>
               <li>Commit to every cleaning project with 100 percent dedication.</li>
               <li>Communicate with our customers</li>
            </ul>
         </div>
      </div>
      <div class="col-lg-6">
        @include('frontend.components.forms.free-quote')
      </div>
   </div>
</section>
@endsection