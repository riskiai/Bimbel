<head>

<link href="../../assets/user/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="../../assets/user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

<!-- link font awesome secara online -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<style>
#footer {
  background: #fff;
  padding: 0 0 30px 0;
  color: #47536e;
  font-size: 14px;
  background: #eff2f8;
}
#footer .footer-newsletter {
  padding: 50px 0;
  background: #eff2f8;
  text-align: center;
  font-size: 15px;
}
#footer .footer-newsletter h4 {
  font-size: 24px;
  margin: 0 0 20px 0;
  padding: 0;
  line-height: 1;
  font-weight: 600;
  color: #47536e;
}
#footer .footer-newsletter form {
  margin-top: 30px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 50px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  text-align: left;
}
#footer .footer-newsletter form input[type=email] {
  border: 0;
  padding: 4px 8px;
  width: calc(100% - 100px);
}
#footer .footer-newsletter form input[type=submit] {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px;
  background: #5777ba;
  color: #fff;
  transition: 0.3s;
  border-radius: 50px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}
#footer .footer-newsletter form input[type=submit]:hover {
  background: #415f9d;
}
#footer .footer-top {
  padding: 60px 0 30px 0;
  background: #F8F8FF;
}
#footer .footer-top .footer-contact {
  margin-bottom: 30px;
}
#footer .footer-top .footer-contact h4 {
  font-size: 22px;
  margin: 0 0 30px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-weight: 700;
  color: #47536e;
}
#footer .footer-top .footer-contact p {
  font-size: 15px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Raleway", sans-serif;
  color: #8a8c95;
}
#footer .footer-top h4 {
  font-size: 20px;
  font-weight: bold;
  color: #47536e;
  position: relative;
  padding-bottom: 12px;
}
#footer .footer-top .footer-links {
  margin-bottom: 10px;
  font-size: 16px;
}
#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #9fb2d8;
  font-size: 12px;
  line-height: 1;
}
#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}
#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}
#footer .footer-top .footer-links ul a {
  color: #8a8c95;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}
#footer .footer-top .footer-links ul a:hover {
  text-decoration: none;
  color: #5777ba;
}
#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #5777ba;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}
#footer .footer-top .social-links a:hover {
  background: #27282c;
  color: #fff;
  text-decoration: none;
}
#footer .copyright {
  text-align: center;
  font-size: 15px;
  float: left;
  position: center;
  color: #47536e;
}
#footer .credits {
  float: right;
  text-align: center;
  font-size: 13px;
  color: #47536e;
}

@media (max-width: 768px) {
  #footer .copyright, #footer .credits {
    float: none;
    text-align: center;
    padding: 5px 0;
  }
}
</style>


 
</head>
<br>

