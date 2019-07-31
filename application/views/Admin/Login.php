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
<body>
	<div class="row justify-content-center">
		<div class="head text-center">
			<div id="logo">
				<img src="<?php echo base_url();?>assets/img/core-img/logo2.png">
			</div>
			<div style="padding-top: 40px;">
				<b>PEMERINTAH KOTA BATU</b>
			</div>
			<div class="row">
				DINAS KOMUNIKASI DAN INFORMATIKA KOTA BATU
			</div>
		</div>
	</div>
	

<div class="main-content-wrapper section-padding-50" >
	<div class="container">
		<div class="row justify-content-center">
			
			<!-- ============= Post Content Area ============= -->
			<div class="col-lg-5" >

				<div class="single-blog-content ">
					<div class="post-content" >
						
						<!-- FORM LOGIN DISINI-->
						<form action="<?php echo base_url().'index.php/Admin/Login/auth'?>" class="inner-login" method="post">
							<h4 class="text-center title-login">Login Admin</h4><br>
							<div class="form-group">
								<input type="text" class="form-control" name="username" placeholder="Username">
							</div>

							<div class="form-group">
								<input type="password" class="form-control" name="password" placeholder="Password">
							</div>

							<input type="submit" class="btn btn-block green" style="background-color: #8AB48F;" value="LOGIN" />

							<div class="text-center forget">
								<p>Forgot Password ?</p>
							</div>
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
</html>