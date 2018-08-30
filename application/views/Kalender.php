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
<<<<<<< HEAD
                        <h2>Kalender</h2>
=======
                        <h2>Kalender Event</h2>

                          <article class="post-content">
                            <div class="row">
                                <div class="container theme-showcase">
                                 <div id="holder" class="row"></div>
                                 <script type="text/tmpl" id="tmpl">
  {{ 
  var date = date || new Date(),
      month = date.getMonth(), 
      year = date.getFullYear(), 
      first = new Date(year, month, 1), 
      last = new Date(year, month + 1, 0),
      startingDay = first.getDay(), 
      thedate = new Date(year, month, 1 - startingDay),
      dayclass = lastmonthcss,
      today = new Date(),
      i, j; 
  if (mode === 'week') {
    thedate = new Date(date);
    thedate.setDate(date.getDate() - date.getDay());
    first = new Date(thedate);
    last = new Date(thedate);
    last.setDate(last.getDate()+6);
  } else if (mode === 'day') {
    thedate = new Date(date);
    first = new Date(thedate);
    last = new Date(thedate);
    last.setDate(thedate.getDate() + 1);
  }
  
  }}
  <table class="calendar-table table table-condensed table-tight">
    <thead>
      <tr>
        <td colspan="7" style="text-align: center">
          <table style="white-space: nowrap; width: 100%">
            <tr>
              <td style="text-align: left;">
                <span class="btn-group">
                  <button class="js-cal-prev btn btn-default">&lt;</button>
                  <button class="js-cal-next btn btn-default">&gt;</button>
                </span>
                <button class="js-cal-option btn btn-default {{: first.toDateInt() <= today.toDateInt() && today.toDateInt() <= last.toDateInt() ? 'active':'' }}" data-date="{{: today.toISOString()}}" data-mode="month">{{: todayname }}</button>
              </td>
              <td>
                <span class="btn-group btn-group-lg">
                  {{ if (mode !== 'day') { }}
                    {{ if (mode === 'month') { }}<button class="js-cal-option btn btn-link" data-mode="year">{{: months[month] }}</button>{{ } }}
                    {{ if (mode ==='week') { }}
                      <button class="btn btn-link disabled">{{: shortMonths[first.getMonth()] }} {{: first.getDate() }} - {{: shortMonths[last.getMonth()] }} {{: last.getDate() }}</button>
                    {{ } }}
                    <button class="js-cal-years btn btn-link">{{: year}}</button> 
                  {{ } else { }}
                    <button class="btn btn-link disabled">{{: date.toDateString() }}</button> 
                  {{ } }}
                </span>
              </td>
              <td style="text-align: right">
                <span class="btn-group">
                  <button class="js-cal-option btn btn-default {{: mode==='year'? 'active':'' }}" data-mode="year">Year</button>
                  <button class="js-cal-option btn btn-default {{: mode==='month'? 'active':'' }}" data-mode="month">Month</button>
                  <button class="js-cal-option btn btn-default {{: mode==='week'? 'active':'' }}" data-mode="week">Week</button>
                  <button class="js-cal-option btn btn-default {{: mode==='day'? 'active':'' }}" data-mode="day">Day</button>
                </span>
              </td>
            </tr>
          </table>
          
        </td>
      </tr>
    </thead>
    {{ if (mode ==='year') {
      month = 0;
    }}
    <tbody>
      {{ for (j = 0; j < 3; j++) { }}
      <tr>
        {{ for (i = 0; i < 4; i++) { }}
        <td class="calendar-month month-{{:month}} js-cal-option" data-date="{{: new Date(year, month, 1).toISOString() }}" data-mode="month">
          {{: months[month] }}
          {{ month++;}}
        </td>
        {{ } }}
      </tr>
      {{ } }}
    </tbody>
    {{ } }}
    {{ if (mode ==='month' || mode ==='week') { }}
    <thead>
      <tr class="c-weeks">
        {{ for (i = 0; i < 7; i++) { }}
          <th class="c-name">
            {{: days[i] }}
          </th>
        {{ } }}
      </tr>
    </thead>
    <tbody>
      {{ for (j = 0; j < 6 && (j < 1 || mode === 'month'); j++) { }}
      <tr>
        {{ for (i = 0; i < 7; i++) { }}
        {{ if (thedate > last) { dayclass = nextmonthcss; } else if (thedate >= first) { dayclass = thismonthcss; } }}
        <td class="calendar-day {{: dayclass }} {{: thedate.toDateCssClass() }} {{: date.toDateCssClass() === thedate.toDateCssClass() ? 'selected':'' }} {{: daycss[i] }} js-cal-option" data-date="{{: thedate.toISOString() }}">
          <div class="date">{{: thedate.getDate() }}</div>
          {{ thedate.setDate(thedate.getDate() + 1);}}
        </td>
        {{ } }}
      </tr>
      {{ } }}
    </tbody>
    {{ } }}
    {{ if (mode ==='day') { }}
    <tbody>
      <tr>
        <td colspan="7">
          <table class="table table-striped table-condensed table-tight-vert" >
            <thead>
              <tr>
                <th>&nbsp;</th>
                <th style="text-align: center; width: 100%">{{: days[date.getDay()] }}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="timetitle" >All Day</th>
                <td class="{{: date.toDateCssClass() }}">  </td>
              </tr>
              <tr>
                <th class="timetitle" >Before 6 AM</th>
                <td class="time-0-0"> </td>
              </tr>
              {{for (i = 6; i < 22; i++) { }}
              <tr>
                <th class="timetitle" >{{: i <= 12 ? i : i - 12 }} {{: i < 12 ? "AM" : "PM"}}</th>
                <td class="time-{{: i}}-0"> </td>
              </tr>
              <tr>
                <th class="timetitle" >{{: i <= 12 ? i : i - 12 }}:30 {{: i < 12 ? "AM" : "PM"}}</th>
                <td class="time-{{: i}}-30"> </td>
              </tr>
              {{ } }}
              <tr>
                <th class="timetitle" >After 10 PM</th>
                <td class="time-22-0"> </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
    {{ } }}
  </table>
