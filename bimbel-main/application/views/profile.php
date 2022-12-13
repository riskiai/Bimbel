 <style>
	 #white-space{
        
		width: 100%;
		height: 200px;
		
	  
  }
 </style>
 <!-- Bootstrap DatePicker Css -->
 <link href="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
 <link href="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" />

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

 <style>
 	@media screen and (max-width: 576px) {
 		.hp {
 			display: none;
 		}
 	}
 </style>

   <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Profile</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
	

 <!-- Start Students Profiel 
    ============================================= -->
    <div class="edit-profile adviros-details-area default-padding">
        <div class="container">
            <div class="row">
							<?php $attributes = array('method' => 'post'); ?>

							<?php echo form_open_multipart('siswa/profile', $attributes); ?>
				<div class="col-md-4 about-user">
                   	<img src="<?= base_url(); ?>assets/upload/foto/<?= isset($profile['foto']) ? $profile['foto'] : "default.png" ?>" alt="Thumb" title="Masukan Foto Anda">
					<input type="file" name="foto" onchange="cekJpg(this)" accept="image/jpeg,image/png,image/jpg">
                </div>
                <div class="col-md-8 update-info">
                    <h4>Update Current Info</h4>
                    <div class="row">
                        <form action="#" class="contact-form">
                            <div class="col-md-12">
                                <div class="form-group">
									<h5 style="color:#5f666c;font-size:18px;">Nama :</h5>
									<input type="text" class="form-control" value="<?= (isset($profile['nama']))  ? $profile['nama'] : ""; ?>" name="nama"> </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
								<h5 style="color:#5f666c;font-size:18px;">No HP :</h5>
								<input type="number" class="form-control" placeholder="No HP" name="no_hp" value="<?= (isset($profile['no_hp']))  ? $profile['no_hp'] : ""; ?>" required autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
								<h5 style="color:#5f666c;font-size:18px;">Alamat :</h5>
								<input type="text" class="form-control" value="<?= (isset($profile['alamat']))  ? $profile['alamat'] : ""; ?>" placeholder="Alamat" name="alamat" required autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
								<h5 style="color:#5f666c;font-size:18px;">Pendidikan :</h5>
								<input type="text" class="form-control" placeholder="Pendidikan" value="<?= (isset($profile['pendidikan']))  ? $profile['pendidikan'] : ""; ?>" name="pendidikan" required autocomplete="off" />
                                </div>
                            </div><div class="col-md-12">
                                <div class="form-group">
								<h5 style="color:#5f666c;font-size:18px;">Umur :</h5>
								<input type="number" readonly id="umur" class="form-control" placeholder="Umur" value="<?= (isset($profile['umur']))  ? $profile['umur'] : ""; ?>" name="umur" required autocomplete="off" />
                                </div>
                            </div>
							<div class="col-md-12">
                                <div class="form-group">
								<h5 style="color:#5f666c;font-size:18px;">Jenis Kelamin : :</h5>
								<select name="jenis_kelamin" id="asd" class="form-control">
 										<option value="" selected="" disabled="">-- Pilih Jenis Kelamin --</option>
 										<?php foreach ($jenis_kelamin as $jenis) : ?>
 											<?php if ($profile['jenis_kelamin'] == $jenis['value']) : ?>
 												<option value="<?= $jenis['value']; ?>" selected> <?= $jenis['nama']; ?> </option>

 											<?php else : ?>
 												<option value="<?= $jenis['value']; ?>"> <?= $jenis['nama']; ?> </option>
 											<?php endif; ?>
 											<!-- <option value="<?= $jenis['value'] ?>"><?= $jenis['nama'] ?></option> -->
 										<?php endforeach; ?>

 									</select>
                                </div>
                            </div>
							<div class="col-md-12">
                                <div class="form-group">
								<h5 style="color:#5f666c;font-size:18px;">Tempat Lahir :</h5>
								<input type="text" class="form-control" placeholder="Tempat Lahir" value="<?= (isset($profile['tempat_lahir']))  ? $profile['tempat_lahir'] : ""; ?>" name="tempat_lahir" required autocomplete="off" />
                                </div>
                            </div>
							<div class="col-md-12">
                                <div class="form-group">
								<h5 style="color:#5f666c;font-size:18px;">Tanggal Lahir :</h5>
								<input type="text" class="form-control datepicker" placeholder="Tanggal Lahir" value="<?= (isset($profile['tanggal_lahir']))  ? $profile['tanggal_lahir'] : ""; ?>" name="tanggal_lahir" required autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit">
									<input type="submit" name="submit" value="Update"  style="color: black; background-color: #ffb606;font-size:16px;width:70px;height:25px;border: 1px solid #ffb606;">
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- End Students Profile -->