    <style>
        #f-image{
            max-width : 100px !important;
            margin-left : 100px !important;
        }
        #fId{
            margin-left: 360px;
        }
        #ftbt{
            background-color: #082420 !important;
        }
    </style>
    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark default-padding-top text-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 item">
                        <div class="f-item">
                            <img id="f-image" src="<?= base_url(); ?>/assets/User/images/PART1.png" alt="Logo">
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac nunc interdum enim egestas blandit vel pretium leo. Donec pellentesque lorem et pretium vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo, leo mollis pellentesque placerat, lectus diam mattis dui, quis posuere arcu purus nec sem.
                            </p>
                            <p class="text-italic">
                                Please write your email and get our amazing updates, news and support
                            </p>
                         
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Links</h4>
                            <ul>
                                <li>
                                    <a href="#">Tentang</a>
                                </li>
                                <li>
                                     <a href="<?= base_url(); ?>Home/galeri">Galeri</a> 
                                </li>
                                <li>
                                    <a href="#">Faqs</a>
                                </li>
                               
                                <li>
                                    <a href="#">Kontak</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Support</h4>
                            <ul>
                                <li>
                                    <a href="#">Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="f-item address">
                            <h4>Alamat</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-envelope"></i> 
                                    <p>Email <span><a href="mailto:support@validtheme.com">support@asdasdasd.com</a></span></p>
                                </li>
                                <li>
                                    <i class="fas fa-map"></i> 
                                    <p>Oadadas <span>123 6th St. sadasdas, FL 32904</span></p>
                                </li>
                            </ul>
                            <div class="opening-info">
                                <h5>Buka Jam</h5>
                                <ul>
                                    <li> <span> Senin - Jumat :  </span>
                                      <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                    </li>
                                    <li> <span> Sabtu - Minggu </span>
                                      <div class="pull-right closed"> Tutup </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div id="ftbt" class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <p id="fId">&copy; Copyright 2022. All Rights Reserved by <a href="#">Pintar Ngaji</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->




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
