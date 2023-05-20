<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Halawa all muslims</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="../../style/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
		<script src="../../style/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <style >
    	.staff{
    		 box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
         transition: 0.3s;
    	}
    </style>
  </head>
  <body>
	  <div class="py-2 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		<div class="col-md-5 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
                  <span class="text">IPRC TUMBA'S MUSLIMS</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                    <span class="text">halawa@email.com</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                    <span class="text">+250787943106</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
           <a class="navbar-brand" href="#"><i class="fas fa-mosque"></i>&nbsp;Halawat al-iman</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span>
	      </button>
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	     <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{url('/')}}" class="nav-link pl-0"><i class="icon-home"></i>&nbsp;Home</a></li>
                <li class="nav-item"><a href="{{url('activity')}}" class="nav-link"><i class="icon-cogs"></i>&nbsp;Activity</a></li>
                <li class="nav-item active"><a href="{{route('muslims')}}" class="nav-link"><i class="icon-users"></i>&nbsp;All muslims</a></li>
                <li class="nav-item"><a href="{{url('gallery')}}" class="nav-link"><i class="icon-image"></i>&nbsp;Gallery</a></li>
              <li class="nav-item"><a href="{{url('contact')}}" class="nav-link"><i class="icon-phone"></i>&nbsp;Contact</a></li>
              <li class="nav-item d-flex"><a href="#" class="nav-link" data-toggle="modal" data-target="#logoutModal"><i class="icon-user"></i>&nbsp;Login</a></li>
            </ul>
          </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">All muslims</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>All-muslims <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
					@foreach($datas as $data)
							<div class="col-md-6 col-lg-3 ftco-animate">
								<div class="staff">
									<div class="img-wrap d-flex align-items-stretch">
										<img class="img align-self-stretch" src="{{asset('images/admin/'.$data->image)}}">
									</div>
									<div class="text pt-3 text-center">
										<h3>{{$data->firstname}} {{$data->lastname}}</h3>
										<span class="position mb-2">{{$data->role}}</span>
										<p>
											<?php
												if($data->study_status == "Graduated" || $data->study_status == "graduated"){
														echo "Graduated ".$data->start_year."-".$data->end_year;
												}else{
														echo "Still studying ".$data->start_year."-present";
												}
											?>
										</p>
										<div class="faded">
											<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
											<ul class="ftco-social text-center">
				                <li class="ftco-animate"><a href="tel:{{$data->phone}}"><span class="icon-phone"></span></a></li>
				                <li class="ftco-animate"><a href="https://wa.me:{{$data->phone}}"><span class="icon-whatsapp"></span></a></li>
				                <li class="ftco-animate"><a href="mailto:{{$data->email}}"><span class="icon-envelope"></span></a></li>
				              </ul>
			              </div>
									</div>
								</div>
							</div>
					@endforeach

					

				</div>
			</div>
		</section>

				<div class="row justify-content-center">
          <div class="col-md-12 text-center ftco-animate">
            <span class="mb-4">{{$datas->links()}}</span>
          </div>
        </div> 

		@extends('footer')
    @section('FooterContent')
    @endsection

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>