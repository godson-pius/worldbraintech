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

  $title = "World Brain Technology";
  require_once 'components/header.php';
  ?>
<!-- Page Content-->
<!-- Hero-->
<section class="bg-center bg-no-repeat py-5 mt-lg-5"
    style="background-image: url(img/homepages/digital-agency/hero-bg.png);">
    <div class="row no-gutters pt-lg-5 mt-lg-5">
        <div class="col-xl-7 col-lg-8"><img class="d-block" src="img/homepages/digital-agency/hero-img.jpg"
                alt="Hero Image"></div>
        <div class="col-lg-4 pt-xl-5">
            <div class="px-3 px-lg-0 text-center text-lg-left">
                <h1 class="pt-md-5 pb-md-4 pt-3 pb-3 pt-md-0 pb-md-5">Lets build your brand </h1><a
                    class="scroll-to btn btn-style-4 btn-gradient btn-icon-right btn-lg" href="#services">Learn How<i
                        class="fe-icon-arrow-down"></i></a>
            </div>
        </div>
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
        <h2 class="h3 block-title text-white text-center px-3">Our Identity</h2>
        <div class="row pt-4">
            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-white box-shadow text-decoration-none"
                    href="#"><img class="d-block w-100" src="img/homepages/digital-agency/services/01.jpg"
                        alt="Branding &amp; identity">
                    <div class="p-4">
                        <h3 class="text-xl font-weight-bold mb-0">Branding &amp; identity</h3>
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
                    href="#"><img class="d-block w-100" src="img/homepages/digital-agency/services/03.jpg"
                        alt="Front-end development">
                    <div class="p-4">
                        <h3 class="text-xl font-weight-bold mb-0">Front-end development</h3>
                    </div>
                </a></div>
            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-white box-shadow text-decoration-none"
                    href="#"><img class="d-block w-100" src="img/homepages/digital-agency/services/04.jpg"
                        alt="Digital strategy">
                    <div class="p-4">
                        <h3 class="text-xl font-weight-bold mb-0">Digital strategy</h3>
                    </div>
                </a></div>
            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-white box-shadow text-decoration-none"
                    href="#"><img class="d-block w-100" src="img/homepages/digital-agency/services/05.jpg"
                        alt="Back-end development">
                    <div class="p-4">
                        <h3 class="text-xl font-weight-bold mb-0">Back-end development</h3>
                    </div>
                </a></div>
            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-white box-shadow text-decoration-none"
                    href="#"><img class="d-block w-100" src="img/homepages/digital-agency/services/06.jpg"
                        alt="Mobile development">
                    <div class="p-4">
                        <h3 class="text-xl font-weight-bold mb-0">Mobile development</h3>
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
                    <div class="team-thumb"><img src="img/team/style-1/05.jpg" alt="Team Member Picture" />
                    </div>
                    <div class="team-social-bar text-center"><a class="social-btn sb-style-4 sb-facebook" href="#"><i
                                class="socicon-facebook"></i></a><a class="social-btn sb-style-4 sb-twitter" href="#"><i
                                class="socicon-twitter"></i></a><a class="social-btn sb-style-4 sb-skype" href="#"><i
                                class="socicon-skype"></i></a><a class="social-btn sb-style-4 sb-linkedin" href="#"><i
                                class="socicon-linkedin"></i></a></div><a class="team-contact-link"
                        href="tel:+72056557984"><i class="fe-icon-phone"></i>&nbsp;(+234) 803485976</a><a
                        class="team-contact-link" href="mailto:info@example.com"><i
                            class="fe-icon-mail"></i>&nbsp;info@worldbraintechnology.com</a>
                </div><span class="team-position">Backend Experts & Graphic Designer</span>
                <h4 class="team-name">James Edmond</h4>
            </div>
        </div>
        <!-- Team member-->
        <div class="col-lg-3 col-sm-6">
            <div class="team-card-style-1 mx-auto">
                <div class="team-card-inner">
                    <div class="team-thumb"><img src="img/team/style-1/06.jpg" alt="Team Member Picture" />
                    </div>
                    <div class="team-social-bar text-center"><a class="social-btn sb-style-4 sb-facebook" href="#"><i
                                class="socicon-facebook"></i></a><a class="social-btn sb-style-4 sb-twitter" href="#"><i
                                class="socicon-twitter"></i></a><a class="social-btn sb-style-4 sb-google-plus"
                            href="#"><i class="socicon-googleplus"></i></a><a class="social-btn sb-style-4 sb-linkedin"
                            href="#"><i class="socicon-linkedin"></i></a></div><a class="team-contact-link"
                        href="tel:+57872336590"><i class="fe-icon-phone"></i>&nbsp;(+234) 812385976</a><a
                        class="team-contact-link" href="mailto:info@example.com"><i
                            class="fe-icon-mail"></i>&nbsp;info@worldbraintechnology.com</a>
                </div><span class="team-position">Marketing Strategist</span>
                <h4 class="team-name">Sara Madueke</h4>
            </div>
        </div>
        <!-- Team member-->
        <div class="col-lg-3 col-sm-6">
            <div class="team-card-style-1 mx-auto">
                <div class="team-card-inner">
                    <div class="team-thumb"><img src="img/team/style-1/07.jpg" alt="Team Member Picture" />
                    </div>
                    <div class="team-social-bar text-center"><a class="social-btn sb-style-4 sb-twitter" href="#"><i
                                class="socicon-twitter"></i></a><a class="social-btn sb-style-4 sb-github" href="#"><i
                                class="socicon-github"></i></a><a class="social-btn sb-style-4 sb-stackoverflow"
                            href="#"><i class="socicon-stackoverflow"></i></a><a class="social-btn sb-style-4 sb-skype"
                            href="#"><i class="socicon-skype"></i></a></div><a class="team-contact-link"
                        href="tel:+19871625346"><i class="fe-icon-phone"></i>&nbsp;(+234) 803485976</a><a
                        class="team-contact-link" href="mailto:info@example.com"><i
                            class="fe-icon-mail"></i>&nbsp;info@worldbraintechnology.com</a>
                </div><span class="team-position">Critical Thinker</span>
                <h4 class="team-name">Brandon Simon</h4>
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
                        href="tel:+13907765843"><i class="fe-icon-phone"></i>&nbsp;(+234) 812385976</a><a
                        class="team-contact-link" href="mailto:info@example.com"><i
                            class="fe-icon-mail"></i>&nbsp;info@worldbraintechnology.com</a>
                </div><span class="team-position">Lead, UI/UX Designer</span>
                <h4 class="team-name">Ezra Jonathan</h4>
            </div>
        </div>
    </div>
