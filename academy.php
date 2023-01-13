<?php
    error_reporting(0);
    require_once 'manager/config/functions.php';
    require_once 'inc/functions/config.php';

    $gettingAchievements = load("achievements");
    if ($gettingAchievements) {
        foreach ($gettingAchievements as $achievement) {
            extract($achievement);
        }
    }

if (isset($_POST['submit'])){
    $response = UpdateCont($_POST);

    if ($response === true) {
        echo "<script>alert('Message Sent! We will reply as soon as possible!')</script>";
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

  $title = "Academy | World Brain Technology";
  require_once 'components/header.php';
  ?>
<!-- Page Content-->
<!-- Hero-->
<section class="bg-parallax py-5">
  <div class="bg-parallax-img" data-parallax="{&quot;y&quot; : 100}"><img src="img/pages/about-hero-bg.png" alt="Parallax Background" />
  </div>
  <div class="bg-parallax-content px-3 py-5 mx-auto mt-5 mb-4 text-center" style="max-width: 800px;">
    <h1 class="pt-2">Our Academy</h1>
    <p class="text-xl opacity-80 pb-3">Join us and become an expert through our academy, by our experts in different field.</p>
  </div>
</section>
<!-- Statistics-->
<section class="bg-white container-fluid border-top">
    <div class="row">
        <div class="col-md-3 col-sm-6 border-right py-5 border-bottom">
            <div class="animated-digits mx-auto text-center" data-number="<?= $satisfied_clients; ?>">
                <h5 class="animated-digits-digit"><span>0</span>+</h5>
                <p class="animated-digits-text">Satisfied clients</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 py-5 border-right border-bottom">
            <div class="animated-digits mx-auto text-center" data-number="<?= $positive_feedback; ?>">
                <h5 class="animated-digits-digit"><span>0</span>%</h5>
                <p class="animated-digits-text">Positive feedback</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 py-5 border-right border-bottom">
            <div class="animated-digits mx-auto text-center" data-number="<?= load_total("projects"); ?>">
                <h5 class="animated-digits-digit"><span>0</span></h5>
                <p class="animated-digits-text">Projects Delivered</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 py-5 border-bottom">
            <div class="animated-digits mx-auto text-center" data-number="2">
                <h5 class="animated-digits-digit"><span>5</span></h5>
                <p class="animated-digits-text">Years In Operation</p>
            </div>
        </div>
    </div>
</section>

<!-- Services-->
<section class="bg-dark py-5" id="services">
    <div class="container pt-4">
        <h2 class="h3 block-title text-white text-center px-3">What We Teach</h2>
        <div class="row pt-4">
        <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-white box-shadow text-decoration-none"
                    href=""><img class="d-block w-100" src="img/academy/python.png"
                        alt="Branding &amp; identity">
                    <div class="p-4">
                        <h3 class="text-xl font-weight-bold mb-0">Web Dev with Python</h3>
                    </div>
                </a></div>
            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-white box-shadow text-decoration-none"
                    href="acad-single?acad=Web Development with React Js"><img class="d-block w-100" src="img/academy/acadReact.jpg"
                        alt="Branding &amp; identity">
                    <div class="p-4">
                        <h3 class="text-xl font-weight-bold mb-0">FullStack ReactJs</h3>
                    </div>
                </a></div>
            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-white box-shadow text-decoration-none"
                    href="#"><img class="d-block w-100" src="img/homepages/digital-agency/services/02.jpg"
                        alt="UI / UX design">
                    <div class="p-4">
                        <h3 class="text-xl font-weight-bold mb-0">UI / UX design</h3>
                    </div>
                </a></div>
           
            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-white box-shadow text-decoration-none"
                    href="#"><img class="d-block w-100" src="img/homepages/digital-agency/services/04.jpg"
                        alt="Digital strategy">
                    <div class="p-4">
                        <h3 class="text-xl font-weight-bold mb-0">Digital Marketing</h3>
                    </div>
                </a></div>
            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-white box-shadow text-decoration-none"
                    href="#"><img class="d-block w-100" src="img/homepages/digital-agency/services/05.jpg"
                        alt="Back-end development">
                    <div class="p-4">
                        <h3 class="text-xl font-weight-bold mb-0">Web Development with PHP</h3>
                    </div>
                </a></div>
            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-white box-shadow text-decoration-none"
                    href="#"><img class="d-block w-100" src="img/homepages/digital-agency/services/06.jpg"
                        alt="Mobile development">
                    <div class="p-4">
                        <h3 class="text-xl font-weight-bold mb-0">Mobile Development with React Native</h3>
                    </div>
                </a></div>
        </div>
    </div>
</section>
<!-- Team-->


<section class="container py-5 mt-3">
    <h2 class="h3 block-title text-center mb-4">Meet our Experts<small>People behind the screens and your great
            experience</small></h2>
    <div class="row">
        <!-- Team member-->
        <div class="col-lg-3 col-sm-6">

          <div class="team-card-style-1 mx-auto">
            <div class="team-card-inner">
              <div class="team-thumb"><img src="img/team/style-1/Mr_Godson_The_CEO.jpeg" alt="Team Member Picture"/>
              </div>
              <div class="team-social-bar text-center"><a class="social-btn sb-style-4 sb-facebook" href="#"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-4 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-4 sb-skype" href="#"><i class="socicon-skype"></i></a><a class="social-btn sb-style-4 sb-linkedin" href="#"><i class="socicon-linkedin"></i></a></div><a class="team-contact-link" href="tel:+2348147871946"><i class="fe-icon-phone"></i>&nbsp;(+234) 8147871946</a><a class="team-contact-link" href="mailto:info@worldbraintechnology.com"><i class="fe-icon-mail"></i>&nbsp;info@worldbraintechnology.com</a>
            </div><span class="team-position">Backend Expert</span>
            <h4 class="team-name">Godson Pius</h4>
          </div>
        </div>
        <!-- Team member-->
        <div class="col-lg-3 col-sm-6">
          <div class="team-card-style-1 mx-auto">
            <div class="team-card-inner">
              <div class="team-thumb"><img src="img/team/style-1/Dimma_Benita_Frontend_Master.jpeg" alt="Team Member Picture"/>
              </div>
              <div class="team-social-bar text-center"><a class="social-btn sb-style-4 sb-facebook" href="#"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-4 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-4 sb-google-plus" href="#"><i class="socicon-googleplus"></i></a><a class="social-btn sb-style-4 sb-linkedin" href="#"><i class="socicon-linkedin"></i></a></div><a class="team-contact-link" href="tel:+2347037318027"><i class="fe-icon-phone"></i>&nbsp;(+234) 7037318027</a><a class="team-contact-link" href="mailto:info@worldbraintechnology.com"><i class="fe-icon-mail"></i>&nbsp;info@worldbraintechnology.com</a>
            </div><span class="team-position">Front-End Engineer</span>
            <h4 class="team-name">Dimma Benita</h4>
          </div>
        </div>
        <!-- Team member-->
        <div class="col-lg-3 col-sm-6">
          <div class="team-card-style-1 mx-auto">
            <div class="team-card-inner">
              <div class="team-thumb"><img src="img/team/style-1/Ani_Brendan.jpeg" alt="Team Member Picture"/>
              </div>
              <div class="team-social-bar text-center"><a class="social-btn sb-style-4 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-4 sb-github" href="#"><i class="socicon-github"></i></a><a class="social-btn sb-style-4 sb-stackoverflow" href="#"><i class="socicon-stackoverflow"></i></a><a class="social-btn sb-style-4 sb-skype" href="#"><i class="socicon-skype"></i></a></div><a class="team-contact-link" href="tel:+2348132552707"><i class="fe-icon-phone"></i>&nbsp;(+234) 8132552707</a><a class="team-contact-link" href="mailto:info@worldbraintechnology.com"><i class="fe-icon-mail"></i>&nbsp;info@worldbraintechnology.com</a>
            </div><span class="team-position">Backend Expert</span>
            <h4 class="team-name">Ani Brendan</h4>
          </div>

        </div>
        <!-- Team member-->
        <div class="col-lg-3 col-sm-6">
            <div class="team-card-style-1 mx-auto">
                <div class="team-card-inner">
                    <div class="team-thumb"><img src="img/team/style-1/08.jpg" alt="Team Member Picture" />
                    </div>
                    <div class="team-social-bar text-center"><a class="social-btn sb-style-4 sb-twitter" href="#"><i
                                class="socicon-twitter"></i></a><a class="social-btn sb-style-4 sb-pinterest"
                            href="#"><i class="socicon-pinterest"></i></a><a class="social-btn sb-style-4 sb-behance"
                            href="#"><i class="socicon-behance"></i></a><a class="social-btn sb-style-4 sb-dribbble"
                            href="#"><i class="socicon-dribbble"></i></a></div><a class="team-contact-link"
                        href="tel:+2349032597686"><i class="fe-icon-phone"></i>&nbsp;(+234) 9032597686</a><a
                        class="team-contact-link" href="mailto:info@worldbraintechnology.com"><i
                            class="fe-icon-mail"></i>&nbsp;info@worldbraintechnology.com</a>
                </div><span class="team-position">Lead, UI/UX Designer</span>
                <h4 class="team-name">Ezra Jonathan</h4>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form-->
<section class="bg-secondary pt-5 pb-3">
    <div class="container py-2">
        <h2 class="h3 block-title text-center">Contact us<small>We'll be glad to answer all your questions.</small></h2>
        <form action="" method="post">
            <div class="row">
                <div class="col-md-4 col-sm-6 form-group">
                    <label for="cont-name">Your Name <span class='text-danger font-weight-medium'>*</span></label>
                    <input class="form-control" name="name" type="text" id="cont-name" placeholder="Enter your name"
                        required>
                    <div class="invalid-feedback">Please fill in your name!</div>
                </div>
                <div class="col-md-4 col-sm-6 form-group">
                    <label for="cont-email">Email Address <span class='text-danger font-weight-medium'>*</span></label>
                    <input class="form-control" name="email" type="email" id="cont-email"
                        placeholder="example@example.com" required>
                    <div class="invalid-feedback">Please provide valid email address!</div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="cont-subject">Subject</label>
                    <input class="form-control" name="subject" type="text" id="cont-subject"
                        placeholder="Title of your message">
                </div>
            </div>
            <div class="form-group">
                <label for="cont-message">Message <span class='text-danger font-weight-medium'>*</span></label>
                <textarea class="form-control" id="cont-message" name="message" rows="8"
                    placeholder="Type your message..." required></textarea>
                <div class="invalid-feedback">Please type your message!</div>
            </div>
            <div class="text-center">
                <button class="btn btn-style-4 btn-icon-left btn-primary" name="submit" type="submit"><i
                        class="fe-icon-mail text-md bg-white text-primary"></i>Send Message</button>
            </div>
        </form>
    </div>
</section>
<!-- Footer-->
<?php require_once 'components/footer.php'; ?>
