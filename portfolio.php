<?php
$title = "Portfolio | World Brain Technology";
require_once 'components/header.php';
?>
<!-- Page Title-->
<div class="page-title d-flex" aria-label="Page title" style="background-image: url(img/page-title/portfolio-pattern.png);">
  <div class="container text-left align-self-center">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item"><a href="portfolio-style2-boxed.html">Portfolio</a>
        </li>
      </ol>
    </nav>
    <h1 class="page-title-heading mt-4">Portfolio</h1>
  </div>
</div>
<!-- Page Content-->
<div class="container pb-5 mb-3">
  <!-- Filters-->
  <ul class="nav nav-tabs nav-tabs-style-2 mb-4">
    <li class="nav-item"><a class="nav-link active" href="#" data-filter="*">All&nbsp;<sup>9</sup></a></li>
    <li class="nav-item"><a class="nav-link" href="#" data-filter=".mobile-apps">Mobile Apps&nbsp;<sup>3</sup></a></li>
    <li class="nav-item"><a class="nav-link" href="#" data-filter=".web-design">Web Design&nbsp;<sup>1</sup></a></li>
    <li class="nav-item"><a class="nav-link" href="#" data-filter=".branding">Branding&nbsp;<sup>3</sup></a></li>
    <li class="nav-item"><a class="nav-link" href="#" data-filter=".interior-design">Interior Design&nbsp;<sup>2</sup></a></li>
  </ul>
  <!-- Grid-->
  <div class="isotope-grid filter-grid cols-3">
    <div class="gutter-sizer"></div>
    <div class="grid-sizer"></div>




    <!-- Portfolio Item-->
    <div class="grid-item mobile-apps mb-30 pb-2">
      <div class="card portfolio-card"><a class="portfolio-thumb" style="width: auto; height: 300px; background-color: red; background-image: url(img/logo/pg); background-size: cover; background-position: center;" href="portfolio-single-side-gallery-grid.html"></a>

        <!-- <div class="card portfolio-card"><a class="portfolio-thumb" href="portfolio-single-side-gallery-grid.html"><img src="img/portfolio/01.jpg" alt="Portfolio Thumbnail" /></a> -->
          <div class="card-body">
            <div class="portfolio-meta"><span><i class="fe-icon-user"></i>William Smith</span></div>
            <h5 class="portfolio-title"><a href="portfolio-single-side-gallery-grid.html">iOS App UI Design</a></h5>
          </div>
          <div class="card-footer">
            <div><a class="tag-link" href="#">Mobile Apps</a></div>
            <div class="portfolio-meta"><a href="#"><i class="fe-icon-heart text-accent"></i>12</a></div>
          </div>
        </div>
      </div>

    </div>
    <div class="pt-2">
      <!-- Pagination-->
      <nav class="pagination"><a class="prev-btn" href="#"><i class="fe-icon-chevron-left"></i>Prev</a>
        <ul class="pages">
          <li class="d-block d-sm-none w-100">2 / 18</li>
          <li class="d-none d-sm-inline-block"><a href="#">1</a></li>
          <li class="d-none d-sm-inline-block active"><a href="#">2</a></li>
          <li class="d-none d-sm-inline-block"><a href="#">3</a></li>
          <li class="d-none d-sm-inline-block"><a href="#">4</a></li>
          <li class="d-none d-sm-inline-block"><a href="#">5</a></li>
          <li class="d-none d-sm-inline-block">...</li>
          <li class="d-none d-sm-inline-block"><a href="#">18</a></li>
        </ul><a class="next-btn" href="#">Next<i class="fe-icon-chevron-right"></i></a>
      </nav>
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
        <div class="d-flex justify-content-between"><a class="gallery-item mb-2 mr-2" href="../img/components/gallery/01.jpg" data-fancybox="gallery1" data-options="{&quot;caption&quot;: &quot;Gallery Image Caption&quot;}"><img src="img/widgets/gallery/th01.jpg" alt="Gallery Image" /></a><a class="gallery-item mb-2 mr-2" href="../img/components/gallery/02.jpg" data-fancybox="gallery1" data-options="{&quot;caption&quot;: &quot;Gallery Image Caption&quot;}"><img src="img/widgets/gallery/th02.jpg" alt="Gallery Image" /></a><a class="gallery-item type-video mb-2" href="https://www.youtube.com/watch?v=VE30ntVVfvAk&amp;amp;autoplay=1&amp;amp;rel=0&amp;amp;controls=0&amp;amp;showinfo=0" data-fancybox="gallery1" data-width="1000" data-height="563"><img src="img/widgets/gallery/th03.jpg" alt="Gallery Image" /></a></div>
        <div class="d-flex justify-content-between"><a class="gallery-item mb-2 mr-2" href="../img/components/gallery/04.jpg" data-fancybox="gallery1" data-options="{&quot;caption&quot;: &quot;Gallery Image Caption&quot;}"><img src="img/widgets/gallery/th04.jpg" alt="Gallery Image" /></a><a class="gallery-item type-video mb-2 mr-2" href="https://vimeo.com/25141497?color=ac32e4" data-fancybox="gallery1" data-width="1000" data-height="563"><img src="img/widgets/gallery/th05.jpg" alt="Gallery Image" /></a><a class="gallery-item mb-2" href="../img/components/gallery/06.jpg" data-fancybox="gallery1" data-options="{&quot;caption&quot;: &quot;Gallery Image Caption&quot;}"><img src="img/widgets/gallery/th06.jpg" alt="Gallery Image" /></a></div>
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