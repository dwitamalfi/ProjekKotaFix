<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Portal Resmi Pemerintah Kota Batu </title>
	 <!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url();?>assets/img/core-img/logo1.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
     <link href="assets/landing-css/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <!-- TINYMCE SETTING -->

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<!-- END TINYMCE -->


</head>
<header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <nav class="navbar navbar-expand-lg" id="navi">
                        <!-- Logo -->
                        <a class="navbar-brand" href="<?php echo base_url(); ?>" ><img id="logo" src="<?php echo base_url();?>assets/img/core-img/logo2.png" alt="Logo"> <b>ADMIN EVENT</b> PORTAL KOTA BATU</a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo base_url();?>">Beranda <span class="sr-only">(current)</span></a>
                                </li>
                                 <li class="nav-item <?php if($this->uri->segment('3')=="Pengumuman") {echo "active";}   ?>">
                                    <a class="nav-link" href="<?php echo base_url();?>index.php/Admin/Event/Pengumuman">Pengumuman</a>
                                </li>
                                 <li class="nav-item <?php if($this->uri->segment('3')=="Kalender") {echo "active";}   ?>">
                                    <a class="nav-link" href="<?php echo base_url();?>index.php/Admin/Event/Kalender">Kalender</a>
                                </li>
                                <li class="nav-item <?php if($this->uri->segment('1')=="Lambang") {echo "active";}   ?>">
                                    <a class="nav-link" href="<?php echo base_url();?>index.php/Admin/Login/logout">Logout</a>
                                </li>
                                
                            </ul>
                            <!-- Search Form  -->
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
<body>

	<!-- <div class="row justify-content-center">
		<div class="head text-center">
			<div id="logo">
				<img src="<?php echo base_url();?>assets/img/core-img/logo2.png">
			</div>
			<div style="padding-top: 40px;">
				<b>SELAMAT DATANG ADMIN BERITA</b>
			</div>
			<div class="row">
				PORTAL DATA PEMERINTAH KOTA BATU
			</div>
		</div>
	</div> -->
	
<div class="main-content-wrapper section-padding-100" >
	<div class="container">
		<div class="row justify-content-center">
			
			<!-- ============= Post Content Area ============= -->
			<div class="col-lg-12" >
				<div class="single-blog-content ">
					<div class="post-content" >
						<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
						<form action="<?php base_url('Admin/Event/Kalender/add') ?>" method="post" enctype="multipart/form-data">
							<p>
								<label for="nama_acara">Nama Acara</label><br>
								<input class="form-control <?php echo form_error('nama_acara') ? 'is-invalid' :'' ?>" name="nama_acara" type="text" id="nama_acara" size="70">
								<div class="invalid=feedback">
									<?php echo form_error('nama_acara') ;?>
								</div>
							</p>
							<p>
								<label for="tanggal_acara">Tanggal Acara</label><br>
								<input class="form-control <?php echo form_error('tanggal_acara') ? 'is-invalid' :'' ?>" name="tanggal_acara" type="text" id="datepicker" size="70">
								<div class="invalid=feedback">
									<?php echo form_error('tanggal_acara') ;?>
								</div>
							</p>
							<p>
								<label for="tempat">Tempat Acara</label><br>
								<input class="form-control <?php echo form_error('tempat') ? 'is-invalid' :'' ?>" name="tempat" type="text" id="tempat" size="70">
								<div class="invalid=feedback">
									<?php echo form_error('tempat') ;?>
								</div>
							</p>
							<p> <label for="gambar">Upload Gambar</label><br>
								<input class="form-control <?php echo form_error('gambar') ? 'is-invalid' :'' ?>" type="file" name="gambar" id="gambar"> 
								<div class="invalid=feedback">
									<?php echo form_error('gambar') ;?>
								</div>
							</p>
							<p>
								<label for="deskripsi">Deskripsi Acara</label><br>
								<textarea class="form-control <?php echo form_error('isi') ? 'is-invalid' :'' ?>" name="deskripsi" id="" cols="100" rows="10"></textarea>
								<div class="invalid=feedback">
									<?php echo form_error('deskripsi') ;?>
								</div>
							</p>
							<p>
								<input type="submit" name="submit" id="submit" value="Submit">
								<input type="reset" name="submit2" id="submit2" value="Reset">
							</p>
						</form>
					</div>
				</div>
			</div>

			<!-- ========== Sidebar Area ========== -->

		</div>



	</div>
</div>



</body>

    <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url();?>assets/js/active.js"></script>
    <!--JQUERY -->
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
    	dateFormat : "yy-mm-dd",
    	autoclose : true
    });
  } );
  </script>
</html>