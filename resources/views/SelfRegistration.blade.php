<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Halawat Self-registration</title>
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        #nextbtn:hover,#backbtn:hover{
            cursor: pointer;
            background-color:black;
            color:white;
            border:1px solid yellow;

        }

        #nextbtn,#backbtn{
            background-color: white;
            color: black;
            border-radius: 20px;
            justify-content: center;
            justify-items: center;
            text-align: center;
            padding:5px;
        }

        #HidePswdId,#ShowPswdId,#HidePswdId1,#ShowPswdId1{
            margin-top:20px;margin-left: -25px;
        }

        #ShowPswdId:hover,#HidePswdId:hover,#ShowPswdId1:hover,#HidePswdId1:hover{
            cursor: pointer;
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
						    <span class="text">IPRC TUMBA's MUSLIMS</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">halawa@gmail.com</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+25780000000</span>
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
                <li class="nav-item"><a href="{{route('muslims')}}" class="nav-link"><i class="icon-users"></i>&nbsp;All muslims</a></li>
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
            <h1 class="mb-2 bread">Self registration</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Self-registration <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

        @if(session('registers'))
            <div style="margin-top:5px;" class="alert btn-success alert-dismissible fade show text-center" role="alert">
                  {{session('registers')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:25px;">&times;</span>
              </button>
            </div>
        @endif

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            @if($errors->any())
                <div style="margin-top:5px;" class="alert btn-danger alert-dismissible fade show text-center" role="alert">
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" style="font-size:25px;">&times;</span>
                    </button>
                </div>
            @endif
        </div>  
        <div class="col-md-3"></div>
    </div>

    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="margin-top:5px; background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 py-5 px-md-5 bg-primary">
              <div class="heading-section heading-section-white ftco-animate mb-5 text-center">
                <h2 class="mb-4">Register&nbsp;here</h2>
              </div>
              <form action="{{route('RegisterMuslim')}}" class="appointment-form ftco-animate" method="POST" enctype="multipart/form-data">
                @csrf
                  <div id="page1">

                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Firstname" name="firstname" value="{{old('firstname')}}">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" value="{{old('lastname')}}" placeholder="Enter Lastname" name="lastname">
                            </div>
                        </div>

                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="email" class="form-control" value="{{old('email')}}" placeholder="Enter Email" name="email">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" value="{{old('phone')}}" placeholder="Enter Phone" name="phone">
                            </div>
                        </div>

                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="gender" id="" class="form-control" style="background-color:white;color: steelblue;">
                                          <option value="">Select gender</option>
                                          <option value="Male">Male</option>
                                          <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                </div>

                            <div class="form-group ml-md-4">
                                  <input type="date" class="form-control" placeholder="birth_date" name="birth_date" value="{{old('birth_date')}}">
                            </div>
                        </div>

                        <div class="d-md-flex">
                            <div class="form-group">
                               <select name="role" id="" class="form-control">
                                    <option value="">Select role</option>
                                    <option value="Amir">Amir</option>
                                    <option value="Vice_amir">Vice amir</option>
                                    <option value="Mudirat">Mudirat</option>
                                    <option value="Vice_mudirat">Vice mudirat</option>
                                    <option value="Dawat">Dawat</option>
                                    <option value="Imam">Imam</option>
                                    <option value="Bilal">Bilal</option>
                                    <option value="Ustaz">Ustaz</option>
                                    <option value="Mamuma">Mamuma(usual muslim)</option>
                                </select>
                            </div>
                            <div class="form-group ml-md-4 d-flex justify-content-center align-items-center">
                              <span id="nextbtn" onclick="nextfn()">Next&nbsp;<i class="fas fa-chevron-right"></i></span>

                            </div>
                        </div>
            
                </div>
                
                <div id="page2" style="display:none;">
                    
                    <div class="d-md-flex">
                            <div class="form-group">
                                <input type="residence" class="form-control" placeholder="Enter Residence ex:Rwanda" name="residence" value="{{old('residence')}}">
                            </div>
                            <div class="form-group ml-md-4">
                                 <select name="study_status" id="" class="form-control">
                                    <option value="">Study status</option>
                                    <option value="Graduated">Graduated</option>
                                    <option value="still_studying" id="still_stuid" onclick="still_stufn()">Still_studying</option>
                                </select>
                            </div>
                        </div>

                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" name="start_year" placeholder="Enter start_year ex:2007" value="{{old('start_year')}}">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" value="{{old('end_year')}}" name="end_year" placeholder="Enter End_year ex:<?php echo date('Y');?>">
                            </div>
                        </div>

                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="department" id="" class="form-control">
                                          <option value="">Select department</option>
                                          <option value="IT">IT</option>
                                          <option value="ET">ET</option>
                                          <option value="RE">RE</option>
                                          <option value="MT">MT</option>
                                        </select>
                                    </div>
                                </div>
                                </div>

                            <div class="form-group ml-md-4 d-flex">
                                <input type="password" class="form-control" name="password" placeholder="Password" value="{{old('password')}}" id="pswdid">
                                <i class="fas fa-eye-slash" onclick="ShowPswdFn()" id="ShowPswdId"></i>
                                <i class="fas fa-eye" style="display:none;" onclick="ShowPswdFn()" id="HidePswdId"></i>
                            </div>
                        </div>

                        <div class="d-md-flex">
                            <div class="form-group d-flex">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Re_enter Password" id="pswdid1">
                                <i class="fas fa-eye-slash" onclick="ShowPswdFn1()" id="ShowPswdId1"></i>
                                <i class="fas fa-eye" style="display:none;" onclick="ShowPswdFn1()" id="HidePswdId1"></i>
                            </div>
                            <div class="form-group ml-md-4 d-flex justify-content-center align-items-center">
                              <span id="backbtn" onclick="backfn()"><i class="fas fa-chevron-left"></i>&nbsp;Back</span>&nbsp;&nbsp;&nbsp;<button class="btn btn-secondary" style="background-color:black; width:120px;color:white"><i class="fas fa-save"></i>&nbsp;Submit</button>
                            </div>
                        </div>

                </div>

              </form>
            </div>
        </div>
        </div>
    </section>
		
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
    
  <script>
      function nextfn(){
          var page1=document.getElementById('page1');
          var page2=document.getElementById('page2');

          page1.style.display="none";
          page2.style.display="block";

      }    

    function backfn(){
          var page1=document.getElementById('page1');
          var page2=document.getElementById('page2');

          page1.style.display="block";
          page2.style.display="none";

    }

    function ShowPswdFn(){
        var x=document.getElementById('pswdid');
        if (x.type === "password") {
            x.type = "text";
            document.getElementById('ShowPswdId').style.display="none";
            document.getElementById('HidePswdId').style.display="block";
        }else{
            x.type="password";
            document.getElementById('ShowPswdId').style.display="block";
            document.getElementById('HidePswdId').style.display="none";
        }
    }

    function ShowPswdFn1(){
        var x=document.getElementById('pswdid1');
        if (x.type === "password") {
            x.type = "text";
            document.getElementById('ShowPswdId1').style.display="none";
            document.getElementById('HidePswdId1').style.display="block";
        }else{
            x.type="password";
            document.getElementById('ShowPswdId1').style.display="block";
            document.getElementById('HidePswdId1').style.display="none";
        }
    }
  
  </script>

  </body>
</html>