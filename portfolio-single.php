<?php
//error_reporting(0);
require_once 'manager/config/functions.php';
require_once 'inc/functions/config.php';

if (isset($_GET['project'])) {
    $id = $_GET['project'];

    $get_project = getSpecifiedColumn("projects", "project_id", $id);
    if ($get_project) {
        foreach ($get_project as $data) {
            extract($data);
        }
    }
}


$title = "Project | World Brain Technology";
require_once 'components/header.php';
?>
    <!-- Page Title-->
    <div class="page-title d-flex mt-5" aria-label="Page title" style="background-image: url(img/page-title/portfolio-pattern.png);">
      <div class="container text-left align-self-center">

        <h1 class="page-title-heading">Single Project</h1>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5">
      <div class="row">
        <!-- Project Gallery-->
        <div class="col-lg-8 mb-3">
          <div class="post-meta pb-3">
              <span class="text-sm ml-0"><i class="fe-icon-clock"></i> <?= date("M d, Y", strtotime($project_date)); ?></span>
              <a class="text-sm" href="#"><i class="fe-icon-bookmark"></i><?= $project_cat; ?></a>
          </div><a class="gallery-item mb-30" href="manager/ProjectImages/<?= $project_images; ?>" data-fancybox="sideGallery" data-options="{&quot;caption&quot;: &quot;Gallery Image Caption&quot;}">
<!--                <img src="img/portfolio/single/th01.jpg" alt="Gallery Image"/>-->
                <div style="width: auto; height: 450px; background-color: red; background-size: cover; background-position: center; background-image:url(manager/ProjectImages/<?= $project_images; ?>);">
<!--                    Image Holder-->
                </div>
            </a>
        </div>
        <!-- Project Details-->
        <div class="col-lg-4">
          <div class="widget">
            <h2 class="widget-title">Client</h2>
            <ul class="list-unstyled mb-0">
              <li><span class="text-muted">Name:</span><span class="font-weight-medium">&nbsp; <?= $client; ?></span></li>
              <li><span class="text-muted">Services:</span><span class="font-weight-medium">&nbsp; Mobile UX/UI Design, App Development</span></li>
              <li><span class="text-muted">Website:</span><a class="navi-link font-weight-medium" href="#">&nbsp; www.example.com</a></li>
            </ul>
          </div>
          <div class="widget">
            <h2 class="widget-title">Objective</h2>
            <p class="text-muted mb-0"><?= $project_objective; ?></p>
          </div>
          <div class="widget">
            <h2 class="widget-title">Tools &amp; Technologies</h2>
            <p class="text-muted"><?= $technologies; ?></p>
          </div>

<!--          <div class="widget mb-4">-->
<!--            <h2 class="widget-title">Download</h2><a class="market-btn apple-btn mr-3 mb-3" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-btn google-btn mr-3 mb-3" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a>-->
<!--          </div>-->
        </div>
      </div>
      <!-- Project Share-->
      <div class="d-sm-flex justify-content-between align-items-center border-top border-bottom mb-4 py-2">
        <div class="py-2"><span class="dinline-block align-middle py-2 mr-2"><strong>Share:</strong></span><a class="social-btn sb-style-3 sb-facebook mb-0" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-3 sb-twitter mb-0" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-3 sb-pinterest mb-0" href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="socicon-pinterest"></i></a></div>
        <div class="py-2"></div>
        <div class="post-meta"><a class="text-md" href="#"><i class="fe-icon-heart text-accent"></i>&nbsp;40</a></div>
      </div>
      <!-- Entry Nanigation-->
