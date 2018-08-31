<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Website Kota Batu </title>

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url();?>assets/img/core-img/logo1.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">

</head>

    
<!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <nav class="navbar navbar-expand-lg" id="navi">
                        <!-- Logo -->
                        <a class="navbar-brand" href="<?php echo base_url(); ?>" ><img id="logo" src="<?php echo base_url();?>assets/img/core-img/logo2.png" alt="Logo"> <b>PEMERINTAH</b> KOTA BATU</a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo base_url();?>">Beranda <span class="sr-only">(current)</span></a>
                                </li>
                                 <li class="nav-item <?php if($this->uri->segment('1')=="Kalender") {echo "active";}   ?>">
                                    <a class="nav-link" href="<?php echo base_url();?>index.php/Kalender">Kalender</a>
                                </li>                                 
                            </ul>
                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Search something...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
<body>
    <!-- ***** Header Area Start ***** -->

  
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
   
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area ============= -->
              
                <!-- ========== Sidebar Area ========== -->
                   <div class="col-md-10">
                    <div class="single-blog-content mb-100">
                        <h2>Kalender Kota</h2>
                                 <article class="post-content">
                            <div class="row">
                                <div class="col-md-5"> 
                                    <a class="img-thumbnail lightbox" href="#" data-plugin-options='{"type":"image"}'>
                                        <img class="img-responsive1" src="http://placehold.it/500x600">
                                    </a>
                                </div>         
                                <div class="col-md-7">
                                    <div class="post-meta">
                                        <span><i class="fa fa-calendar-check-o"></i> Tanggal : </span><br/>
                                        <h2><a href="?p=6&id=106"></a></h2>
                                        <span><i class="fa fa-tag"></i> Acara :</span><br/>
                                         <span><i class="fa fa-map-marker"></i> Tempat :  </span><br/>
                                        <span><i class="fa fa-user"></i>  Deskripsi : - </span>
                                    </div>
                                    <div >
                                        <p style="text-align:justify ; ">
                                        <hr class="invisible short" />
                                    <!-- <a href="<?php echo base_url()?>index.php/Read_kalender" class="btn btn-xs btn-primary pull-right" id="selengkapnya">Selengkapnya...</a> -->
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post-content">
                            <div class="row">
                                <div class="col-md-5"> 
                                     <a class="img-thumbnail lightbox" href="#" data-plugin-options='{"type":"image"}'>
                                        <img class="img-responsive1" src="http://placehold.it/500x600">
                                    </a>
                                </div>         
                                <div class="col-md-7">
                                    <div class="post-meta">
                                        
                                    <span><i class="fa fa-calendar-check-o"></i> Tanggal : </span><br/>
                                        <h2><a href="?p=6&id=104"></a></h2>
                                        <span><i class="fa fa-tag"></i> Acara : </span><br/>
                                        <span><i class="fa fa-calendar-check-o"></i> Tanggal : </span><br/>
                                        <span><i class="fa fa-map-marker"></i> Tempat : </span><br/>
                                        <span><i class="fa fa-user"></i>  Deskripsi : - </span>
                                    </div>
                                    <div >
                                        <p style="text-align:justify">
                                        
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post-content">
                            <div class="row">
                                <div class="col-md-5"> 
                                     <a class="img-thumbnail lightbox" href="#" data-plugin-options='{"type":"image"}'>
                                        <img class="img-responsive1" src="http://placehold.it/500x600">
                                    </a>
                                </div>         
                                <div class="col-md-7">
                                    <div class="post-meta">
                                        
                                    <span><i class="fa fa-calendar-check-o"></i> Tanggal : </span><br/>
                                        <h2><a href="?p=6&id=103"></a></h2>
                                        <span><i class="fa fa-tag"></i> Acara : Umum</span><br/>
                                        <span><i class="fa fa-calendar-check-o"></i> Tanggal : </span><br/>
                                        <span><i class="fa fa-user"></i>Deskripsi : </span>
                                    </div>
                                    <div >
                                        <p style="text-align:justify">
                                      <hr class="invisible short" /hr>
                                      <hr /hr>
                                       
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post-content">
                            <div class="row">
                                <div class="col-md-5"> 
                                    <a class="img-thumbnail lightbox" href="#" data-plugin-options='{"type":"image"}'>
                                        <img class="img-responsive1" src="http://placehold.it/500x600">
                                    </a>
                                </div>         
                                <div class="col-md-7">
                                    <div class="post-meta">
                                        
                                    <span><i class="fa fa-calendar-check-o"></i> Tanggal : </span><br/>
                                        <h2><a href="?p=6&id=101">Batu Bershalawat</a></h2>
                                        <span><i class="fa fa-tag"></i> Acara : Umum</span><br/>
                                       <span><i class="fa fa-map-marker"></i> Tempat : </span><br/>
                                        <span><i class="fa fa-user"></i>  Deskripsi : </span>
                                    </div>
                                    <div >
                                        <p style="text-align:justify">
                                                                                      <hr class="invisible short">
                                        
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post-content">
                            <div class="row">
                                <div class="col-md-5"> 
                                     <a class="img-thumbnail lightbox" href="#" data-plugin-options='{"type":"image"}'>
                                        <img class="img-responsive1" src="http://placehold.it/500x600">
                                    </a>
                                </div>         
                                <div class="col-md-7">
                                    <div class="post-meta">
                                        
                                    <span><i class="fa fa-calendar-check-o"></i> Tanggal : </span><br/>
                                        <h2><a href="?p=6&id=102"></a></h2>
                                        <span><i class="fa fa-tag"></i> Acara : Umum</span><br/>
                                       <span><i class="fa fa-map-marker"></i> Tempat : </span><br/>
                                        <span><i class="fa fa-user"></i>  Deskripsi : </span>
                                    </div>
                                    <div >
                                        <p style="text-align:justify">
                                             <hr class="invisible short" />
                                       
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                            <br /br>
                        </article>
                        <ul class="pagination pagination-lg pull-right ">
                                <li><a href="?p=6&a=1">Previous</a> </li>
                                <li class=""><a href="#" class="angka previous round"> 1 </a></li>
                                <li class=""><a href="#" class="angka previous round"> 2 </a></li>
                                <li class=""><a href="?p=6&a=2" class="angka previous round" >3</a></li>
                                <li class=""><a href="?p=6&a=21" class="angka previous round" >21</a></li>
                            <li><a href="?p=6&a=3">Next</a></li> 

                            
                         </ul>
                    </div>
                </div>
            </div>
