<!DOCTYPE html>
<html lang="en">

<head>
    <title>Smart Bimbel</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- MATERIAL DESIGN ICONIC FONT -->

    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">


    <!-- STYLE CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/User/login/css/style.css">

    <link href="<?= base_url(); ?>/assets/User2/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/User2/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/User2/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/User2/assets/css/elegant-icons.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/User2/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/User2/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/User2/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/User2/assets/css/animate.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/User2/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/User2/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/User2/assets/css/responsive.css" rel="stylesheet" />





<body>

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="container">

        </div>
        <!-- End Top Search -->

        <div class="container">



            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="<?= base_url(); ?>/assets/User/images/PART1.png" width="60px" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li class="dropdown">
                        <a href="<?= base_url(); ?>">Beranda</a>
                    </li>
                    <li class="dropdown megamenu-fw">
                    <li><a href="<?= base_url(); ?>Home/tentang">Tentang</a></li>
                    </li>
                    <!-- <li class="dropdown">
				<a href="<?= base_url(); ?>Home/kursus">Kursus</a>
			</li> -->
                    <li class="dropdown">
                        <a href="<?= base_url(); ?>Home/kelas">Kelas</a>

                    </li>
                    <li class="dropdown">
                        <a href="<?= base_url(); ?>Home/kontak">Kontak</a>
                    </li>
                    <?php if ($this->session->userdata('is_user_login') == true) : ?>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbardrop"
                            data-toggle="dropdown">Hi, <?= $this->session->userdata('username')  ?></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url('siswa/profile') ?>">Profil</a></li>
                            <li><a href="<?= base_url('siswa/riwayat') ?>">Kelas</a></li>
                            <li><a href="<?= base_url('auth/logout') ?>">Logout</a></li>
                        </ul>
                    </li>
                    <?php elseif ($this->session->userdata('is_admin_login') == true) : ?>

                    <?php else : ?>

                    <?php endif; ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->


    <div class="wrapper">
        <div class="image-holder">
            <img src="<?= base_url(); ?>assets/User/bg-login.jpg" alt="">
        </div>
        <div class="form-inner">
            <?php $attributes = array('id' => 'login_form', 'method' => 'post'); ?>

            <?php echo form_open('auth/login', $attributes); ?>
            <div class="form-header">
                <h3 style="color: white; font-size: 40px;font-family: ChelseaMarket-Regular;margin: 0;">LOGIN</h3>
                <img src="<?= base_url(); ?>assets/User/login/images/sign-up.png" alt="" class="sign-up-icon">
            </div>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.all.min.js"></script>
            <?php if ($this->session->flashdata('message')) : ?>
            <div class="alert alert-primary">
                <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                <?= $this->session->flashdata('message') ?>
            </div>
            <script type="text/javascript">
            swal({
                title: "BERHASIL !!!",
                text: "<?php echo $this->session->flashdata('message'); ?>",
                showConfirmButton: true,
                type: 'success'
            });
            </script>
            <?php endif; ?>
            <?php if ($this->session->flashdata('abort')) : ?>
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                <?= $this->session->flashdata('abort') ?>
            </div>
            <script type="text/javascript">
            swal({
                title: "ERROR !!!",
                text: "<?php echo $this->session->flashdata('abort'); ?>",
                showConfirmButton: true,
                type: 'error'
            });
            </script>
            <?php endif; ?>
            <div class="form-group">
                <label style="color: white;" for="">Username:</label>
                <input type="text" name="username" class="form-controllogin" autocomplete="off">
            </div>

            <div class="form-group">
                <label style="color: white;" for="">Password:</label>
                <input type="password" name="password" class="form-controllogin">
            </div>

            <input type="submit" name="login" value="Masuk" class="buttonlogin">
            <br>
            <center> Belum Punya Akun ?
                <a href="<?= base_url('auth/registration'); ?>">
                    <p>Daftar Sekarang</p>
                </a>
            </center>

            </form>
        </div>

    </div>

    <style>
    #f-image {
        max-width: 100px !important;
        margin-left: 100px !important;
    }

    #fId {
        margin-left: 360px;
    }

    #ftbt {
        background-color: #082420 !important;
    }
    </style>





    <script src="<?= base_url(); ?>assets/User/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/User/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/User/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/User/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/User/js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url(); ?>assets/User/js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url(); ?>assets/User/js/jquery.stellar.min.js"></script>
    <script src="<?= base_url(); ?>assets/User/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>assets/User/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url(); ?>assets/User/js/aos.js"></script>
    <script src="<?= base_url(); ?>assets/User/js/jquery.animateNumber.min.js"></script>
    <script src="<?= base_url(); ?>assets/User/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="<?= base_url(); ?>assets/User/js/google-map.js"></script>
    <script src="<?= base_url(); ?>assets/User/js/main.js"></script>


    <script src="<?= base_url(); ?>assets/User/login/js/jquery.form-validator.min.js"></script>
    <script src="<?= base_url(); ?>assets/User/login/js/main.js"></script>

</body>

</html>