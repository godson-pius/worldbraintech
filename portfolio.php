<?php
require_once 'manager/config/functions.php';

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



      <?php
      $all_projects = load("projects");
      if ($all_projects) {
          foreach ($all_projects as $proj_data) {
              extract($proj_data); ?>

              <!-- Portfolio Item-->
              <div class="grid-item mobile-apps mb-30 pb-2">
                  <div class="card portfolio-card"><a class="portfolio-thumb" style="width: auto; height: 300px; background-color: blue; background-image: url('manager/ProjectImages/<?= $project_images; ?>'); background-size: cover; background-position: center;" href="portfolio-single?project=<?= $project_id; ?>"></a>

                      <div class="card-body">
                          <div class="portfolio-meta"><span><i class="fe-icon-user"></i><?= $client; ?></span></div>
                          <h5 class="portfolio-title"><a href="portfolio-single?project=<?= $project_id; ?>"><?= $project_title; ?></a></h5>
                      </div>
                      <div class="card-footer">
                          <div><a class="tag-link" href="#"><?= $project_cat; ?></a></div>
<!--                          <div class="portfolio-meta"><i class="fe-icon-heart text-accent" id="like"></i><a href="#" id="likeHolder">12</a></div>-->
                      </div>
                  </div>
              </div>

          <?php } } ?>




    </div>
    <div class="pt-2">
      <!-- Pagination-->
<!--      <nav class="pagination"><a class="prev-btn" href="#"><i class="fe-icon-chevron-left"></i>Prev</a>-->
<!--        <ul class="pages">-->
<!--          <li class="d-block d-sm-none w-100">2 / 18</li>-->
<!--          <li class="d-none d-sm-inline-block"><a href="#">1</a></li>-->
<!--          <li class="d-none d-sm-inline-block active"><a href="#">2</a></li>-->
<!--          <li class="d-none d-sm-inline-block"><a href="#">3</a></li>-->
<!--          <li class="d-none d-sm-inline-block"><a href="#">4</a></li>-->
<!--          <li class="d-none d-sm-inline-block"><a href="#">5</a></li>-->
<!--          <li class="d-none d-sm-inline-block">...</li>-->
<!--          <li class="d-none d-sm-inline-block"><a href="#">18</a></li>-->
<!--        </ul><a class="next-btn" href="#">Next<i class="fe-icon-chevron-right"></i></a>-->
<!--      </nav>-->
    </div>
  </div>
  <!-- Footer-->
    <?php require_once 'components/footer.php'; ?>