<footer id="footer">
<div class="footer-top">
  <div class="container">
	<div class="row">

	  <div class="col-lg-3 col-md-6 footer-contact">
		<h3 style="font-size: 20px;"> <b>SMART BIMBEL</b> </h3>
		<p>
		  Losarang Indramayu <br>
		  Gang Kenari, No 45211<br>
		  Indonesia <br><br>
		  <strong>Phone:</strong> +62 8589 55488 55<br>
		  <strong>Email:</strong> smartbimbel@gmail.com<br>
		</p>
	  </div>

	  <div class="col-lg-3 col-md-6 footer-links">
		<h4>FAQ LINKS</h4>
		<ul>
		  <li><i style="size: 10px;" class="fa fa-chevron-right" ></i> <a href="<?= base_url(); ?>home/landing">&nbsp;Beranda</a></li>
		  <li><i style="size: 10px;" class="fa fa-chevron-right" ></i> <a href="<?= base_url(); ?>home/tentang">&nbsp;Tentang</a></li>
		  <li><i style="size: 10px;" class="fa fa-chevron-right" ></i> <a href="<?= base_url(); ?>home/kursus">&nbsp;Kursus</a></li>
		  <li><i style="size: 10px;" class="fa fa-chevron-right" ></i> <a href="<?= base_url(); ?>home/harga">&nbsp;Kelas</a></li>
		 
		</ul>
	  </div>

	  <div class="col-lg-3 col-md-6 footer-links">
		<h4>Paket Program Kelas</h4>
		<ul>
		<li><i style="size: 10px;" class="fa fa-chevron-right" ></i> <a href="<?= base_url(); ?>home/harga">&nbsp;MTK Peminatan</a></li>
		  <li><i style="size: 10px;" class="fa fa-chevron-right" ></i> <a href="<?= base_url(); ?>home/harga">&nbsp;MTK Dasar</a></li>
		  <li><i style="size: 10px;" class="fa fa-chevron-right" ></i> <a href="<?= base_url(); ?>home/harga">&nbsp;Bahasa Indonesia</a></li>
		  <li><i style="size: 10px;" class="fa fa-chevron-right" ></i> <a href="<?= base_url(); ?>home/harga">&nbsp;Bahasa Inggris</a></li>
		</ul>
	  </div>

	  <div class="col-lg-3 col-md-6 footer-links">
		<h4>Social Media Smart Bimbel</h4>
		<p>Smart Bimbel mempunyai sosial media yang anda dapat kunjungi dengan beberapa tertera</p>
		<div class="social-links mt-3">
		  <a href="#" class="twitter"><i class="fab fa-whatsapp" style="position: center;"></i></a>
		  <a href="https://www.instagram.com/riskiaiilham/"  target= "_blank" class="facebook"><i class="fab fa-instagram" style="position: center;"></i></a>
		  <a href="#" class="instagram"><i class="fab fa-facebook" style="position: center;"></i></i></a>
		  <a href="#" class="google-plus"><i class="fab fa-twitter" style="position: center;"></i></a>
		</div>
	  </div>
	</div>
  </div>
</div>
<div class="container py-4">
      <div class="copyright">
     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &copy; Copyright 2022 <strong><span>SMART BIMBEL </span></strong>.
      </div>
      <div class="credits">
<br>
</footer><!-- End Footer -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


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

<!-- Bootstrap Datepicker Plugin Js -->
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
	$(function() {
		$(".datepicker").datepicker({
			format: 'yyyy-mm-dd',
			todayHighlight: true,
			autoclose: true,
			orientation: 'bottom auto',

		});
	});

	$('.datepicker').on('change', function() {
		var dob = new Date(this.value);
		var today = new Date();
		var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
		if (age < 2 || age > 17) {
			swal({
				title: "Opps !!!",
				text: "Tanggal Lahir Tidak Memenuhi Ketentuan",
				showConfirmButton: false,
				type: 'error',
			});
			$('#umur').val('');
			$('.datepicker').val('');
		} else {
			$('#umur').val(age);
		}
	});
</script>
<script>
	function cekJpg(file) {
		var sFileName = file.files[0].name;
		var sFileExtension = sFileName.split('.')[sFileName.split('.').length - 1].toLowerCase();
		var iFileSize = file.size;
		var iConvert = (file.files[0].size / 1048576).toFixed(2);
		var FileSize = file.files[0].size / 1024 / 1024; // in MB

		/// OR together the accepted extensions and NOT it. Then OR the size cond.
		/// It's easier to see this way, but just a suggestion - no requirement.
		if (!(sFileExtension === "JPG" ||
				sFileExtension === "JPEG" ||
				sFileExtension === "GIF" ||
				sFileExtension === "PNG" ||
				sFileExtension === "jpg" ||
				sFileExtension === "jpeg" ||
				sFileExtension === "gif" ||
				sFileExtension === "png") || FileSize > 0.5) { /// 10 mb
			txt = "Tipe File :   '" + sFileExtension + "'\n\n";
			txt += "Size:  " + iConvert + " MB \n\n";
			txt += "Tidak Diperbolehkan Karna Bukan Format File Yang Diperbolehkan JPG,JPEG,PNG dan tidak lebih dari 500 KB.\n\n" + sFileExtension + FileSize;
			console.log(txt);
			swal({
				title: "ERROR !!!",
				text: txt,
				showConfirmButton: true,
				type: 'error'
			});
			$(file).val('');
			return false;
		} else {
			console.log('ini salah');
		}
	}
</script>
