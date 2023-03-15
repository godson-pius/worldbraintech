<?php
require_once 'inc/functions/config.php';

if (isset($_POST['submit'])){
    $response = RegisterFrontEndClass($_POST);

    if ($response === true) {
        echo "<script>alert('Registration successful! We will get back to you as soon as possible!')</script>";
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


$title = "Contact | World Brain Technology";
require_once 'components/header.php';
?>
    <!-- Page Content-->
    <!-- Hero-->
    <section class="bg-parallax py-5"><span class="bg-overlay" style="opacity: .6;"></span>
      <div class="bg-parallax-img" data-parallax="{&quot;y&quot; : 100}"><img src="img/pages/contacts-hero-bg.jpg" alt="Parallax Background"/>
      </div>
      <div class="bg-parallax-content px-3 py-md-5 mx-auto mt-lg-5 mb-lg-5 text-center" style="max-width: 800px;">
        <h1 class="text-white pt-2">FrontEnd Class</h1>
        <p class="text-xl text-white opacity-80 pb-3">Join the frontEnd class and become exceptional within a month.</p>
      </div>
    </section>
    <!-- Contact Details-->
    <section class="container-fluid mb-5">
      <div class="row">
        <div class="col-md-3 col-sm-6 border-right py-2 border-bottom"><a class="scroll-to icon-box text-center mx-auto box-shadow-none px-0" href="#map">
            <div class="icon-box-icon"><i class="fe-icon-map-pin"></i></div>
            <h3 class="icon-box-title">Find us</h3>
            <p class="icon-box-text font-weight-medium">Enugu, Nigeria</p></a></div>
        <div class="col-md-3 col-sm-6 py-2 border-right border-bottom"><a class="icon-box text-center mx-auto box-shadow-none px-0" href="tel:+1212477690000">
            <div class="icon-box-icon"><i class="fe-icon-phone"></i></div>
            <h3 class="icon-box-title">Call us</h3>
            <p class="icon-box-text font-weight-medium">+234 (0) 812385976</p></a></div>
        <div class="col-md-3 col-sm-6 py-2 border-right border-bottom"><a class="icon-box text-center mx-auto box-shadow-none px-0" href="mailto:support@example.com">
            <div class="icon-box-icon"><i class="fe-icon-mail"></i></div>
            <h3 class="icon-box-title">Email us</h3>
            <p class="icon-box-text font-weight-medium">info@worldbraintechnology.com</p></a></div>
        <div class="col-md-3 col-sm-6 py-2 border-bottom"><a class="icon-box text-center mx-auto box-shadow-none px-0" href="#">
            <div class="icon-box-icon"><i class="fe-icon-facebook"></i></div>
            <h3 class="icon-box-title">Follow us</h3>
            <p class="icon-box-text font-weight-medium">Facebook, Twitter, LinkedIn, Github</p></a></div>
      </div>
    </section>
    <!-- Contact Form-->
<section class="container mb-5 pb-3">
    <div class="wizard">
        <div class="wizard-body pt-3">
            <h2 class="h4 text-center">Register</h2>
            <p class="text-muted text-center">We will get back to you as soon as possible</p>
            <form action="" method="POST" class="needs-validation" enctype="multipart/form-data">
                <div class="row pt-3">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="contact-email">Your Email <span class='text-danger font-weight-medium'>*</span></label>
                            <input class="form-control" name="email" type="email" id="contact-email"  placeholder="johndoe@email.com" required>
                            <div class="invalid-feedback">Please provide a valid email address!</div>
                        </div>
                    </div>
                   
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="contact-name">Your Phone Number (WhatsApp Preferably) <span class='text-danger font-weight-medium'>*</span></label>
                            <input class="form-control" name="phone" type="number" id="contact-name" required>
                            <div class="invalid-feedback">Please enter your name!</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="contact-subject">Are you new to programming?</label>
                            <select name="newbie" id="contact-subject" class="form-control">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="contact-subject">How did you hear about our academy</label>
                            <select name="detail" id="contact-subject" class="form-control">
                                <option value="website">Website</option>
                                <option value="friend">Friend</option>
                                <option value="newsletter">Newsletter</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="contact-message">How do you feel about programming <span class='text-danger font-weight-medium'>*</span></label>
                    <textarea class="form-control" name="message" rows="7" id="contact-message"  placeholder="Let us know your mind..." required></textarea>
                    <div class="invalid-feedback">Please Let us know</div>
                </div>

                <div class="form-group">
                    <p>Please note that joining this class requires a sum of <b><i>₦30,000</i></b> and joining this Class, you'll need a working laptop. Internet connection for installation process will be fully covered and other necessities. <br>

                    Other apps needed for the class will be communicated to everyone, and we'll guide each one through the installation process. <br> <br>

                    <b>NB: The classes will be held four (4) times a week, as the days for these classes will be communicated.</b></p>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary" name="submit" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</section>
    
     <!-- Footer-->
     <?php require_once 'components/footer.php'; ?>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="js/vendor.min.js"></script>
    <script src="js/theme.min.js"></script>
  </body>
</html>