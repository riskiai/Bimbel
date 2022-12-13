<!DOCTYPE html>
<html lang="en">

<head>
	<title>Smart Bimbel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="icon" href="<?= base_url(); ?>/assets/AdminBsb/ok.png" type="image/x-icon">

	

	<!-- ========== Page Title ========== -->
    <title>Pintar Ngaji</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="<?= base_url(); ?>/assets/User2/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/User2/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/User2/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/User2/assets/css/elegant-icons.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/User2/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/User2/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/User2/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/User2/assets/css/animate.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/User2/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/User2/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/User2/assets/css/responsive.css" rel="stylesheet" />

    <link href="<?= base_url(); ?>/assets/User2/assets/DataTables/datatables.min.css" rel="stylesheet" />
    
    
    <!-- ========== End Stylesheet ========== -->

	  <!-- ========== Google Fonts ========== -->
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
</head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.all.min.js"></script>
	<?php if ($this->session->flashdata('message')) : ?>
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
		<script type="text/javascript">
			swal({
				title: "ERROR !!!",
				text: "<?php echo $this->session->flashdata('abort'); ?>",
				showConfirmButton: true,
				type: 'error'
			});
		</script>
	<?php endif; ?>
	<!-- Navbar File-->
	<?php include('include/navbar.php'); ?>
	<!--main content start-->
	<?php $this->load->view($layout ); ?>
	<!--main content end-->

	<!-- Footer File-->
	<?php include('include/footer.php'); ?>

	<!-- jQuery Frameworks
    ============================================= -->
    <script src="<?= base_url(); ?>assets/User2/assets/js/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/equal-height.min.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/jquery.appear.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/modernizr.custom.13711.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/wow.min.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/count-to.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/loopcounter.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/loopcounter.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/bootsnav.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/main.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/DataTables/DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/DataTables/Responsive-2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>assets/User2/assets/js/datatables.js"></script>

</body>

</html>
