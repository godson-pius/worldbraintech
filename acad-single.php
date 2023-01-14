<?php
  $title = "Academy | World Brain Technology";
  require_once 'components/header.php';

  if (isset($_GET['acad'])) {
    $acad_title = $_GET['acad'];
  }

  $course = "";

  switch ($acad_title) {
    case "Web Development with React Js":
      $course = "React";
      break;
    case "Web Development with Python":
      $course = "Python";
      break;
    default:
      $course = "";
  }

  ?>
    <!-- Page Content-->
    <!-- Description-->
    <?php 
      if ($course == "React") { ?>
        <section class="bg-parallax mt-5">
      <div class="bg-parallax-img" data-parallax="{&quot;y&quot; : 100}"><img src="img/pages/service-hero-bg.png" alt="Service"></div>
      <div class="container bg-parallax-content pt-5 pb-5 mt-5">
        <div class="box-shadow bg-white rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;"><img class="d-block mx-auto" src="img/services/07.png" alt="Back-End Development"></div>
        <h1 class="h2 block-title text-center"><?= $acad_title; ?></h1>
        <div class="row justify-content-center pt-2">
          <div class="col-xl-8 col-lg-9 col-md-10">
            <p class="opacity-80 text-center">The first two courses in this Specialization cover front-end frameworks: TailWind and React. On the server side, you’ll learn to implement NoSQL databases using MongoDB, work within a Node.js environment and Express framework, and communicate to the client side through a RESTful API. Learners enrolling in this Specialization are expected to have prior working knowledge of HTML, CSS and JavaScript. </p>
            <p class="opacity-80 text-center">Learners will work on hands-on exercises, culminating in development of a full-fledged application at the end of each course. Each course also includes a mini-Capstone Project as part of the Honors Track where you’ll apply your skills to build a fully functional project.</p>
            <a href="mailto:worldbraintechnology@gmail.com" class="btn btn-warning text-center mx-auto">Enroll Now</a>
          </div>
        </div>
      </div>
    </section>
    <?php } ?>

    <!-- For Python -->
    <?php 
      if ($course == "Python") { ?>
        <section class="bg-parallax mt-5">
      <div class="bg-parallax-img" data-parallax="{&quot;y&quot; : 100}"><img src="img/pages/service-hero-bg.png" alt="Service"></div>
      <div class="container bg-parallax-content pt-5 pb-5 mt-5">
        <div class="box-shadow bg-white rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;"><img class="d-block mx-auto" src="img/services/07.png" alt="Back-End Development"></div>
        <h1 class="h2 block-title text-center"><?= $acad_title; ?></h1>
        <div class="row pt-2">
        <p class="opacity-80 text-center">Python is the most popular programming language of the world - it's versatile, easy to learn and very powerful! <br> Learners will work on hands-on exercises, culminating in development of a full-fledged application at the end of each course. Each course also includes a mini-Capstone Project as part of the Honors Track where you’ll apply your skills to build a fully functional project.</p>
            
          <div class="p-3">
            <h4 class="mb-3">What you'll learn</h4>
            <hr>
            <div class="row mt-3 p-3">
              <div class="col-lg-4 bg-secondary shadow p-3 rounded">
                <p style="font-size: 17px; font-weight: 550;">✺ Learn how to use Python for web development with Django</p>
              </div>

              <div class="col-lg-4 bg-secondary shadow p-3 rounded">
                <p style="font-size: 17px; font-weight: 550;">✺ Build real projects and apply what you learned in a full blog website created in the course</p>
              </div>

              <div class="col-lg-4 bg-secondary shadow p-3 rounded">
                <p style="font-size: 17px; font-weight: 550;">✺ Choose between Django framework or Flash Framework to get you started quickly</p>
              </div>
              
            </div>
          </div>
          
          <div class="">
            <h4 class="mb-3">Requirements</h4>
            <hr>
            <div class="row mt-3 p-3">
              <div class="col-lg-12">
                <p style="font-size: 17px; font-weight: 550;">✺ Basic Python and web development knowledge (HTML/ CSS) is required</p>
              </div>

              <div class="col-lg-12">
                <p style="font-size: 17px; font-weight: 550;">✺ NO prior Django experience is required at all</p>
              </div>
              
            </div>
          </div>
          <a href="mailto:worldbraintechnology@gmail.com" class="btn btn-warning text-center mx-auto">Enroll Now</a>
        </div>
      </div>
    </section>
    <?php } ?>

    </section>

    <!-- Footer-->
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