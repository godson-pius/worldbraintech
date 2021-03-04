<?php require_once "config/dbconfig.php";
    $validate = loginValidation("sign-in");
    $admin = $_SESSION['current_admin'];
    $track_total_num = load("tracks"); // Fetching all uploaded music
    $project_total_num= load("project_requests"); // Fetching all project request
    $contact_total_num = load("contacts"); // Fetching all contact

    if (isset($_POST['track_upload'])) {
        $response = addMusic($_POST);
        if ($response === true) {
            $uploaded = "uploaded";
        } else {
            $uploaded = "failed";
        }
    }

    if (isset($_POST['project_upload'])) {
        $response = addProject($_POST);
        if ($response === true) {
            $uploaded = "uploaded";
        } else {
            $uploaded = "failed";
        }
    }

    if (isset($_POST['clients_records'])) {
        $response = update_happy_clients($_POST);
        if ($response === true) {
            $updated = "updated";
        } else {
            $updated = "failed";
        }
    }

    if (isset($_POST['completed_projects'])) {
        $response = update_projects_completed($_POST);
        if ($response === true) {
            $updated = "updated";
        } else {
            $updated = "failed";
        }
    }

?>

<!-- Page Header -->
<?php $page_title = ":: Godson Pius :: Admin"; require_once "includes/page_header.php"; ?>

<!-- Consists of left menu bar and aisde -->
<?php require_once "includes/page_aside.php"; ?>