</script>

<script type="text/tmpl" id="tmpl">
  {{ var date = date || new Date(), month = date.getMonth(), year = date.getFullYear(), first = new Date(year, month, 1), last = new Date(year, month + 1, 0), startingDay = first.getDay(), thedate = new Date(year, month, 1 - startingDay), dayclass = lastmonthcss,
  today = new Date(), i, j; if (mode === 'week') { thedate = new Date(date); thedate.setDate(date.getDate() - date.getDay()); first = new Date(thedate); last = new Date(thedate); last.setDate(last.getDate()+6); } else if (mode === 'day') { thedate = new
  Date(date); first = new Date(thedate); last = new Date(thedate); last.setDate(thedate.getDate() + 1); } }}
  <table class="calendar-table table table-condensed table-tight">
    <thead>
      <tr>
        <td colspan="7" style="text-align: center">
          <table style="white-space: nowrap; width: 100%">
            <tr>
              <td style="text-align: left;">
                <span class="btn-group">
                  <button class="js-cal-prev btn btn-default">&lt;</button>
                  <button class="js-cal-next btn btn-default">&gt;</button>
                </span>
                <button class="js-cal-option btn btn-default {{: first.toDateInt() <= today.toDateInt() && today.toDateInt() <= last.toDateInt() ? 'active':'' }}" data-date="{{: today.toISOString()}}" data-mode="month">{{: todayname }}</button>
              </td>
              <td>
                <span class="btn-group btn-group-lg">
                  {{ if (mode !== 'day') { }}
                    {{ if (mode === 'month') { }}<button class="js-cal-option btn btn-link" data-mode="year">{{: months[month] }}</button>{{ } }}
                    {{ if (mode ==='week') { }}
                      <button class="btn btn-link disabled">{{: shortMonths[first.getMonth()] }} {{: first.getDate() }} - {{: shortMonths[last.getMonth()] }} {{: last.getDate() }}</button>
                    {{ } }}
                    <button class="js-cal-years btn btn-link">{{: year}}</button> 
                  {{ } else { }}
                    <button class="btn btn-link disabled">{{: date.toDateString() }}</button> 
                  {{ } }}
                </span>
              </td>
              <td style="text-align: right">
                <span class="btn-group">
                  <button class="js-cal-option btn btn-default {{: mode==='year'? 'active':'' }}" data-mode="year">Year</button>
                  <button class="js-cal-option btn btn-default {{: mode==='month'? 'active':'' }}" data-mode="month">Month</button>
                  <button class="js-cal-option btn btn-default {{: mode==='week'? 'active':'' }}" data-mode="week">Week</button>
                  <button class="js-cal-option btn btn-default {{: mode==='day'? 'active':'' }}" data-mode="day">Day</button>
                </span>
              </td>
            </tr>
          </table>

        </td>
      </tr>
    </thead>
    {{ if (mode ==='year') { month = 0; }}
    <tbody>
      {{ for (j = 0; j
      < 3; j++) { }} <tr>
        {{ for (i = 0; i
        < 4; i++) { }} <td class="calendar-month month-{{:month}} js-cal-option" data-date="{{: new Date(year, month, 1).toISOString() }}" data-mode="month">
          {{: months[month] }} {{ month++;}}
          </td>
          {{ } }}
          </tr>
          {{ } }}
    </tbody>
    {{ } }} {{ if (mode ==='month' || mode ==='week') { }}
    <thead>
      <tr class="c-weeks">
        {{ for (i = 0; i
        < 7; i++) { }} <th class="c-name">
          {{: days[i] }}
          </th>
          {{ } }}
      </tr>
    </thead>
    <tbody>
      {{ for (j = 0; j
      < 6 && (j < 1 || mode==='month' ); j++) { }} <tr>
        {{ for (i = 0; i
        < 7; i++) { }} {{ if (thedate> last) { dayclass = nextmonthcss; } else if (thedate >= first) { dayclass = thismonthcss; } }}
          <td class="calendar-day {{: dayclass }} {{: thedate.toDateCssClass() }} {{: date.toDateCssClass() === thedate.toDateCssClass() ? 'selected':'' }} {{: daycss[i] }} js-cal-option" data-date="{{: thedate.toISOString() }}">
            <div class="date">{{: thedate.getDate() }}</div>
            {{ thedate.setDate(thedate.getDate() + 1);}}
          </td>
          {{ } }}
          </tr>
          {{ } }}
    </tbody>
    {{ } }} {{ if (mode ==='day') { }}
    <tbody>
      <tr>
        <td colspan="7">
          <table class="table table-striped table-condensed table-tight-vert">
            <thead>
              <tr>
                <th>&nbsp;</th>
                <th style="text-align: center; width: 100%">{{: days[date.getDay()] }}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="timetitle">All Day</th>
                <td class="{{: date.toDateCssClass() }}"> </td>
              </tr>
              <tr>
                <th class="timetitle">Before 6 AM</th>
                <td class="time-0-0"> </td>
              </tr>
              {{for (i = 6; i
              < 22; i++) { }} <tr>
                <th class="timetitle">{{: i
                  <=1 2 ? i : i - 12 }} {{: i < 12 ? "AM" : "PM"}}</th>
                    <td class="time-{{: i}}-0"> </td>
      </tr>
      <tr>
        <th class="timetitle">{{: i
          <=1 2 ? i : i - 12 }}:30 {{: i < 12 ? "AM" : "PM"}}</th>
            <td class="time-{{: i}}-30"> </td>
      </tr>
      {{ } }}
      <tr>
        <th class="timetitle">After 10 PM</th>
        <td class="time-22-0"> </td>
      </tr>
      </tbody>
      </table>
      </td>
      </tr>
    </tbody>
    {{ } }}
  </table>