<!--      <nav class="entry-navigation">-->
<!--        <div class="prev-btn"><a class="label" href="#"><i class="fe-icon-arrow-left"></i>Prev <span class='d-none d-sm-inline'>project</span></a>-->
<!--          <div class="post-preview">-->
<!--            <div class="post-preview-thumb"><img src="img/portfolio/navigation/01.jpg" alt="Project thumbnail"/>-->
<!--            </div>-->
<!--            <div class="post-preview-details"><span class="post-preview-title">Web App Front-End</span><span class="post-preview-meta"><i class="fe-icon-user"></i>Benjamin Miller</span></div>-->
<!--          </div>-->
<!--        </div><a class="back-btn" href="portfolio-style1-boxed.html"><i class="fe-icon-grid"></i></a>-->
<!--        <div class="next-btn"><a class="label" href="#">Next <span class='d-none d-sm-inline'>project</span><i class="fe-icon-arrow-right"></i></a>-->
<!--          <div class="post-preview">-->
<!--            <div class="post-preview-details"><span class="post-preview-title">iOS App Development</span><span class="post-preview-meta"><i class="fe-icon-user"></i>Michael Brown</span></div>-->
<!--            <div class="post-preview-thumb"><img src="img/portfolio/navigation/02.jpg" alt="Project thumbnail"/>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </nav>-->
      <!-- Related Projects Carousel-->
      <h3 class="h4 text-center pt-5 mt-3 pb-4">You May Also Like</h3>
      <div class="owl-carousel carousel-flush" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true,&quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">

        <?php
            $all_projects = load("projects");
            if ($all_projects) {
                foreach ($all_projects as $proj_data) { ?>
                <!-- Product-->
                <div class="mb-30 pb-3">
                  <div class="card portfolio-card"><a class="portfolio-thumb" href="portfolio-single?project=<?= $proj_data['project_id']; ?>">
<!--                          <img src="img/portfolio/03.jpg" alt="Portfolio Thumbnail"/>-->
                          <div style="width: auto; height: 200px; background-color: red; background-size: cover; background-position: center; background-image:url(manager/ProjectImages/<?= $proj_data['project_images']?>);">

                          </div>
                      </a>
                    <div class="card-body">
                      <div class="portfolio-meta"><span><i class="fe-icon-user"></i><?= $proj_data['client']?></span></div>
                      <h5 class="portfolio-title"><a href="portfolio-single?project=<?= $proj_data['project_id']; ?>"><?= $proj_data['project_title']; ?></a></h5>
                    </div>
                    <div class="card-footer">
                      <div><a class="tag-link" href="#"><?= $proj_data['project_cat']?></a></div>
<!--                      <div class="portfolio-meta"><a href="#"><i class="fe-icon-heart text-accent"></i>25</a></div>-->
                    </div>
                  </div>
                </div>

          <?php } } ?>

      </div>
    </div>
    <!-- Footer-->
    <footer class="d-lg-flex align-items-center bg-dark">
      <div class="w-100 py-5 px-4">
        <div class="mx-auto text-center" style="max-width: 340px;">
          <h6 class="text-sm font-weight-medium text-white text-uppercase text-center">Want to hire us?</h6>
          <ul class="list-unstyled text-white">
            <li><span class='opacity-60'>Call:</span> +1 (212) 477 690 000</li>
            <li><span class='opacity-60'>Email:</span> info@example.com</li>
          </ul>
          <div class="widget pt-3 mb-4"><a class="social-btn sb-style-6 sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-6 sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-6 sb-dribbble sb-light-skin" href="#"><i class="socicon-dribbble"></i></a><a class="social-btn sb-style-6 sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-btn sb-style-6 sb-behance sb-light-skin" href="#"><i class="socicon-behance"></i></a></div>
          <p class="m-0 text-sm text-white"><span class='opacity-60'>© All rights reserved. Made with</span> <i class='d-inline-block align-middle fe-icon-heart text-danger'></i> <a href='http://createx.studio/' class='d-inline-block nav-link text-white opacity-60 p-0' target='_blank'>by Createx Studio</a></p>
        </div>
      </div>
      <div class="w-100 py-5 px-4" style="background-color: #30363d;">
        <div class="widget widget-gallery mb-0 mx-auto" style="max-width: 250px;">
          <div class="d-flex justify-content-between"><a class="gallery-item mb-2 mr-2" href="../img/components/gallery/01.jpg" data-fancybox="gallery1" data-options="{&quot;caption&quot;: &quot;Gallery Image Caption&quot;}"><img src="img/widgets/gallery/th01.jpg" alt="Gallery Image"/></a><a class="gallery-item mb-2 mr-2" href="../img/components/gallery/02.jpg" data-fancybox="gallery1" data-options="{&quot;caption&quot;: &quot;Gallery Image Caption&quot;}"><img src="img/widgets/gallery/th02.jpg" alt="Gallery Image"/></a><a class="gallery-item type-video mb-2" href="https://www.youtube.com/watch?v=VE30ntVVfvAk&amp;amp;autoplay=1&amp;amp;rel=0&amp;amp;controls=0&amp;amp;showinfo=0" data-fancybox="gallery1" data-width="1000" data-height="563"><img src="img/widgets/gallery/th03.jpg" alt="Gallery Image"/></a></div>
          <div class="d-flex justify-content-between"><a class="gallery-item mb-2 mr-2" href="../img/components/gallery/04.jpg" data-fancybox="gallery1" data-options="{&quot;caption&quot;: &quot;Gallery Image Caption&quot;}"><img src="img/widgets/gallery/th04.jpg" alt="Gallery Image"/></a><a class="gallery-item type-video mb-2 mr-2" href="https://vimeo.com/25141497?color=ac32e4" data-fancybox="gallery1" data-width="1000" data-height="563"><img src="img/widgets/gallery/th05.jpg" alt="Gallery Image"/></a><a class="gallery-item mb-2" href="../img/components/gallery/06.jpg" data-fancybox="gallery1" data-options="{&quot;caption&quot;: &quot;Gallery Image Caption&quot;}"><img src="img/widgets/gallery/th06.jpg" alt="Gallery Image"/></a></div>
          <div class="pt-1"><a class="btn btn-gradient btn-block" href="#"><i class="fe-icon-instagram"></i>&nbsp;View our Instagram</a></div>
        </div>
      </div>
      <div class="w-100 py-5 px-4">
        <div class="mx-auto" style="max-width: 340px;">
          <h6 class="text-sm font-weight-medium text-white text-uppercase text-center">Subscription</h6>
          <p class="text-sm text-white opacity-60 text-center pb-1">To receive latest works and inspiration from our portfolio.</p>
          <form action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" target="_blank" novalidate>
            <div class="input-group">
              <input class="form-control form-control-light-skin" type="email" name="EMAIL" placeholder="Email address">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Sign Up</button>
              </div>
            </div>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true">
              <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
            </div>
          </form>
        </div>
      </div>
    </footer>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="js/vendor.min.js"></script>
    <script src="js/theme.min.js"></script>
  </body>
</html>