<!-- Main Content -->
<section class="content" style="font-family: ubuntu medium">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h6>Welcome <span class="text-info"><?php echo ucfirst($admin); ?></span></h6>
                                <ul class="breadcrumb   p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                                    <div class="sparkline" data-type="bar" data-width="97%" data-height="28px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#706bd1">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                                    <small>Godson</small>
                                </div>
                                <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                                    <div class="sparkline" data-type="bar" data-width="97%" data-height="28px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#191f28">1,3,5,7,4,6,3,2,6,5,9,8,7,9,5</div>
                                    <small>Pius</small>
                                </div>
                                <button class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10">Godson Pius</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card info-box-2" id="hover">
                    <div class="body">
                        <div class="icon">
                            <div class="h1 icon-music-tone-alt mr-2"></div>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL MUSIC</div>
                            <div class="number"><span class="number" id="totalAudio"></span></div> <!-- Loading from custom.js -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card info-box-2" id="hover">
                    <div class="body">
                        <div class="icon">
                            <div class="h1 mr-2 icon-question"></div>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL PROJECT REQUESTS</div>
                            <div class="number" id="totalProjectRequest"></div> <!-- Loading from custom.js -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card info-box-2" id="hover">
                    <div class="body">
                        <div class="icon">
                            <div class="h1 mr-2 icon-envelope"></div>
                        </div>
                        <div class="content">
                            <div class="text">CONTACTS</div>
                            <div class="number"><span id="totalContacts" class="number"></span></div> <!-- Loading from custom.js -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Basic Examples -->
        <div class="row clearfix" id="allProjects">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Project</strong>  Request</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>Project Title</th>
                                    <th>Project Description</th>
                                    <th>Date Sent</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>Project Title</th>
                                    <th>Project Description</th>
                                    <th>Date Sent</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php
                                if (!empty($project_total_num)) {
                                    foreach ($project_total_num as $data) {
                                        extract($data); ?>
                                        <tr>
                                            <td><?php echo $user_name; ?></td>
                                            <td><?php echo $user_email; ?></td>
                                            <td><?php echo $project_title; ?></td>
                                            <td><?php echo substr($project_desc, 0, 20) . "....."; ?></td>
                                            <td><?php echo $date_sent; ?></td>
                                            <td><a data-toggle="modal" data-target="#desc<?= $project_id; ?>" class="text-light btn btn-info">Read More</a><a href="delete?request=<?php echo $project_id; ?>" class="btn btn-danger">Delete</a></td>
                                        </tr>

                                        <!-- Modal For Project Description -->
                                        <div class="modal fade" style="margin-top: 200px;" id="desc<?= $project_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle"><?= $project_title; ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <hr>
                                                <?= $project_desc; ?>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    <?php } } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->

        <!-- Basic Examples -->
        <div class="row clearfix" id="allMusic">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Uploaded</strong> Music </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>Song Title</th>
                                    <th>Date Uploaded</th>
                                    <th>Uploaded By</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Song Title</th>
                                    <th>Date Uploaded</th>
                                    <th>Uploaded By</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php
                                if (!empty($track_total_num)) {
                                    foreach ($track_total_num as $data) {
                                        extract($data); ?>
                                        <tr>
                                            <td><?php echo $track_title; ?></td>
                                            <td><?php echo $date_uploaded; ?></td>
                                            <td><?php echo $admin; ?></td>
                                            <td><a data-toggle="modal" data-target="#edit<?= $track_id; ?>" class="text-light btn btn-info">Edit Track</a><a href="delete?track=<?php echo $track_id; ?>" class="btn btn-danger">Delete</a></td>
                                        </tr>

                                        <!-- Modal For Editing Tracks -->
                                        <div class="modal fade" style="margin-top: 200px;" id="edit<?= $track_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle"><?= $track_title; ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <hr>
                                                <?php 
                                                    $edit_track = getSpecifiedColumn("tracks", "track_id", $track_id);
                                                    if ($edit_track) {
                                                        foreach ($edit_track as $track_edit) {
                                                            $edit_id = $track_edit['track_id'];
                                                        }
                                                    }
                                                 ?>
                                                <!-- Basic Validation -->
                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="card">
                                                            <div class="header">
                                                                <h2><strong>Edit</strong> Track</h2>
                                                            </div>
                                                                <div class="body">
                                                                    <form id="track_edit" action="" method="POST" enctype="multipart/form-data">
                                                                        <div class="form-group form-float">
                                                                            <input type="text" class="form-control" placeholder="Title" value="<?= $track_edit['track_title']; ?>" name="title">
                                                                        </div>

                                                                        <div class="form-group form-float">
                                                                            <input type="file" class="form-control" name="audioImage" required>
                                                                            <div class="ml-4 help-info">(Current Track Image <strong><?= $track_edit['track_image']; ?></strong>)</div>
                                                                        </div>

                                                                        <div class="form-group form-float">
                                                                            <input type="file" class="form-control" name="audio" required>
                                                                            <div class="ml-4 help-info">(Current Track Path <strong><?= $track_edit['track_path']; ?></strong>)</div>
                                                                        </div>

                                                                        <div class="form-group form-float">
                                                                            <textarea class="form-control" name="track_desc" ><?= $track_edit['track_desc']; ?></textarea>
                                                                        </div>
                                                                        
                                                                         <button type="submit" name="track_edit" id="trackedit_submitbutton" class="btn btn-raised btn-block btn-primary btn-round waves-effect">EDIT AUDIO</button>
                                                                        </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- #END# Basic Validation -->

                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    <?php } } ?>

                                    <!-- PHP code for editing the tracks -->
                                    <?php 
                                        if (isset($_POST['track_edit'])) {
                                            $edit_single_track = editTrack($edit_id, $_POST);
                                            if ($edit_single_track === true) {
                                                echo "<script>alert('edited')</script>";
                                            } else {

                                                echo "<script>alert('failed')</script>";
                                            }
                                        }

                                     ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->



        <!-- Basic Examples -->
        <div class="row clearfix" id="allEvent">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Users</strong> Message </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>User Mobile</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Date Sent</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>User Mobile</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Date Sent</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php
                                if (!empty($contact_total_num)) {
                                    foreach ($contact_total_num as $data) {
                                        extract($data); ?>
                                        <tr>
                                            <td><?php echo $user_name; ?></td>
                                            <td><?php echo $user_email; ?></td>
                                            <td><?php echo $user_phone; ?></td>
                                            <td><?php echo $contact_title; ?></td>
                                            <td><?php echo substr($contact_message, 0, 20); ?>.....</td>
                                            <td><?php echo $date_sent; ?></td>
                                            <td><a data-toggle="modal" data-target="#message<?= $contact_id; ?>" class="text-light btn btn-info">Read More</a><a href="delete?contact=<?php echo $contact_id; ?>" class="btn btn-danger">Delete</a></td>
                                        </tr>

                                        <!-- Modal For Contact Message -->
                                        <div class="modal fade" style="margin-top: 200px;" id="message<?= $contact_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle"><?= $contact_title; ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <hr>
                                                <?= $contact_message; ?>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                    <?php } } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->


        <!-- Modal For Uploading Tracks -->
        <div class="modal fade" style="margin-top: 200px;" id="track_upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Track Upload Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <hr>
                <!-- Basic Validation -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Upload</strong> Track</h2>
                            </div>
                                <div class="body">
                                    <form id="track_upload" action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="Title" name="title">
                                        </div>

                                        <div class="form-group form-float">
                                            <input type="file" class="form-control" name="audioImage" required>
                                            <div class="ml-4 help-info">Track Image</div>
                                        </div>

                                        <div class="form-group form-float">
                                            <input type="file" class="form-control" name="audio" required>
                                            <div class="ml-4 help-info">Track Path</div>
                                        </div>

                                        <div class="form-group form-float">
                                            <textarea class="form-control" name="track_desc" >Track Description</textarea>
                                        </div>
                                        
                                         <button type="submit" name="track_upload" id="trackupload_submitbutton" class="btn btn-raised btn-block btn-primary btn-round waves-effect">UPLOAD AUDIO</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Validation -->

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal For Uploading Projects -->
        <div class="modal fade" style="margin-top: 200px;" id="project_upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLongTitle">Project Upload Modal</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <hr>
                <!-- Basic Validation -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Upload</strong> Project</h2>
                            </div>
                                <div class="body">
                                    <form id="project_upload" action="" method="POST" enctype="multipart/form-data">

                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="Project Title" name="project_title" required>
                                        </div>

                                        <div class="form-group form-float">
                                            <input type="file" class="form-control" name="ProjectImage" required>
                                            <div class="ml-4 help-info">Project Image</div>
                                        </div>

                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="Project Url" name="project_url">
                                        </div>

                                        <div class="form-group form-float">
                                            <textarea class="form-control" name="project_desc" >Project Description</textarea>
                                        </div>
                                        
                                         <button type="submit" name="project_upload" id="trackupload_submitbutton" class="btn btn-raised btn-block btn-primary btn-round waves-effect">UPLOAD PROJECT</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Validation -->

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>



        </div><!-- Modal For Updating Happy Clients -->
        <div class="modal fade" style="margin-top: 200px;" id="update_happy_clients" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLongTitle">Update Happy Clients</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <hr>
                <!-- Basic Validation -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Update</strong> Happy Clients</h2>
                            </div>
                                <div class="body">
                                    <form action="" method="POST">

                                        <div class="form-group form-float">
                                            <input type="number" class="form-control" placeholder="Happy Clients" name="happy_clients" required>
                                        </div>
                                        
                                         <button type="submit" name="clients_records" id="trackupload_submitbutton" class="btn btn-raised btn-block btn-primary btn-round waves-effect">UPDATE RECORD</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Validation -->

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>



        <!-- Modal For Updating Projects Completed -->
        <div class="modal fade" style="margin-top: 200px;" id="update_project_completed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLongTitle">Update Projects Completed</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- <hr> -->
                <!-- Basic Validation -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Update</strong> Project Completed</h2>
                            </div>
                                <div class="body">
                                    <form action="" method="POST">

                                        <div class="form-group form-float">
                                            <input type="number" class="form-control" placeholder="Projects Completed" name="projects_completed" required>
                                        </div>
                                        
                                         <button type="submit" name="completed_projects" id="trackupload_submitbutton" class="btn btn-raised btn-block btn-primary btn-round waves-effect">UPDATE RECORD</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Validation -->

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>



        <?php require_once "includes/page_footer.php"; ?>
    </div>
