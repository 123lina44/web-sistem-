<?php
   $konf = DB::table('settings')->first();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>{{$konf->instansi_setting}}</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('landing/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('landing/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('landing/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('admin/assets/img/kaiadmin/admin.svg')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('landing/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('landing/images/loading.gif')}}" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="{{asset('landing/images/logo2.png')}}" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/')}}">Beranda</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('tentang_kami')}}">Tentang Kami</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('kamar')}}">Kamar</a>
                              </li>
                              {{-- <li class="nav-item">
                                 <a class="nav-link" href="gallery.html">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="blog.html">Blog</a>
                              </li> --}}
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('kontak')}}">Kontak</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->

      <section>
        @yield('content')
      </section>

      
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row justify-cotent-center  ">
                  <div class="col-lg-6 col-md-12">
                     <h3>Contact US</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$konf->alamat_setting}}</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i>{{$konf->no_hp_setting}}</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-6 col-md-12">
                     <h3>Link Menu</h3>
                     <ul class="link_menu">
                        <li><a href="{{url('/')}}">Beranda</a></li>
                        <li><a href="{{url('tentang_kami')}}">Tentan Kami</a></li>
                        <li><a href="{{url('kamar')}}">Kamar</a></li>
                        {{-- <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="blog.html">Blog</a></li> --}}
                        <li><a href="{{url('kontak')}}">Kontak</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        
                        <p>
                        © <?php $cpy = date('Y');
                                                   echo $cpy; ?> All Rights Reserved. Design by {{$konf->instansi_setting}}
                        <br>
                        </p>

                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{asset('landing/js/jquery.min.js')}}"></script>
      <script src="{{asset('landing/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('landing/js/jquery-3.0.0.min.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('landing/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('landing/js/custom.js')}}"></script>
   </body>
</html>