</section>


<!-- Steps-->
<section class="bg-center-top bg-no-repeat bg-cover py-5"
    style="background-image: url(img/homepages/digital-agency/steps-bg.jpg);">
    <div class="container-fluid pt-4">
        <div class="row pt-1">
            <div class="col-xl-8 offset-xl-1">
                <h2 class="h3 mb-4 ml-lg-3 text-center text-lg-left">The Successful Project Steps!</h2>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <!-- Step-->
                        <div class="step step-with-icon">
                            <div class="step-number">1</div>
                            <div class="step-icon"><img src="img/icons/user-data.svg" alt="Gathering User Data"></div>
                            <h3 class="step-title">Gathering User Data</h3>
                            <p class="step-text text-sm">We kick-off each projects by collecting user data and then find
                                any existing problem and then conduct competitor analysis to find any desirable features
                                for your product and set project goals and define the projrct strategy</p>
                            <!-- <a class="step-link" href="#">Learn more<i class="fe-icon-arrow-right"></i></a> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Step-->
                        <div class="step step-with-icon">
                            <div class="step-number">2</div>
                            <div class="step-icon"><img src="img/icons/prototyping.svg" alt="Prototyping (Wireframes)">
                            </div>
                            <h3 class="step-title">Prototyping (Wireframes)</h3>
                            <p class="step-text text-sm">In this process, we generate ideas by sketching involving
                                sitemaps and turn them into prototypes</p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Step-->
                        <div class="step step-with-icon">
                            <div class="step-number">3</div>
                            <div class="step-icon"><img src="img/icons/ui-design.svg" alt="Pixel-perfect UI Design">
                            </div>
                            <h3 class="step-title">Awesome UI Design</h3>
                            <p class="step-text text-sm">In this stage, we define your brand identity making your
                                product stands out.The UI starts with visual and layout involving necessary mockups,
                                animations, Design specification and UI assets.</p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Step-->
                        <div class="step step-with-icon">
                            <div class="step-number">4</div>
                            <div class="step-icon"><img src="img/icons/coding.svg" alt="Development (Coding)"></div>
                            <h3 class="step-title">Development (Coding)</h3>
                            <p class="step-text text-sm">At this stage, we pay maximum attention to testing and start
                                development process by coding.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio-->
<section class="container py-5 mb-3">
    <h2 class="h3 block-title text-center mt-3">Latest works<small>Hand-picked collection of most prominent works
            delieverd</small></h2>
    <div class="row pt-4">

        <?php
            $projects = fetch_all("projects", "project_id", 3);
            if ($projects) {
                foreach ($projects as $project) {
                    extract($project); ?>

        <!-- Portfolio Item-->
        <div class="col-md-4 col-sm-6 mb-30 pb-2">
            <div class="card portfolio-card"><a class="portfolio-thumb"
                    href="portfolio-single?project=<?= $project_id; ?>">
                    <div
                        style="background-color:red; width: auto; height: 300px; background-size: cover; background-position: center; background-image: url(manager/ProjectImages/<?= $project_images; ?>)">
                    </div>
                </a>
                <div class="card-body">
                    <div class="portfolio-meta"><span><i class="fe-icon-user"></i>Admin</span></div>
                    <h5 class="portfolio-title"><a
                            href="portfolio-single?project=<?= $project_id; ?>"><?= $project_title; ?></a></h5>
                </div>
                <div class="card-footer">
                    <div><a class="tag-link" href="#"><?= $project_cat; ?></a></div>
                    <!--                          <div class="portfolio-meta"><a href="#"><i class="fe-icon-heart text-accent"></i>12</a></div>-->
                </div>
            </div>
        </div>

        <?php } } ?>
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