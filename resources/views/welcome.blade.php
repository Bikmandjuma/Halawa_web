<!DOCTYPE html>
<?php
use App\Models\User;

$allmuslim=User::all();
$allmuslim_count=collect($allmuslim)->count();

$muslim_still_studying=User::all()->where('study_status','still_studying');
$muslim_still_studying_count=collect($muslim_still_studying)->count();

$boys_muslim_still_studying=User::all()->where('study_status','still_studying')->where('gender','male');
$boys_muslim_still_studying_count=collect($boys_muslim_still_studying)->count();

$girls_muslim_still_studying=User::all()->where('study_status','still_studying')->where('gender','female');
$girls_muslim_still_studying_count=collect($girls_muslim_still_studying)->count();

?>
<html lang="en">
  <head>
  <title>{{ config('app.name', '') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style/login.css">
    
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    
    <style>
/*        #login_form input[type="email"],input[type="password"]{
            border-radius:5px;
            margin-bottom:10px;
            border:none;
            border-bottom:2px solid gray;
        }*/
    </style>
  </head>
  <body>
    @if(session('wrong_login'))
        <script type="text/javascript">toastr.error('Wrong Credentials , try again !');</script>
    @endif
      <div class="py-2 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0" style="border" >
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
            <a class="navbar-brand" href="#"><i class="oi oi-mosque"></i>&nbsp;Halawat al-iman</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span>
          </button>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{url('/')}}" class="nav-link pl-0"><i class="icon-home"></i>&nbsp;Home</a></li>
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
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <!-- <h1 class="mb-4">Halawat al-iman <span>Muslims of Iprc tumba</span></h1> -->
            <!-- <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p> -->
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <!-- <h1 class="mb-4">Halawat al-iman <span>Muslims of Iprc tumba</span></h1> -->

            <!-- <h1 class="mb-4">Perfect Learned<span> For Your Child</span></h1> -->
            <!-- <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p> -->
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <!-- <h1 class="mb-4">Halawat al-iman <span>Muslims of Iprc tumba</span></h1> -->
            
            <!-- <h1 class="mb-4">Perfect Learned<span> For Your Child</span></h1> -->
            <!-- <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p> -->
          </div>
        </div>
        </div>
      </div>
<!-- 
      <div class="slider-item" style="background-image:url(images/bg_4.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
          </div>
        </div>
        </div>
      </div> -->
    </section>

    <section class="ftco-services ftco-no-pb">
            <div class="container-wrap">
                <div class="row no-gutters">
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-teacher"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Certified Teachers</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-reading"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Special Education</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-books"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Book &amp; Library</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-diploma"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Certification</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
            </div>
        </section>
        
        <section class="ftco-section ftco-no-pt ftc-no-pb">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
                        <div class="text px-4 ftco-animate">
                <h2 class="mb-4">Welcome to Kiddos Learning School</h2>
                            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her.</p>
                            <p><a href="#" class="btn btn-secondary px-4 py-3">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            <h2 class="mb-4">What We Offer</h2>
                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
                                    <div class="text">
                                        <h3>Safety First</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                                    <div class="text">
                                        <h3>Regular Classes</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                                    <div class="text">
                                        <h3>Certified Teachers</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                                    <div class="text">
                                        <h3>Sufficient Classrooms</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                                    <div class="text">
                                        <h3>Creative Lessons</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                                    <div class="text">
                                        <h3>Sports Facilities</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="ftco-intro" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Teaching Your Child Some Good Manners</h2>
                        <p class="mb-0">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                    <div class="col-md-3 d-flex align-items-center">
                        <p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Take a Course</a></p>
                    </div>
                </div>
            </div>
        </section>

        
        <section class="ftco-section ftco-no-pb">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Certified</span> Teachers</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>  
                <div class="row">
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url(images/teacher-1.jpg);"></div>
                            </div>
                            <div class="text pt-3 text-center">
                                <h3>Bianca Wilson</h3>
                                <span class="position mb-2">Teacher</span>
                                <div class="faded">
                                    <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                    <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                      </ul>
                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url(images/teacher-2.jpg);"></div>
                            </div>
                            <div class="text pt-3 text-center">
                                <h3>Mitch Parker</h3>
                                <span class="position mb-2">English Teacher</span>
                                <div class="faded">
                                    <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                    <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                      </ul>
                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url(images/teacher-3.jpg);"></div>
                            </div>
                            <div class="text pt-3 text-center">
                                <h3>Stella Smith</h3>
                                <span class="position mb-2">Art Teacher</span>
                                <div class="faded">
                                    <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                    <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                      </ul>
                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url(images/teacher-4.jpg);"></div>
                            </div>
                            <div class="text pt-3 text-center">
                                <h3>Monshe Henderson</h3>
                                <span class="position mb-2">Science Teacher</span>
                                <div class="faded">
                                    <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                    <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                      </ul>
                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Our</span> Courses</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>  
                <div class="row">
                    <div class="col-md-6 course d-lg-flex ftco-animate">
                        <div class="img" style="background-image: url(images/course-1.jpg);"></div>
                        <div class="text bg-light p-4">
                            <h3><a href="#">Arts Lesson</a></h3>
                            <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                        </div>
                    </div>
                    <div class="col-md-6 course d-lg-flex ftco-animate">
                        <div class="img" style="background-image: url(images/course-2.jpg);"></div>
                        <div class="text bg-light p-4">
                            <h3><a href="#">Language Lesson</a></h3>
                            <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                        </div>
                    </div>
                    <div class="col-md-6 course d-lg-flex ftco-animate">
                        <div class="img" style="background-image: url(images/course-3.jpg);"></div>
                        <div class="text bg-light p-4">
                            <h3><a href="#">Music Lesson</a></h3>
                            <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                        </div>
                    </div>
                    <div class="col-md-6 course d-lg-flex ftco-animate">
                        <div class="img" style="background-image: url(images/course-4.jpg);"></div>
                        <div class="text bg-light p-4">
                            <h3><a href="#">Sports Lesson</a></h3>
                            <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
            <h2 class="mb-4"><span><?php echo date('Y')-2016;?> Years of </span> Working</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>  
            <div class="row d-md-flex align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="row d-md-flex align-items-center">
                  <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="icon"><span class="flaticon-doctor"></span></div>
                      <div class="text">
                        <strong class="number" data-number="{{$allmuslim_count}}">0</strong>
                        <span>All muslims</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="icon"><span class="flaticon-doctor"></span></div>
                      <div class="text">
                        <strong class="number" data-number="{{$muslim_still_studying_count}}">0</strong>
                        <span>Muslims still studying</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="icon"><span class="flaticon-doctor"></span></div>
                      <div class="text">
                        <strong class="number" data-number="{{$boys_muslim_still_studying_count}}">0</strong>
                        <span>Boys still studying</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="icon"><span class="flaticon-doctor"></span></div>
                      <div class="text">
                        <strong class="number" data-number="{{$girls_muslim_still_studying_count}}">0</strong>
                        <span>Girls still studying</span>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>What Parents</span> Says About Us</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
        <button class="btn btn-danger" data-toggle="modal" data-target="#logoutModal">Test model</button>
         <!--start of Logout modal -->
          <div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm text-center">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h5>Login here</h5>
                </div>
                <div class="modal-body">
                  <form class="form-group" id="login_form" method="POST" action="{{url('test')}}">
                    @csrf
                      <!-- <input type="email" name="email" class="form-control" placeholder="Enter email">
                      <input type="password" name="password" class="form-control" placeholder="Enter password">
                       -->
                       <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" type="email" name="email" autofocus id="emailid">  
                        <span class="focus-input100" data-placeholder="Email"></span>
                      </div>

                      <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                          <i class="icon-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password" id="passid">  
                        <span class="focus-input100" data-placeholder="Password"></span>
                      </div>
                      <button class="btn btn-primary" type="submit"><i class="icon-lock"></i> Login</button>
                  </form>
                  <p><i class="text-center text-primary"></i>Forgot password <br /></p>

                  <!-- <div class="actionsBtns">
                      <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}"/>
                      <a href="../Logout.php" class="btn btn-primary"><i class="fa fa-lock"></i>  Logout</a>
                      <button class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>  Cancel</button>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
         <!--end of logout modal-->

        <?php
            $user=User::all();
        ?>
        @foreach($user as $data)
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">{{$data->firstname}} {{$data->lastname}}</p>
                    <span class="position">Father</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/teacher-2.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/teacher-3.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Huff</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/teacher-4.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>

    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 py-5 px-md-5 bg-primary">
              <div class="heading-section heading-section-white ftco-animate mb-5">
                <h2 class="mb-4">Request A Quote</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
              <form action="#" class="appointment-form ftco-animate">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                            <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Select Your Course</option>
                        <option value="">Art Lesson</option>
                        <option value="">Language Lesson</option>
                        <option value="">Music Lesson</option>
                        <option value="">Sports</option>
                        <option value="">Other Services</option>
                      </select>
                    </div>
                      </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                      <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group ml-md-4">
                      <input type="submit" value="Request A Quote" class="btn btn-secondary py-3 px-4">
                    </div>
                        </div>
                    </form>
                </div>
        </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Our</span> Pricing</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
            <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="pricing-entry bg-light pb-4 text-center">
                    <div>
                        <h3 class="mb-3">Basic</h3>
                        <p><span class="price">$24.50</span> <span class="per">/ 5mos</span></p>
                    </div>
                    <div class="img" style="background-image: url(images/bg_1.jpg);"></div>
                    <div class="px-4">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Take A Course</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="pricing-entry bg-light pb-4 text-center">
                    <div>
                        <h3 class="mb-3">Standard</h3>
                        <p><span class="price">$34.50</span> <span class="per">/ 5mos</span></p>
                    </div>
                    <div class="img" style="background-image: url(images/bg_2.jpg);"></div>
                    <div class="px-4">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <p class="button text-center"><a href="#" class="btn btn-secondary px-4 py-3">Take A Course</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="pricing-entry bg-light active pb-4 text-center">
                    <div>
                        <h3 class="mb-3">Premium</h3>
                        <p><span class="price">$54.50</span> <span class="per">/ 5mos</span></p>
                    </div>
                    <div class="img" style="background-image: url(images/bg_3.jpg);"></div>
                    <div class="px-4">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <p class="button text-center"><a href="#" class="btn btn-tertiary px-4 py-3">Take A Course</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="pricing-entry bg-light pb-4 text-center">
                    <div>
                        <h3 class="mb-3">Platinum</h3>
                        <p><span class="price">$89.50</span> <span class="per">/ 5mos</span></p>
                    </div>
                    <div class="img" style="background-image: url(images/bg_5.jpg);"></div>
                    <div class="px-4">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <p class="button text-center"><a href="#" class="btn btn-quarternary px-4 py-3">Take A Course</a></p>
                </div>
            </div>
        </div>
        </div>
    </section>

        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Recent</span> Blog</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
                <div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_1.jpg');">
                                <div class="meta-date text-center p-2">
                  <span class="day">27</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
                    <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                    <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                    </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_2.jpg');">
                                <div class="meta-date text-center p-2">
                  <span class="day">27</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
                    <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                    <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                    </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_3.jpg');">
                                <div class="meta-date text-center p-2">
                  <span class="day">27</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
                    <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                    <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>
            </div>
        </section>

        <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                    <div class="col-md-3 ftco-animate">
                        <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/course-1.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_2.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_3.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_4.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
        </div>
        </div>
    </section>

    @extends('footer')
    @section('FooterContent')
    @endsection
    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script>

(function ($) {
    "use strict";

    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).find('i').removeClass('zmdi-eye');
            $(this).find('i').addClass('icon-eye');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).find('i').addClass('icon-eye');
            $(this).find('i').removeClass('zmdi-eye');
            showPass = 0;
        }
        
    });
})(jQuery);

  </script>
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