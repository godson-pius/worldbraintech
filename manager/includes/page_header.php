<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Grace Women International, sermon, audios, musics, Peace Nonye, kiri kiri town, Conference, International, Grace, Women">
    <title><?php echo $page_title; ?></title>
    <link rel="icon" href="../images/me.jpg" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
    <link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" />
    <!-- Bootstrap Select Css -->
    <link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
    <!--    SweetAlert-->
    <link rel="stylesheet" href="assets/plugins/sweetalert/sweetalert.css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">

    <style>
        #hover {transition: all 0.25s ease-in-out;}
        #hover:hover { box-shadow: 5px 5px 5px lightgrey; transform: translateY(-5px) scale(1.01);}
    </style> <!-- Styling for card -->

</head>
<body class="theme-blue">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin rounded-circle" src="../images/Godson.jpg" width="48" height="48" alt="sQuare"></div>
        <p><?php echo $_SESSION['current_admin']; ?><br> Please Wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
<nav class="top_navbar">
    <div class="container">
        <div class="row clearfix">
            <div class="col-12">
                <div class="navbar-logo">
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" style="font-family: ubuntu" href="index"><img src="../images/Godson.jpg" class="rounded-circle" width="30" alt="godson pius"><span class="m-l-10">GODSON PIUS</span></a>
                </div>
                <ul class="nav navbar-nav">

                    <li><a href="javascript:void(0);" class="js-right-sidebar"><i class="icon-equalizer"></i></a></li>

                    <li class="dropdown profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <img class="rounded-circle" src="../images/Godson.jpg" class="rounded-circle" alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li>
                                <div class="user-info">
                                    <h6 class="user-name m-b-0"><?php echo $_SESSION['current_admin']; ?></h6>
                                    <p class="user-position">Available</p>
                                    <a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                                    <a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                            </li>
                            <hr>
                            <li><a href="lock"><i class="icon-lock m-r-10"></i><span>Locked</span></a></li>
                            <li><a href="sign-out"><i class="icon-power m-r-10"></i><span>Sign Out</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>