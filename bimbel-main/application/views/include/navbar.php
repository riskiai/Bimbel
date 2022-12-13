<style>
    #tt-bar{
  /* background-color : #0a993c; */
  background-color : #10403a;
}

.login-btn{
  color: #10403a;
}
</style>
        <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area address-two-lines text-light" id="tt-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-8 address-info">
                    <div class="info box">
                        <ul>
                            <li>
                                <span><i class="fas fa-map"></i> Address</span>NNAHSKNADJBD
                            </li>
                            <li>
                                <span><i class="fas fa-envelope-open"></i> Email</span>Info@gmail.com
                            </li>
                            <li>
                                <span><i class="fas fa-phone"></i> Kontak</span>+123 456 7890
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-login text-right col-md-4">
                    <!-- <a class="popup-with-form" href="#register-form">
                        <i class="fas fa-edit"></i> Register
                    </a> -->
                    <?php if ($this->session->userdata('is_user_login') == true) : ?>
                    
                    <?php elseif ($this->session->userdata('is_admin_login') == true) : ?>
                        <li class="login-btn"><a href="<?= base_url(); ?>auth/login"><i class="fas fa-user"></i>Login</a></li>
				<?php else : ?>
					<li class="login-btn"><a href="<?= base_url(); ?>auth/login"><i class="fas fa-user"></i>Login</a></li>
				<?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

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
					<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Hi, <?= $this->session->userdata('username')  ?></a>
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

    </header>
    <!-- End Header -->

    <!-- Start Login Form 
    ============================================= -->
    <!-- <form action="#" id="login-form" class="mfp-hide white-popup-block">
        <div class="col-md-4 login-social">
            <h4>Login with social</h4>
            <ul>
                <li class="facebook">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="twitter">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="linkedin">
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-8 login-custom">
            <h4>login to your registered account!</h4>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Email*" type="email">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Password*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <label for="login-remember"><input type="checkbox" id="login-remember">Remember Me</label>
                    <a title="Lost Password" href="#" class="lost-pass-link">Lost your password?</a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <button type="submit">
                        Login
                    </button>
                </div>
            </div>
            <p class="link-bottom">Not a member yet? <a href="#">Register now</a></p>
        </div>
    </form> -->
    <!-- End Login Form -->

    <!-- Start Register Form 
    ============================================= -->
    <!-- <form action="#" id="register-form" class="mfp-hide white-popup-block">
        <div class="col-md-4 login-social">
            <h4>Register with social</h4>
            <ul>
                <li class="facebook">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="twitter">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="linkedin">
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-8 login-custom">
            <h4>Register a new account</h4>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Email*" type="email">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Username*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Password*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Repeat Password*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <button type="submit">
                        Sign up
                    </button>
                </div>
            </div>
            <p class="link-bottom">Are you a member? <a href="#">Login now</a></p>
        </div>
    </form> -->
    <!-- End Register Form -->

	  







	

