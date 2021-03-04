<?php
  require_once 'inc/functions/config.php';

  if (isset($_POST['submit'])){
    $response = UpdateCont($_POST);

    if ($response === true) {
        echo "<script>alert('right')</script>";
    } else {
        if (is_array($response)) {
            foreach ($response as $err) {
                echo "<script>alert('$err')</script>";
            }
        } else{
            echo "<script>alert('Failed')</script>";
        }
    }
}


  $title = "World Brain Technology";
  require_once 'components/header.php';
  ?>
    <!-- Page Content-->
    <!-- Hero-->
    <section class="bg-parallax py-5"><span class="bg-overlay" style="opacity: .6;"></span>
      <div class="bg-parallax-img" data-parallax="{&quot;y&quot; : 100}"><img src="img/pages/contacts-hero-bg.jpg" alt="Parallax Background"/>
      </div>
      <div class="bg-parallax-content px-3 py-md-5 mx-auto mt-lg-5 mb-lg-5 text-center" style="max-width: 800px;">
        <h1 class="text-white pt-2">Get in touch with us!</h1>
        <p class="text-xl text-white opacity-80 pb-3">Share your ideas with us and we do our best to turn your ideas into reality.</p>
      </div>
    </section>
    <!-- Contact Details-->
    <section class="container-fluid mb-5">
      <div class="row">
        <div class="col-md-3 col-sm-6 border-right py-2 border-bottom"><a class="scroll-to icon-box text-center mx-auto box-shadow-none px-0" href="#map">
            <div class="icon-box-icon"><i class="fe-icon-map-pin"></i></div>
            <h3 class="icon-box-title">Find us</h3>
            <p class="icon-box-text font-weight-medium">396 OGUI Blvd, UWANI, ENUGU 11741, NIGERIA</p></a></div>
        <div class="col-md-3 col-sm-6 py-2 border-right border-bottom"><a class="icon-box text-center mx-auto box-shadow-none px-0" href="tel:+1212477690000">
            <div class="icon-box-icon"><i class="fe-icon-phone"></i></div>
            <h3 class="icon-box-title">Call us</h3>
            <p class="icon-box-text font-weight-medium">+(234) 814 234 567</p></a></div>
        <div class="col-md-3 col-sm-6 py-2 border-right border-bottom"><a class="icon-box text-center mx-auto box-shadow-none px-0" href="mailto:support@example.com">
            <div class="icon-box-icon"><i class="fe-icon-mail"></i></div>
            <h3 class="icon-box-title">Email us</h3>
            <p class="icon-box-text font-weight-medium">support@example.com</p></a></div>
        <div class="col-md-3 col-sm-6 py-2 border-bottom"><a class="icon-box text-center mx-auto box-shadow-none px-0" href="#">
            <div class="icon-box-icon"><i class="fe-icon-facebook"></i></div>
            <h3 class="icon-box-title">Follow us</h3>
            <p class="icon-box-text font-weight-medium">Facebook, Twitter, LinkedIn</p></a></div>
      </div>
    </section>
    <!-- Contact Form-->
    <section class="container mb-5 pb-3">
      <div class="wizard">
        <div class="wizard-body pt-3">
          <h2 class="h4 text-center">Drop us a line</h2>
          <p class="text-muted text-center">We will get back to you as soon as possible</p>
          <form method="POST" class="needs-validation"  novalidate  enctype="multipart/form-data">
            <div class="row pt-3">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="contact-name">Your Name <span class='text-danger font-weight-medium'>*</span></label>
                  <input class="form-control" name="name" type="text" id="contact-name"  placeholder="John Doe" required>
                  <div class="invalid-feedback">Please enter your name!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="contact-email">Your Email <span class='text-danger font-weight-medium'>*</span></label>
                  <input class="form-control" name="email" type="email" id="contact-email"  placeholder="johndoe@email.com" required>
                  <div class="invalid-feedback">Please provide a valid email address!</div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="contact-subject">Subject</label>
                  <input class="form-control" name="subject" type="text" id="contact-subject"  placeholder="Provide short title of you request">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="contact-file">Attachment</label>
                  <div class="custom-file">
                    <input class="custom-file-input" type="file" id="contact-file" name="attach">
                    <label class="custom-file-label" for="contact-file">Choose file...</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="contact-message">Message <span class='text-danger font-weight-medium'>*</span></label>
              <textarea class="form-control" name="message" rows="7" id="contact-message"  placeholder="Let us know more what's on your mind..." required></textarea>
              <div class="invalid-feedback">Please write a message!</div>
            </div>
            <div class="text-center">
              <button onclick="sendEmail()" class="btn btn-primary" name="submit" type="submit">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- Map-->
    <section class="google-map" id="map" data-height="400" data-address="New York, USA" data-zoom="10" data-disable-controls="false" data-scrollwheel="false" data-marker="img/map-marker.png" data-marker-title="We are here!" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FFBB00&quot;},{&quot;saturation&quot;:43.400000000000006},{&quot;lightness&quot;:37.599999999999994},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FFC200&quot;},{&quot;saturation&quot;:-61.8},{&quot;lightness&quot;:45.599999999999994},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FF0300&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:51.19999999999999},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FF0300&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:52},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#0078FF&quot;},{&quot;saturation&quot;:-13.200000000000003},{&quot;lightness&quot;:2.4000000000000057},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#00FF6A&quot;},{&quot;saturation&quot;:-1.0989010989011234},{&quot;lightness&quot;:11.200000000000017},{&quot;gamma&quot;:1}]}]"></section>
    <!-- Footer-->
    <footer class="bg-dark pt-5">
      <div class="container pt-2">
        <div class="row">
          <div class="col-lg-3 pb-4 mb-2"><a class="navbar-brand d-inline-block mb-4" href="index.html"><img src="img/logo/logo-light.png" alt="CreateX"></a>
            <p class="text-sm text-white opacity-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utar enim ad minim veniam.</p>
            <ul class="list-icon text-sm pb-2">
              <li><i class="fe-icon-map-pin text-white opacity-60"></i><a class="navi-link text-white" href="#">
                   &nbsp;396 Lillian Blvd, Holbrook, NY, USA</a></li>
              <li><i class="fe-icon-phone text-white opacity-60"></i><a class="navi-link text-white" href="tel:+23481234567">
                   &nbsp;+(234) 81 234 567</a></li>
              <li><i class="fe-icon-mail text-white opacity-60"></i><a class="navi-link text-white" href="mailto:support@example.com">
                   &nbsp;support@example.com</a></li>
            </ul><a class="social-btn sb-style-6 sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-6 sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-6 sb-youtube sb-light-skin" href="#"><i class="socicon-youtube"></i></a><a class="social-btn sb-style-6 sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a>
          </div>
          <div class="col-lg-6">
            <div class="widget widget-light-skin mb-0">
              <h4 class="widget-title">Useful Links</h4>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="widget widget-categories widget-light-skin">
                  <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Careers at CreateX</a></li>
                    <li><a href="#">Services We Provide</a></li>
                    <li><a href="#">Latest News</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="widget widget-categories widget-light-skin">
                  <ul>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">My Account Info</a></li>
                    <li><a href="#">Affiliate Program</a></li>
                    <li><a href="#">Office Directory</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget widget-light-skin">
              <h4 class="widget-title">Our mobile app</h4><a class="market-btn apple-btn market-btn-light-skin mr-3 mb-3" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-btn google-btn market-btn-light-skin mr-3 mb-3" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-btn windows-btn market-btn-light-skin mr-3 mb-3" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Subscription-->
      <div class="pt-5" style="background-color: #30363d;">
        <div class="container">
          <h6 class="text-white text-center">Subscribe to Newsletter</h6>
          <div class="row justify-content-center pb-5">
            <div class="col-xl-6 col-lg-7 col-md-9">
              <form action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" target="_blank" novalidate>
                <div class="input-group">
                  <input class="form-control form-control-light-skin" type="email" name="EMAIL" placeholder="Email address">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Sign Up</button>
                  </div>
                </div><small class="form-text text-white opacity-50 pt-1 text-center">Enter email to receive a newsletter with new posts daily.</small>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                </div>
              </form>
            </div>
          </div>
          <hr class="hr-light">
          <div class="d-md-flex justify-content-between align-items-center py-4 text-center text-md-left">
            <div class="order-2"><a class="footer-link text-white" href="#">About</a><a class="footer-link text-white ml-3" href="#">Help &amp; Info</a><a class="footer-link text-white ml-3" href="#">Privacy Policy</a></div>
            <p class="m-0 text-sm text-white order-1"><span class='opacity-60'>© All rights reserved. Made with</span> <i class='d-inline-block align-middle fe-icon-heart text-danger'></i> <a href='http://createx.studio/' class='d-inline-block nav-link text-white opacity-60 p-0' target='_blank'>by Createx Studio</a></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="js/vendor.min.js"></script>
    <script src="js/theme.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
    <script src="js/jquery.js"></script>

    <script type="text/javascript">
        function sendEmail(){
            console.log('sending...');
            var name = $("#contact-name");  
            var email = $("#contact-email");  
            var subject = $("#contact-subject");  
            var file = $("#contact-file");
            var body = $("#contact-message");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)){
                console.log('passed condition...');

                $.ajax({
                    url: 'email.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        file: file.val()
                        message: message.val()
                    }, success: function (response){
                        console.log(response);
                    }

                });
            }  

        }

        function isNotEmpty(caller){
            if (caller.val() == ""){
                caller.css('border', 'lpx solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
  </body>
</html>