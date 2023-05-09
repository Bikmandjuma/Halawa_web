@yield('FooterContent')
<?php
use App\Models\EnableSelfRegistration;
use App\Models\User;
$EnableRegister=EnableSelfRegistration::all()->where('status','Enable');
$count_Enable_reg=collect($EnableRegister)->count();

$Admin=User::all()->where('role','admin');
$Amir=User::all()->where('role','amir');

?>
 <footer class="ftco-footer ftco-bg-dark ftco-section">
    <style type="text/css">
      #contact_links a{
        color:black;
      }

    </style>
    <!--start of Register modal -->
          <div class="modal" id="RegisterModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm text-center">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h5><u>Register link is disabled</u></h5>
                </div>
                <div class="modal-body text-center align-center">
                  <p style="color:black;"><i class="fa fa-question-circle"></i>Please click link bellow to contact admin or amir to enable registration's link . <i class="icon-thumb-down"></i> </p><br />
                    <span id="contact_links">
                      <a href="#Admin" id="admin" onclick="adminfn()">Admin</a>&nbsp;|&nbsp;<a href="#Amir" id="amir" onclick="amirfn()">Amir</a></span>
                    <br />
                    <br />
                  <div id="adminx" style="display: none;">
                      @foreach($Admin as $admin)
                        <img src="{{asset('images/admin/'.$admin->image)}}" style="width:100px;height:100px;border-radius:50%;border: 1px solid skyblue;">
                        <br />
                        <h6 style="color:black;padding: 5px;">{{$admin->firstname}}&nbsp;{{$admin->lastname}}</h6>
                        <a href="tel:{{$admin->phone}}" class="btn btn-primary" title="call"><i class="icon-phone"></i></a>
                        <a href="https://wa.me/{{$admin->phone}}" class="btn btn-success" title="whatsapp"><i class="icon-whatsapp"></i></a>
                        <a href="mailto:{{$admin->email}}" class="btn btn-secondary" title="email"><i class="icon-paper-plane"></i></a>
                      @endforeach
                  </div>

                  <div id="amirx" style="display: none;">
                       @foreach($Amir as $amir)
                        <img src="{{asset('images/admin/'.$amir->image)}}" style="width:100px;height:100px;border-radius:50%;border: 1px solid skyblue;">
                        <br />
                        <h6 style="color:black;padding: 5px;">{{$amir->firstname}}&nbsp;{{$amir->lastname}}</h6>
                        <a href="tel:{{$amir->phone}}" class="btn btn-primary" title="call"><i class="icon-phone"></i></a>
                        <a href="https://wa.me/{{$amir->phone}}" class="btn btn-success" title="whatsapp"><i class="icon-whatsapp"></i></a>
                        <a href="mailto:{{$amir->email}}" class="btn btn-secondary" title="email"><i class="icon-paper-plane"></i></a>
                      @endforeach
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!--end of Register modal-->

      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Have a Questions?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">Bugarama,nyange,Mubogora</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+250787943106</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">zerocool@yourdomain.com</span></a></li>
                  </ul>
                </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Coming soon events</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/bg_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Vising jamat of ines ruhengeri</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2024</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 0</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/bg_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Visiting jamat of APEKI Tumba</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2025</a></div>
                    <div><a href="#"><span class="icon-person"></span> Amir</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 0</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{url('/')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href=""><span class="ion-ios-arrow-round-forward mr-2"></span>Activities</a></li>
                <li><a href="{{route('muslims')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Muslims</a></li>
                <li><a href="{{url('gallery')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Gallery</a></li>
                <li><a href="{{url('contact')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
                
                @if($count_Enable_reg == 0)
                  
                  <style>
                    #SelfRegister1{
                      display: none;
                    }
                  </style>
                @else
                  <style>
                    #SelfRegister2{
                      display: none;
                    }
                  </style>
                @endif

                <li><a href="#" id="SelfRegister1" data-toggle="modal" data-target="#RegisterModal"><span class="ion-ios-arrow-round-forward mr-2"></span>Djamat's member registration</a></li>
                <li><a href="{{route('CheckEmailFirst')}}" id="SelfRegister2"><span class="ion-ios-arrow-round-forward mr-2"></span>Djamat's member registration</a></li>
                <li><a href="" data-toggle="modal" data-target="#logoutModal"><span class="ion-ios-arrow-round-forward mr-2"></span>Login</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <!-- <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon icon-envelope"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon icon-whatsapp"></span></a></li>
              </ul>
            </div> -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Copyright &copy; 2016 - <script>document.write(new Date().getFullYear());</script> All rights reserved by Halawat al-iman (IPRC TUMBA)</p>
          </div>
        </div>
      </div>

      <script>
          function adminfn(){
              var admin=document.getElementById('adminx');
              var amir=document.getElementById('amirx');
              document.getElementById('admin').style.color="blue";
              document.getElementById('admin').style.fontSize="25px;";
              document.getElementById('amir').style.color="black";

              admin.style.display="block";
              amir.style.display="none";

          }     

          function amirfn(){
              var admin=document.getElementById('adminx');
              var amir=document.getElementById('amirx');
              document.getElementById('admin').style.color="black";
              document.getElementById('amir').style.color="blue";

              admin.style.display="none";
              amir.style.display="block";
          }     

      </script>
   
    </footer>