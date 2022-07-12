﻿<?php
require_once "config/dbconfig.php";

    if (isset($_POST['submit'])) {
        $response = signIn($_POST);
        if ($response === true)
            redirect("index.php");
        else
            $invalid_login = "animated shake";
            $err_msg = "Invalid Login";
    }
?>




<?php require_once "includes/auth_header.php"; ?>

<body class="theme-blue">
<div class="authentication">
    <div class="container">
        <div class="col-md-12 content-center">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="company_detail">
                    <h4 class="logo" style="font-family: ubuntu"><img src="../img/logo2.jpg" alt="Logo"> Grace Women International</h4>
                    <h3><strong>Grace Women International</strong> <br /> Dashboard Locked</h3>
                    <div class="footer">
                        <ul  class="social_link list-unstyled">
                            <li><a href="https://www.facebook.com/thememakkerteam" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a href="http://twitter.com/thememakker" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a href="https://www.behance.net/thememakker" title="WhatsaPP"><i class="zmdi zmdi-whatsapp"></i></a></li>
                        </ul>
                        <hr>
                        <ul class="list-unstyled">
                            <li class="zmdi zmdi-globe"></li>
                            <li><a href="../" target="_blank">Website</a></li>
                        </ul>
                    </div>
                </div>
            </div>                        
            <div class="<?php if (isset($invalid_login)) : echo $invalid_login; endif; ?> col-lg-5 col-md-12 offset-lg-1">
                <div class="<?php if (isset($err_msg)): echo "border border-danger"; endif; ?> card-plain">
                    <div class="header">
                        <img src="../img/logo2.jpg" class="rounded-circle" alt="User">
                        <h5>ADMIN</h5>
                        <span>GWI Admin</span>
                    </div>
                    <form class="form" action="" method="post">
                        <div class="input-group">
                            <input type="password" placeholder="Password" name="password" id="password" value="<?php if (isset($_POST['password'])) : echo $_POST['password']; endif; ?>" class="form-control" />
                            <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                        </div>                            

                        <div class="footer">
                            <button type="submit" name="submit" id="signIn" class="btn btn-primary btn-round btn-block">SIGN IN</button>
                        </div>
                    </form>
                    <a href="forgot-password.html" class="link">Forgot Password?</a>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<!--SweetAlert-->
<script src="assets/plugins/sweetalert/sweetalert.min.js"></script>

<script src="assets/plugins/particles-js/particles.min.js"></script>
<script src="assets/plugins/particles-js/particles.js"></script>

<!-- Custom Js -->
<script src="assets/js/custom.js"></script>
</body>
</html>