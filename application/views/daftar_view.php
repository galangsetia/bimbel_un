<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- SEO Meta Tags -->
	<meta name="description" content="Landing page template built with HTML and Bootstrap 4 for presenting training courses, classes, workshops and for convincing visitors to register using the form.">
	<meta name="author" content="Inovatik">

	<!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" />
	<!-- website name -->
	<meta property="og:site" content="" />
	<!-- website link -->
	<meta property="og:title" content="" />
	<!-- title shown in the actual shared post -->
	<meta property="og:description" content="" />
	<!-- description shown in the actual shared post -->
	<meta property="og:image" content="" />
	<!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" />
	<!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

	<!-- Website Title -->
	<title>Daftar Kelas</title>

	<!-- Styles -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
	<link href="<?= base_url("assets/home/") ?>css/bootstrap.css" rel="stylesheet">
	<link href="<?= base_url("assets/home/") ?>css/fontawesome-all.css" rel="stylesheet">
	<link href="<?= base_url("assets/home/") ?>css/swiper.css" rel="stylesheet">
	<link href="<?= base_url("assets/home/") ?>css/magnific-popup.css" rel="stylesheet">
	<link href="<?= base_url("assets/home/") ?>css/styles.css" rel="stylesheet">

	<!-- Favicon  -->
	<link rel="icon" href="<?= base_url("assets/home/") ?>images/favicon.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">




	<!-- Breadcrumbs -->
	<div class="ex-basic-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<!-- Default form register -->
                    <?php foreach($pendaftar as $key){ ?>
                        	<form class="text-center border border-light p-5" method="post" action="<?php echo base_url() . 'Daftar/update'; ?>">
                            <p class="h4 mb-4">Ubah Data</p>
                            <div class="form-row mb-4">
                                <br>
                                <small>ID</small>
                                <input type="text"  class="form-control form-control-line form-user-input" name="id_pendaftar" id="id_pendaftar" required readonly value="<?php echo $key->id_pendaftar ?>"> 
                                <br><br>
                                <small>Nama Anda</small>
                                <input type="text" placeholder="Inputkan nama lengkap" class="form-control
                                form-control-line form-user-input" name="nama_pendaftar" id="nama_pendaftar"required value="<?php echo $key->nama_pendaftar ?>">
                                <br><br>
                                <small>Email</small>
                                <input type="email" placeholder="Inputkan Email anda" class="form-control
                                form-control-line form-user-input" name="email_pendaftar" id="email_pendaftar" required value="<?php echo $key->email_pendaftar ?>">
                                <br><br>
                                <small>No WA</small>
                                <input type="number" placeholder="Inputkan Nomer whatsapp anda" class="form-control
                                form-control-line form-user-input" name="no_wa" id="no_wa" required value="<?php echo $key->no_wa ?>">
                                <br><br>
                                <small>Alamat</small>
                                <input type="textarea" placeholder="Inputkan Alamat Lengkap anda" class="form-control
                                form-control-line form-user-input" name="alamat_pendaftar" id="alamat_pendaftar" required value="<?php echo $key->alamat_pendaftar ?>">
                                <br><br>
                                <small>Asal Sekolah</small>
                                <input type="text" placeholder="Inputkan asal sekolah anda" class="form-control
                                form-control-line form-user-input" name="asal_sekolah" id="asal_sekolah" required value="<?php echo $key->asal_sekolah ?>">
                                <br><br>
                                <small>Paket Bimbel</small>
                                <select class="form-control" name="paket_bimbel" id="paket_bimbel" required>
                                    <option value="<?php echo $key->paket_bimbel ?>" selected ><?php echo $key->paket_bimbel ?></option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="SD">SD</option>
                                </select>
								<h5 style="margin-top:20px">Pembayaran</h5>
                                <select class="form-control" name="keterangan" id="keterangan" required>
								<option value="<?php echo $key->keterangan ?>" selected ><?php echo $key->keterangan ?></option>
                                    <option value="BELUM">BELUM</option>
                                    <option value="SUDAH">SUDAH</option>
            
                                </select>
                            </div>
                            <!-- Sign up button -->
                            <button class="btn btn-info my-4 btn-block" type="submit">Simpan</button>
                        </form>
                        <?php } ?>

            
				
					<!-- Default form register -->

				</div>

				<div class="col-lg-6">
				<button class="btn-konfrim btn btn-danger text-white" data-toggle="modal" data-target="#myModal"> Hapus  </button>
				
				<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog" id="editModal">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
               
			    
				<!-- body modal -->
			    	<div class="modal-body">
    
				<p>Hapus data atas nama</p>
						<h5><?php echo $key->nama_pendaftar ?></h5>
				    </div>
				<!-- footer modal -->
			    	<div class="modal-footer">
					<button class="btn btn-sm btn-danger text-white"> <?php echo anchor('daftar/hapus_pendaftar/'.$key->id_pendaftar,'<font color=white > Hapus </font>'); ?> </button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			    	</div>
			</div>
		</div>
    </div>
				</div>
				
			</div>

		</div>
		<!-- end of container -->
	</div>
	<!-- end of ex-basic-1 -->
	<!-- end of breadcrumbs -->









	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="p-small">Copyright © 2020 <a href="#">Coding Joga</a> - IT banget
					</p>
				</div>
				<!-- end of col -->
			</div>
			<!-- enf of row -->
		</div>
		<!-- end of container -->
	</div>
	<!-- end of copyright -->
	<!-- end of copyright -->


	<!-- Scripts -->
	<script src="<?= base_url("assets/home/") ?>js/jquery.min.js"></script>
	<!-- jQuery for Bootstrap's JavaScript plugins -->
	<script src="<?= base_url("assets/home/") ?>js/popper.min.js"></script>
	<!-- Popper tooltip library for Bootstrap -->
	<script src="<?= base_url("assets/home/") ?>js/bootstrap.min.js"></script>
	<!-- Bootstrap framework -->
	<script src="<?= base_url("assets/home/") ?>js/jquery.easing.min.js"></script>
	<!-- jQuery Easing for smooth scrolling between anchors -->
	<script src="<?= base_url("assets/home/") ?>js/jquery.countdown.min.js"></script>
	<!-- The Final Countdown plugin for jQuery -->
	<script src="<?= base_url("assets/home/") ?>js/swiper.min.js"></script>
	<!-- Swiper for image and text sliders -->
	<script src="<?= base_url("assets/home/") ?>js/jquery.magnific-popup.js"></script>
	<!-- Magnific Popup for lightboxes -->
	<script src="<?= base_url("assets/home/") ?>js/validator.min.js"></script>
	<!-- Validator.js - Bootstrap plugin that validates forms -->
	<script src="<?= base_url("assets/home/") ?>js/scripts.js"></script>
	<!-- Custom scripts -->
</body>

</html>
