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
	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image:url(<?= base_url(); ?>assets/User/images/mantapp.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
					<div class="col-md-8 text-center ftco-animate">
						<h1 class="mb-4">Selamat Datang Di <span>Smart Bimbel</span></h1>
						<?php if ($this->session->userdata('is_user_login') == true) : ?>
							<p><a href="<?= base_url(); ?>home/form" class="btn btn-secondary px-4 py-3 mt-3">Daftar Sekarang</a></p>
						<?php elseif ($this->session->userdata('is_admin_login') == true) : ?>
							<p><a href="<?= base_url(); ?>admin/dashboard" class="btn btn-secondary px-4 py-3 mt-3">Daftar Sekarang</a></p>
						<?php else : ?>
							<p><a href="<?= base_url(); ?>auth/login" class="btn btn-secondary px-4 py-3 mt-3">Daftar Sekarang</a></p>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>

		<!-- <div class="slider-item" style="background-image:url(<?= base_url(); ?>assets/User/images/bgg_9.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
					<div class="col-md-8 text-center ftco-animate">
						<h1 class="mb-4">Selamat Datang Di <span> Smart Bimbel</span></h1>
						<?php if ($this->session->userdata('is_user_login') == true) : ?>
							<p><a href="<?= base_url(); ?>home/form" class="btn btn-secondary px-4 py-3 mt-3">Daftar Sekarang</a></p>
						<?php elseif ($this->session->userdata('is_admin_login') == true) : ?>
							<p><a href="<?= base_url(); ?>admin/dashboard" class="btn btn-secondary px-4 py-3 mt-3">Daftar Sekarang</a></p>
						<?php else : ?>
							<p><a href="<?= base_url(); ?>auth/login" class="btn btn-secondary px-4 py-3 mt-3">Daftar Sekarang</a></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div> -->

		<div class="slider-item" style="background-image:url(<?= base_url(); ?>assets/User/images/mantapp.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
					<div class="col-md-8 text-center ftco-animate">
						<h1 class="mb-4">Pemuda adalah Generasi <span>Penerus Bangsa</span></h1>
						<?php if ($this->session->userdata('is_user_login') == true) : ?>
							<p><a href="<?= base_url(); ?>home/form" class="btn btn-secondary px-4 py-3 mt-3">Daftar Sekarang</a></p>
						<?php elseif ($this->session->userdata('is_admin_login') == true) : ?>
							<p><a href="<?= base_url(); ?>admin/dashboard" class="btn btn-secondary px-4 py-3 mt-3">Daftar Sekarang</a></p>
						<?php else : ?>
							<p><a href="<?= base_url(); ?>auth/login" class="btn btn-secondary px-4 py-3 mt-3">Daftar Sekarang</a></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<section class="ftco-services ftco-no-pb">
		<div class="container-wrap">
			<div class="row no-gutters">
				<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-teacher"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Guru Berpengalaman</h3>
							<p>Guru Yang mengajar adalah guru yang berpengalaman di bidangnya Dan kompeten</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-reading"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Program Bimbel</h3>
							<p>Materi Bimbel Untuk anak dari 4-17 tahun dengan program utama yaitu Cinta Bahasa Dan Cinta Matematika</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-books"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Buku</h3>
							<p>Dilengkapi Buku yang telah disediakan untuk anak anak yang ingin menambah pengetahuan</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-diploma"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Sertifikasi</h3>
							<p>Setiap anak yang lulus akan mendapatkan sertifikat sesuai kelas yang dipilih</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftc-no-pb">
		<div class="container">
			<div class="row">
				
				<div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
					<div class="text px-4 ftco-animate">
						<h2 class="mb-4" style="z-index: 1;">Selamat Datang Di Smart Bimbel Dermayu </h2>
						<p>Smart Bimbel adalah Rumah Belajar sebuah lembaga pendidikan non formal yang berada di Indramayu Kecamatan Losarang
					    Berdiri pada bulan Desember tahun 2019 di
						Indramayu.</p>
						<p>Lembaga ini berkonsentrasi pada program-program belajar yang ditujukan untuk
							mengembangkan serta mengoptimalkan potensi kecerdasan anak. 
							Dan Smart Bimbel Berkomitmen untuk selalu mengupgrade kemampuan seseorang anak dalam belajar dan smart bimbel juga mempunyai dua program utama yaitu program Cinta Bahasa dan Cinta Matematika.</p>
							<p>Dalam program 2 unggulan tersebut mencakup beberapa peserta bimbel yaitu program Cinta Bahasa ada anak TK dan anak SD Kemudian untuk program Cinta Matematika di prioritaskan untuk anak SMP dan anak SMA. Dan smart bimbel menjadikan anak anak tersebut menjadi seorang anak berkarakter baik. </p>
						<p><a href="<?= base_url(); ?>Home/tentang" class="btn btn-secondary px-4 py-3">Read More</a></p>
					</div>
				</div>
				<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
					<h2 class="mb-4">Apa yang kita tawarkan</h2>
					<p>Smart Bimbel telah membuat program belajar bagi anak usia 4-17 tahun
						yang dirancang untuk mengasah ketrampilan berpikir tingkat tinggi (high order thinking skill) dan anak anak yang bimbel di tempat kami terjamin untuk bisa dalam meningkatkan efektifitas belajar.</p>
					<div class="row mt-5">
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
								<div class="text">
									<h3>Keselamatan</h3>
									<p>Point ini sangat lah kami jaga karna keselamatan adalah nomor satu dari bimble kami</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
								<div class="text">
									<h3>Kategori Kelas</h3>
									<p> Khusus bagi anak-anak berusia 4-17 tahun, tersedia program CintaBAHASA dan
										CintaMATEMATIKA.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
							<div class="text">
								<h3>Kelas Reguler</h3>
								<p>Disediakan Les Private Face To Face Untuk anak anak yang serius dalam belajar</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
							<div class="text">
								<h3>Pelajaran Kreatif</h3>
								<p>Daftar Menu Kelas Cukup Kreatif yang kami sediakan untuk anak Belajar</p>
							</div>
						</div>
					</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
								<div class="text">
									<h3>Ruang Kelas </h3>
									<p>Terdapat 2 ruang kelas yang Cukup bagi peserta bimbel yang akan belajar</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
								<div class="text">
									<h3>Ruang Mediasi</h3>
									<p>Ruang Mediasi ini adalah fasilitas yang disediakan antara anak dan guru</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-intro" style="background-image: url(<?= base_url(); ?>assets/User/images/bgg_8.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>Gabung Bersama Kami Di Smart Bimbel</h2>
					<p class="mb-0">belajar itu mudah dan menyenangkan!</p>
				</div>
				<div class="col-md-3 d-flex align-items-center">
					<?php if ($this->session->userdata('is_user_login') == true) : ?>
						<p class="mb-0"><a href="<?= base_url(); ?>home/form" class="btn btn-secondary px-4 py-3">Daftar Sekarang</a></p>
					<?php elseif ($this->session->userdata('is_admin_login') == true) : ?>
						<p class="mb-0"><a href="<?= base_url(); ?>admin/dashboard" class="btn btn-secondary px-4 py-3">Daftar Sekarang</a></p>
					<?php else : ?>
						<p class="mb-0"><a href="<?= base_url(); ?>auth/login" class="btn btn-secondary px-4 py-3">Daftar Sekarang</a></p>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</section>

	<section style="padding: 3em 0 !important">
		<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4"><span>Kursus</span> Kami</h2>
				<p>Program Smart Bimbel akan menghubungkan ke daftar menu kelas yaitu pada program ini berfokus pada program Cinta 
					Bahasa dan Cinta Matematika
				</p>
			</div>
		</div>
			<div class="row">
				<div class="col-md-6 course d-lg-flex ftco-animate">
					<div class="img" style="background-image: url(<?= base_url(); ?>assets/User/images/asiap.jpg);"></div>
					<div class="text bg-light p-4">
						<h3><a href="<?= base_url(); ?>Home/harga">Cinta Bahasa</a></h3>
						
						<p>Kelas ini mengajarkan anak untuk bisa membaca dengan cepat dan mudah dan kemudian bisa Mengenal Bahasa yang akan diajarkan</p>
					</div>
				</div>
				<div class="col-md-6 course d-lg-flex ftco-animate">
					<div class="img" style="background-image: url(<?= base_url(); ?>assets/User/images/matk.jpg); "></div>
					<div class="text bg-light p-4">
						<h3><a href="<?= base_url(); ?>Home/harga">Cinta Matematika</a></h3>
						
						<p>Kelas ini mengajarkan anak kita untuk bisa berhitung dan mengasah logika mereka dalam menangani sebuah masalah dalam matematika</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section" style="padding: 4em 0 !important">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4" id= "kelas"><span>Daftar</span> Kelas</h2>
					<p>Seluruh daftar kelas yang ada di Smart Bimbel</p>
				</div>
			</div>
			<div class="row">

				<?php $i = 1;
				foreach ($kelas as $kel) : ?>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="pricing-entry bg-light pb-4 text-center">
							<div>
								<h3 class="mb-3"><?= $kel['judul_kelas'] ?></h3>
								<p class="subheading"><span>Class day:</span> <?= $kel['jadwal_kelas'] ?></p>
								<p class="subheading"><span>Class time:</span> <?= $kel['waktu_kelas'] ?></p>
								<p><span class="price">Rp. <?= number_format($kel['harga_kelas'])	 ?></span> <span class="per">/ Bulan</span></p>
							</div>
							<div class="img" style="background-image: url(<?= base_url(); ?>assets/User/images/bgg_<?= $i++; ?>.jpg);"></div>
							<div class="px-4">
								<p><?= $kel['deskripsi_kelas'] ?></p>
							</div>
							<?php if ($this->session->userdata('is_user_login') == true) : ?>
								<p class="button text-center"><a href="<?= base_url('home/form') ?>" class="btn btn-primary px-4 py-3">Ambil Kelas</a></p>
							<?php elseif ($this->session->userdata('is_admin_login') == true) : ?>
								<p class="button text-center"><a href="<?= base_url('admin/dashboard') ?>" class="btn btn-primary px-4 py-3">Ambil Kelas</a></p>
							<?php else : ?>
								<p class="button text-center"><a href="<?= base_url('auth/login') ?>" class="btn btn-primary px-4 py-3">Ambil Kelas</a></p>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>

			</div>
		</div>
	</section>