<hr> </hr>
          
        </div>
    </div>

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-single-widget">
                        <h5>
                            Supported By
                        </h5>
                        <div>
                            <table class="table table text-center"> 
                            <tr>                        
                              <td>
                                <a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/img/core-img/kominfo.jpg" alt="Photo"></a>
                            </td>
                            <td>
                                <a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/img/core-img/kemendagri-logo.png" alt="Photo"></a>                     
                            </td>
                            <td>
                                <a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/img/core-img/setneg.jpg" alt="Photo"></a>
                            </td>
                            <td>
                              <a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/img/core-img/rup.png" alt="Photo"></a>
                          </td>
                          <td>
                              <a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/img/core-img/lkpp.jpg" alt="Photo"></a>
                          </td>
                          <td>
                            <a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/img/core-img/pse.png" alt="Photo"></a>
                        </td>
                    </tr>
                </table>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-single-widget footer-menu">
                        <h5>Lokasi</h5>
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=balai kota amongtani&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><a href="https://www.crocothemes.net"></a><style>.mapouter{overflow:hidden;height:100%;width:100%;}.gmap_canvas {background:none!important;height:100%;width:100%;}</style></div>
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-single-widget ">
                        <h5>Hubungi Kami</h5>
                         <p>
                            Dinas Komunikasi dan Informatika - Gedung B1 Lt. 3 <br>
                            Gedung Balai Kota Among Tani - Pemerintah Kota Batu <br>
                            JL. Panglima Sudirman No. 507<br>
                            Kota Batu<br>
                            <br>
                            Email :
                            administrator@batukota.go.id
                    
                         </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
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
    <!-- ***** Footer Area End ***** -->

 
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    
</body>

