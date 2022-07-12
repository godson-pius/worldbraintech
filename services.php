<?php

require_once 'manager/config/functions.php';
require_once 'inc/functions/config.php';

$gettingAchievements = load("achievements");
if ($gettingAchievements) {
    foreach ($gettingAchievements as $achievement) {
        extract($achievement);
    }
}

$title = "Services | World Brain Technology";
require_once 'components/header.php';
?>
<!-- Page Content-->
<!-- Hero-->
<section class="bg-parallax py-5">
  <div class="bg-parallax-img" data-parallax="{&quot;y&quot; : 100}"><img src="img/pages/about-hero-bg.png" alt="Parallax Background" />
  </div>
  <div class="bg-parallax-content px-3 py-5 mx-auto mt-4 mb-4 text-center" style="max-width: 800px;">
    <h1 class="pt-2">Our Services</h1>
    <p class="text-xl opacity-80 pb-3">We provide quality services in Web Design &amp; Development since 2016.</p>
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
          <div class="animated-digits mx-auto text-center" data-number="4">
            <h5 class="animated-digits-digit"><span>5</span></h5>
            <p class="animated-digits-text">Years In Operation</p>
          </div>
        </div>
      </div>
    </section>
<!-- Services-->
<section class="container  pt-3 mb-3">
  <h2 class="h3 block-title text-center">What we do<small>Whatever we do, we do with your end user in mind </small></h2>
  <div class="row pt-5 mt-30">
    <div class="col-lg-4 col-sm-6 mb-30 pb-5"><a class="card" href="services">
        <div class="box-shadow bg-white rounded-circle mx-auto" style="width: 90px; height: 90px; margin-top: -45px;"><img class="d-block mx-auto" src="img/services/01.png" alt="UX Prototyping"></div>
        <div class="card-body text-center">
          <h3 class="card-title pt-1">UX Prototyping</h3>
          <p class="card-text text-sm">We determine the fidelity of a prototype depending on the stage of the design process, the available resources, and the goals for the prototype either low and high fidelity using tools that are essentials like Skecth, Figma, Adobe Xd.</p>
        </div>
      </a></div>
    <div class="col-lg-4 col-sm-6 mb-30 pb-5"><a class="card" href="services">
        <div class="box-shadow bg-white rounded-circle mx-auto" style="width: 90px; height: 90px; margin-top: -45px;"><img class="d-block mx-auto" src="img/services/02.png" alt="Web &amp; UI Design"></div>
        <div class="card-body text-center">
          <h3 class="card-title pt-1">Web &amp; UI Design</h3>
          <p class="card-text text-sm">The UI design is the goal of the end user and how it feels to them, we provide high quality concepts to the demand of the user after achieveing user testing, at this point we give you nothing but absolute best.</p>
        </div>
      </a></div>
    <div class="col-lg-4 col-sm-6 mb-30 pb-5"><a class="card" href="services-single.html">
        <div class="box-shadow bg-white rounded-circle mx-auto" style="width: 90px; height: 90px; margin-top: -45px;"><img class="d-block mx-auto" src="img/services/03.png" alt="Front-End Development"></div>
        <div class="card-body text-center">
          <h3 class="card-title pt-1">Front-End Development</h3>
          <p class="card-text text-sm">Understanding the need of our clients after all design process completed, we execute all those process with full time coding from scratch from our experts with coding skills of HTML, CSS, Javascript etc </p>
        </div>
      </a></div>
    <div class="col-lg-4 col-sm-6 mb-30 pb-5"><a class="card" href="services-single.html">
        <div class="box-shadow bg-white rounded-circle mx-auto" style="width: 90px; height: 90px; margin-top: -45px;"><img class="d-block mx-auto" src="img/services/04.png" alt="Back-End Development"></div>
        <div class="card-body text-center">
          <h3 class="card-title pt-1">Back-End Development</h3>
          <p class="card-text text-sm">Working on the frontend will give birth to the backend with high programming skills from the experts behind the screen with skills like PHP Laravel, Node.js, Express.js, .Net frameworks and so on as it fits in to the demand of the clients.</p>
        </div>
      </a></div>
    <div class="col-lg-4 col-sm-6 mb-30 pb-5"><a class="card" href="services-single.html">
        <div class="box-shadow bg-white rounded-circle mx-auto" style="width: 90px; height: 90px; margin-top: -45px;"><img class="d-block mx-auto" src="img/services/05.png" alt="Usability Testing"></div>
        <div class="card-body text-center">
          <h3 class="card-title pt-1">Usability Testing</h3>
          <p class="card-text text-sm">Getting all process done demands usabilty testing, hence we push the project to specific users to test and give feedbacks to the team.</p>
        </div>
      </a></div>
    <div class="col-lg-4 col-sm-6 mb-30 pb-5"><a class="card" href="services">
        <div class="box-shadow bg-white rounded-circle mx-auto" style="width: 90px; height: 90px; margin-top: -45px;"><img class="d-block mx-auto" src="img/services/06.png" alt="SEO Optimization"></div>
        <div class="card-body text-center">
          <h3 class="card-title pt-1">SEO Optimization</h3>
          <p class="card-text text-sm">We give specific descriptions to all clients website for google spider and search engines to crawl through it.</p>
        </div>
      </a></div>
  </div>
