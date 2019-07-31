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
                                    <a class="nav-link" href="<?php echo base_url();?>index.php/Admin/EVENT/Pengumuman">Pengumuman</a>
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

	<div class="row justify-content-center">
		<div class="head text-center">
			<!-- <div id="logo">
				<img src="<?php echo base_url();?>assets/img/core-img/logo2.png">
			</div> -->
			<!-- <div style="padding-top: 40px;">
				<b>SELAMAT DATANG ADMIN BERITA</b>
			</div> -->
			<!-- <div class="row">
				PORTAL DATA PEMERINTAH KOTA BATU
			</div> -->
		</div>
	</div>
	
<div class="main-content-wrapper section-padding-100-70" >
	<div class="container">
		<div class="row justify-content-center">
			
			<!-- ============= Post Content Area ============= -->
			<div class="col-lg-12" >
				<div class="single-blog-content ">
					<div class="post-content" >
						<b>DATA PENGUMUMAN WEBSITE KOTA BATU</b>
						<div>
							<a href="<?php echo site_url('Admin/Event/Pengumuman/add') ?>" class="tn btn-sm btn-primary icon"> + Tambah</a>
						</div>
						<!-- <div class="card-header">
							<a href="<?php echo site_url('Admin/Event/Pengumuman/add') ?>"><i class="fas fa-plus"></i> Add New</a>
						</div> -->
						<table class="table" width="100%" cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									
									<th>Nama Pengumuman</th>
									<th>Deskripsi</th>
									<th>Gambar</th>
									<th>Tanggal</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($pengumuman as $pengumuman ): ?>
								<tr>
									<td width="150">
										<?php echo $pengumuman->nama_pengumuman ?>
									</td>
									<td>
										<?php  echo (strip_tags(substr($pengumuman->deskripsi, 0,80))) ?>
									</td>
									<td>
										<img src="<?php echo base_url('./upload/pengumuman/'.$pengumuman->gambar) ?>">
									</td>
									<td>
										<?php echo $pengumuman->tanggal_upload; ?>
									</td>
									<td width="250">
										<a href="<?php echo site_url('Admin/Event/Pengumuman/edit/').$pengumuman->id_pengumuman ?>" class="btn btn-sm btn-primary icon">Edit </a>
										<a onclick="deleteConfirm('<?php echo site_url('Admin/Event/Pengumuman/delete/'.$pengumuman->id_pengumuman) ?>')"
											 href="#!" class="btn btn-sm btn-danger">Hapus</a>
										</td>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					</div>
				</div>
			</div>

			<!-- ========== Sidebar Area ========== -->

		</div>
<?php $this->load->view("Admin/Partial/Modal.php") ?>



	</div>
</div>
<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>


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
</html>