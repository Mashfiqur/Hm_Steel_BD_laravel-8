@extends('layout')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
	
@endsection


@section('container')
<div class="row py-5"></div>

<div class="container py-5" >
<div class="row offset-5 text-info">

<h1 class=" ml-5"><strong>Please Leave a Message</strong></h1>
</div>
  <div class="row mt-3">
      <div class=" col-3" >
	  <div class="card py-5" style="background-color: #a8ccd7;">
     
     <div class="container text-center text-dark">
       <div class="row container">
	      <h4 class="text-white ml-5 "><strong>UK Office</strong></h4>
		  <p class="text-justify">3 Bankside Park, 28 Thames Road, Barking, IG11 0HZ</p>
	   </div>
	   <hr>
	   <div class="row container">
	      <h4 class="text-white text-center"><strong>Bangladesh Office</strong></h4>
		  <p class="text-justify">
Mashru Cottage, House: 23, Road: 3/C, Sector: 9, Uttara Model Town 1230 Dhaka, Dhaka Division, Bangladesh</p>
	   </div>
       </div>
  
      </div>
	  </div>

	  <div class="col-9">
	  <div class="wrapper">
          <!-- @if(Session::has('success'))
          <div class="alert alert-success" role="alert">
              {{Session::get('success')}}
           </div>
           @endif -->
    <form method="post" action="{{ url('/contact/send') }}" class="ccform">
	@csrf
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
        <input class="ccformfield" type="text" name="fname" value="{{old('fname')}}" placeholder="Full Name" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-envelope fa-2x"></i></span>
        <input class="ccformfield" type="text" name="email" value="{{old('email')}}" placeholder="Email" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-mobile-phone fa-2x"></i></span>
        <input class="ccformfield" type="text" name="phone" value="{{old('phone')}}" placeholder="Phone">
    </div>
     <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-info fa-2x"></i></span>
        <input class="ccformfield" type="text" name="subject" value="{{old('subject')}}" placeholder="Subject" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-comment fa-2x"></i></span>
        <textarea class="ccformfield" name="message" rows="8" placeholder="Message" required></textarea>
    </div>
    <div class="ccfield-prepend" style="margin-left:40%;">
        <input class="btn btn-info px-5 " type="submit" value="Submit">
    </div>
    </form>
</div>
	  </div>

  </div>


	
  </div>

@endsection
@section('js')
<script src="{{asset('js/contact.js')}}"></script>

@endsection













