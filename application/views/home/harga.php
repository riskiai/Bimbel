<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url(); ?>assets/User/images/bgg_9.jpg');">
	<div class=""></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Daftar Kelas</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url(); ?>home/landing">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Daftar Harga <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section" style="padding: 4em 0 !important">
	<div class="container">
		<br>
	<div class="row justify-content-center mb-0 pb-0">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4"><span>Daftar Kelas</span> SMART BIMBEL</h2>
				<p>Smart Bimbel menyediakan beberapa daftar kelas yang akan menjadi acuan program utama kami yaitu dengan mengoptimalkan beberapa pilihan kelas yang terbaik
				</p>
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<?php $i = 1;
			foreach ($kelas as $kel) : ?>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="pricing-entry bg-light pb-4 text-center">
						<div>
							<h3 class="mb-3"><?= $kel['judul_kelas'] ?></h3>
							<p class="subheading"><span>Class day:</span> <?= $kel['jadwal_kelas'] ?></p>
							<p class="subheading"><span>Class time:</span> <?= $kel['waktu_kelas'] ?></p>
							<p><span class="price">Rp. <?= number_format($kel['harga_kelas']) ?></span> <span class="per">/ Bulan</span></p>
						</div>
						<div class="img" style="background-image: url(<?= base_url(); ?>assets/User/images/bgg_<?= $i++; ?>.jpg);"></div>
						<div class="px-4">
							<p><?= $kel['deskripsi_kelas'] ?></p>
						</div>
						<?php 
							$id_user = $this->session->userdata('id_user');
						
						/* logic inti ambil kelas limit 1 bulan bisa mengambil lagi */
						if ($this->session->userdata('is_user_login') == true) :
							$a = "SELECT * FROM xx_pendaftaran WHERE id_user = '$id_user' AND id_kelas = '$kel[id_kelas]' ORDER BY created_at DESC LIMIT 1";
							$sql = $this->db->query($a);
							$xx = $sql->row_array();
							if ($sql->num_rows() > 0) {
								
								if (date("Y-m-d") < date("Y-m-d", strtotime("+1 month", strtotime($xx['created_at']) ))) {
									$css = "btn-danger";
									$url = "#";
									$txt = "Sudah Ambil Kelas";
								} else {
									$css = "btn-primary";
									$url = base_url('home/form');
									$txt = "Ambil Kelas";
								}
							} else {
								$css = "btn-primary";
								$url = base_url('home/form');
								$txt = "Ambil Kelas";
							}
							?>
							<p class="button text-center"><a href="<?= $url ?>" class="btn <?= $css ?> px-4 py-3"><?= $txt ?></a></p>
						<?php elseif ($this->session->userdata('is_admin_login') == true) : ?>
							<p class="button text-center"><a href="<?= base_url('auth/login') ?>" class="btn btn-primary px-4 py-3">Ambil Kelas</a></p>
						<?php else : ?>
							<p class="button text-center"><a href="<?= base_url('auth/login') ?>" class="btn btn-primary px-4 py-3">Ambil Kelas</a></p>
						<?php endif; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