</section>
<!-- Clients-->
<!-- <section class="py-5 bg-secondary">
  <div class="container">
    <h2 class="h3 block-title text-center mt-2 mb-5">Our clients<small>Well respected people and companies from around the world</small></h2>
    <div class="row">
      <div class="col-6 col-md-3"><a class="d-block bg-white box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="img/partners/01.png" width="165" alt="Partner"></a></div>
      <div class="col-6 col-md-3"><a class="d-block bg-white box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="img/partners/02.png" width="165" alt="Partner"></a></div>
      <div class="col-6 col-md-3"><a class="d-block bg-white box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="img/partners/03.png" width="165" alt="Partner"></a></div>
      <div class="col-6 col-md-3"><a class="d-block bg-white box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="img/partners/04.png" width="165" alt="Partner"></a></div>
      <div class="col-6 col-md-3"><a class="d-block bg-white box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="img/partners/07.png" width="165" alt="Partner"></a></div>
      <div class="col-6 col-md-3"><a class="d-block bg-white box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="img/partners/05.png" width="165" alt="Partner"></a></div>
      <div class="col-6 col-md-3"><a class="d-block bg-white box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="img/partners/08.png" width="165" alt="Partner"></a></div>
      <div class="col-6 col-md-3"><a class="d-block bg-white box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="img/partners/09.png" width="165" alt="Partner"></a></div>
    </div>
  </div>
</section> -->
<!-- Testimonials-->
<section class="py-5 bg-secondary">
  <div class="container py-1">
    <h2 class="h3 block-title text-center mt-2 mb-5">What Clients are saying</h2>
    <div class="owl-carousel testimonials-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;margin&quot;: -15, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;630&quot;:{&quot;items&quot;:2},&quot;991&quot;:{&quot;items&quot;:2},&quot;1200&quot;:{&quot;items&quot;:3}} }">
      <div class="blockquote testimonial">
        <p>WBT is top class IT giving all clients sastification, i have done alot of successful projects with them</p>.</p>
        <footer class="testimonial-footer">
          <div class="testimonial-avatar"><img src="img/testimonials/01.jpg" alt="Testimonial Author Avatar" />
          </div>
          <div class="d-table-cell align-middle pl-2">
            <div class="blockquote-footer">Sandra Ojo
              <cite>Client</cite>
            </div>
          </div>
        </footer>
      </div>
      <div class="blockquote testimonial">
        <p>I was introduced by a friend to WBT team for a projects i need to be completed before 9days and i can't believe the team finished it 3days before the deadline.</p>
        <footer class="testimonial-footer">
          <div class="testimonial-avatar"><img src="img/testimonials/02.jpg" alt="Testimonial Author Avatar" />
          </div>
          <div class="d-table-cell align-middle pl-2">
            <div class="blockquote-footer">Debbie Samson
              <cite>Client</cite>
            </div>
          </div>
        </footer>
      </div>
      <div class="blockquote testimonial">
        <p>I give world brain technology a 5 star kudos for their effortless drive to help all her customers</p>
        <footer class="testimonial-footer">
          <div class="testimonial-avatar"><img src="img/testimonials/03.jpg" alt="Testimonial Author Avatar" />
          </div>
          <div class="d-table-cell align-middle pl-2">
            <div class="blockquote-footer">Helen Felix
              <cite>Client</cite>
            </div>
          </div>
        </footer>
      </div>
      <div class="blockquote testimonial">
        <p>I have known WBT website and their services for sometim, especially the graphic design departments, i did a logo with them and it was super dope.</p>
        <footer class="testimonial-footer">
          <div class="testimonial-avatar"><img src="img/testimonials/04.jpg" alt="Testimonial Author Avatar" />
          </div>
          <div class="d-table-cell align-middle pl-2">
            <div class="blockquote-footer">Sophia Johnson
              <cite>Client</cite>
            </div>
          </div>
        </footer>
      </div>
      <div class="blockquote testimonial">
        <p> Am out of words how the team handled the mobile app design, it was clean and my users are wowing to the design.</p>
        <footer class="testimonial-footer">
          <div class="testimonial-avatar"><img src="img/testimonials/05.jpg" alt="Testimonial Author Avatar" />
          </div>
          <div class="d-table-cell align-middle pl-2">
            <div class="blockquote-footer">Love Ebuka, Christoper
              <cite>Manager, Dekor Groups</cite>
            </div>
          </div>
        </footer>
      </div>
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