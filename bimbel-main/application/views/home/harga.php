<style>
span {
    font-size: 10px;
}

#price {
    text-transform: none !important;
}
</style>
<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
    style="background-image: url(assets/img/2440x1578.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>KELAS</h1>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Page</a></li>
                    <li class="active">Course</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Popular Courses 
    ============================================= -->
<div class="popular-courses default-padding bottom-less without-carousel">
    <div class="container">
        <div class="row">
            <?php $i = 1;
                    foreach ($kelas as $kel) : ?>
            <div class="popular-courses-items">

               


                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <a href="#">
                                <img src="<?= base_url(); ?>assets/User/images/bgg_<?= $i++; ?>.png" alt="Thumb">
                            </a>
                            <div class="price" id="price">Rp<?= number_format($kel['harga_kelas']) ?>/<span>bulan</span>
                            </div>
                        </div>
                        <div class="info">
                            <div class="author-info">


                            </div>
                            <h4><a href="#"><?= $kel['judul_kelas'] ?></a></h4>
                            <p>
                                <?= $kel['deskripsi_kelas'] ?>
                            </p>
                            <div class="bottom-info">
                                <ul>
                                    <li>
                                        <i class="fas fa-clock"></i> <?= $kel['waktu_kelas'] ?>
                                    </li>
                                </ul>
                                <?php 
							$id_user = $this->session->userdata('id_user');
						
						/* logic inti ambil kelas limit 1 bulan bisa mengambil lagi */
						if ($this->session->userdata('is_user_login') == true) :
							$a = "SELECT * FROM xx_pendaftaran WHERE id_user = '$id_user' AND id_kelas = '$kel[id_kelas]' ORDER BY created_at DESC LIMIT 1";
							$sql = $this->db->query($a);
							$xx = $sql->row_array();
							if ($sql->num_rows() > 0) {
								
								if (date("Y-m-d") < date("Y-m-d", strtotime("+1 month", strtotime($xx['created_at']) ))) {
									
									$url = "#";
									$txt = "Sudah Ambil Kelas";
								} else {
									
									$url = base_url('home/form');
									$txt = "Ambil Kelas";
								}
							} else {
								
								$url = base_url('home/form');
								$txt = "Ambil Kelas";
							}
							?>
                                <a href="<?= $url ?>"><?= $txt ?></a>
                                <?php elseif ($this->session->userdata('is_admin_login') == true) : ?>
                                <a href="<?= base_url('auth/login') ?>">Ambil Kelas</a>
                                <?php else : ?>
                                <a href="<?= base_url('auth/login') ?>">Ambil Kelas</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End Popular Courses -->