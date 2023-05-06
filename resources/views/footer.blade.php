@yield('FooterContent')
 <footer class="ftco-footer ftco-bg-dark ftco-section">
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
                <li><a href="{{route('CheckEmailFirst')}}" id="SelfRegister"><span class="ion-ios-arrow-round-forward mr-2"></span>Djamat's member registration</a></li>
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
    </footer>