</section>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<!-- Jquery DataTable Plugin Js -->
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalert.min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/widgets/infobox/infobox-1.js"></script>
<script src="assets/js/pages/tables/jquery-datatable.js"></script>
<script src="assets/js/pages/index.js"></script>

<!-- Custom Js -->
<script src="assets/js/custom.js"></script>

<!-- Reporting -->
<?php
    if (isset($_GET['msg'])) { $msg = $_GET['msg']; ?>
        <script>
            swal("Deleted", "<?= $msg; ?>", "success");
        </script>
    <?php } ?>

    <?php
    if (isset($_GET['error'])) { $error = $_GET['error']; ?>
        <script>
            swal("Action Failed", "<?= $error; ?>", "error");
        </script>
    <?php } ?>

    <?php
    if (isset($uploaded) && $uploaded === "uploaded") { ?>
        <script>
            swal("Success", "uploaded successfully", "success");
        </script>
    <?php } ?>

    <?php
    if (isset($uploaded) && $uploaded === "failed") { ?>
        <script>
            swal("Ooops!!", "Please check your inputs and try again!", "error");
        </script>
    <?php } ?>

    <?php
    if (isset($updated) && $updated === "updated") { ?>
        <script>
            swal("Success", "Record have been updated successfully!", "success");
        </script>
    <?php } ?>

    <?php
    if (isset($updated) && $updated === "failed") { ?>
        <script>
            swal("Ooops!!", "Failed to update! Please check your inputs or connection and try again!", "error");
        </script>
    <?php } ?>
</body>
</html>