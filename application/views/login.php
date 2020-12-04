<!DOCTYPE html>
<html lang="en">

<head>
    <title>Account Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url(); ?>favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/fortawesome/font-awesome/css/all.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/drmonty/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/select2/select2/dist/css/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-b-160 p-t-50">
                <form class="login100-form validate-form" action="<?= site_url(); ?>auth" method="post" autocomplete="off">
                    <span class="login100-form-title p-b-43">
                        Account Login
                    </span>

                    <div class="wrap-input100 rs1 validate-input" data-validate="Username is required">
                        <input class="input100" type="text" id="username" name="username" value="<?= ($this->session->flashdata('username')) ? $this->session->flashdata('username') : ""; ?>" autocomplete="false">
                        <span class="label-input100">Username</span>
                    </div>


                    <div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" id="password" name="password" autocomplete="new-password">
                        <span class="label-input100">Password</span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Sign in
                        </button>
                    </div>

                </form>
                <?php
                if ($this->session->flashdata('error')) {
                    echo '
                    <div class="col-12 mt-2">
                        <div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>vendor/components/jquery/jquery.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>vendor/drmonty/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>public/js/popper.js"></script>
    <script src="<?= base_url(); ?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>vendor/select2/select2/dist/js/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>public/js/moment.min.js"></script>
    <script src="<?= base_url(); ?>public/js/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>public/js/countdowntime.js"></script>
    <!--===============================================================================================-->

    <?php $this->load->view('login_vitamin'); ?>

</body>

</html>