</script>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script  src="<?php echo base_url();?>assets/js/calender.js"></script>
<!-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
 -->                               </div>
                            </div>
                        </article>


>>>>>>> e38adba8525b77869743696aebd4cdaa9e2e338e
                        <article class="post-content">
                            <div class="row">
                                <div class="col-md-5"> 
                                    <a class="img-thumbnail lightbox" href="#" data-plugin-options='{"type":"image"}'>
                                        <img class="img-responsive" src="http://placehold.it/500x600">
                                    </a>
                                </div>         
                                <div class="col-md-7">
                                    <div class="post-meta">
                                        <h2><a href="?p=6&id=106">Gerak jalan</a></h2>
                                        <span><i class="fa fa-tag"></i> Acara : Umum</span><br/>
                                        <span><i class="fa fa-calendar-check-o"></i> Mulai : 21 Apr 2018 Jam 09:00 WIB</span><br/>
                                        <span><i class="fa fa-calendar-times-o"></i> Selesai : 21 Apr 2018 Jam 12:00 WIB</span><br/>
                                        <span><i class="fa fa-map-marker"></i> Tempat : Start Balai Kota </span><br/>
                                        <span><i class="fa fa-user"></i> Pelaksana : - </span>
                                    </div>
                                    <div >
                                        <p style="text-align:justify ; ">
                                        -                                                <hr class="invisible short" />
                                        <a href="<?php echo base_url()?>index.php/Read_pengumuman" class="btn btn-xs btn-primary pull-right" id="selengkapnya">Selengkapnya...</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post-content">
                            <div class="row">
                                <div class="col-md-5"> 
                                     <a class="img-thumbnail lightbox" href="#" data-plugin-options='{"type":"image"}'>
                                        <img class="img-responsive" src="http://placehold.it/500x600">
                                    </a>
                                </div>         
                                <div class="col-md-7">
                                    <div class="post-meta">
                                        <h2><a href="?p=6&id=104">BATU Art Festival</a></h2>
                                        <span><i class="fa fa-tag"></i> Acara : Umum</span><br/>
                                        <span><i class="fa fa-calendar-check-o"></i> Mulai : 20 Apr 2018 Jam 09:00 WIB</span><br/>
                                        <span><i class="fa fa-calendar-times-o"></i> Selesai : 24 Apr 2018 Jam 22:00 WIB</span><br/>
                                        <span><i class="fa fa-map-marker"></i> Tempat : Alun-alun Kota Batu</span><br/>
                                        <span><i class="fa fa-user"></i> Pelaksana : - </span>
                                    </div>
                                    <div >
                                        <p style="text-align:justify">
                                        -
                                        <a href="<?php echo base_url()?>index.php/Read_pengumuman" class="btn btn-xs btn-primary pull-right" id="selengkapnya">Selengkapnya...</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post-content">
                            <div class="row">
                                <div class="col-md-5"> 
                                     <a class="img-thumbnail lightbox" href="#" data-plugin-options='{"type":"image"}'>
                                        <img class="img-responsive" src="http://placehold.it/500x600">
                                    </a>
                                </div>         
                                <div class="col-md-7">
                                    <div class="post-meta">
                                        <h2><a href="?p=6&id=103">Senam Massal </a></h2>
                                        <span><i class="fa fa-tag"></i> Acara : Umum</span><br/>
                                        <span><i class="fa fa-calendar-check-o"></i> Mulai : 15 Apr 2018 Jam 06:00 WIB</span><br/>
                                        <span><i class="fa fa-calendar-times-o"></i> Selesai : 15 Apr 2018 Jam 11:00 WIB</span><br/>
                                        <span><i class="fa fa-map-marker"></i> Tempat : Alun-Alun Batu</span><br/>
                                        <span><i class="fa fa-user"></i> Pelaksana : </span>
                                    </div>
                                    <div >
                                        <p style="text-align:justify">
                                      <hr class="invisible short" />
                                        <a href="<?php echo base_url()?>index.php/Read_pengumuman" class="btn btn-xs btn-primary pull-right" id="selengkapnya">Selengkapnya...</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post-content">
                            <div class="row">
                                <div class="col-md-5"> 
                                    <a class="img-thumbnail lightbox" href="#" data-plugin-options='{"type":"image"}'>
                                        <img class="img-responsive" src="http://placehold.it/500x600">
                                    </a>
                                </div>         
                                <div class="col-md-7">
                                    <div class="post-meta">
                                        <h2><a href="?p=6&id=101">Batu Bershalawat</a></h2>
                                        <span><i class="fa fa-tag"></i> Acara : Umum</span><br/>
                                        <span><i class="fa fa-calendar-check-o"></i> Mulai : 14 Apr 2018 Jam 20:00 WIB</span><br/>
                                        <span><i class="fa fa-calendar-times-o"></i> Selesai : 14 Apr 2018 Jam 23:59 WIB</span><br/>
                                        <span><i class="fa fa-map-marker"></i> Tempat : </span><br/>
                                        <span><i class="fa fa-user"></i> Pelaksana : </span>
                                    </div>
                                    <div >
                                        <p style="text-align:justify">
                                                                                      <hr class="invisible short">
                                        <a href="<?php echo base_url()?>index.php/Read_pengumuman" class="btn btn-xs btn-primary pull-right" id="selengkapnya">Selengkapnya...</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post-content">
                            <div class="row">
                                <div class="col-md-5"> 
                                     <a class="img-thumbnail lightbox" href="#" data-plugin-options='{"type":"image"}'>
                                        <img class="img-responsive" src="http://placehold.it/500x600">
                                    </a>
                                </div>         
                                <div class="col-md-7">
                                    <div class="post-meta">
                                        <h2><a href="?p=6&id=102">Istbat dan Nikah Masal</a></h2>
                                        <span><i class="fa fa-tag"></i> Acara : Umum</span><br/>
                                        <span><i class="fa fa-calendar-check-o"></i> Mulai : 14 Apr 2018 Jam 09:00 WIB</span><br/>
                                        <span><i class="fa fa-calendar-times-o"></i> Selesai : 14 Apr 2018 Jam 11:00 WIB</span><br/>
                                        <span><i class="fa fa-map-marker"></i> Tempat : </span><br/>
                                        <span><i class="fa fa-user"></i> Pelaksana : </span>
                                    </div>
                                    <div >
                                        <p style="text-align:justify">
                                        -                                                <hr class="invisible short" />
                                        <a href="<?php echo base_url()?>index.php/Read_pengumuman" class="btn btn-xs btn-primary pull-right" id="selengkapnya">Selengkapnya...</a>
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

