@extends('layouts.landing')
@section('content')
    <!-- banner -->
    <section class="banner_main">
        <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
           <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
           </ol>
           <div class="carousel-inner">
              <div class="carousel-item active">
                 <img class="first-slide" src="{{asset('landing/images/qa1.jpeg')}}" alt="First slide" style="width: 100%;">
                 <div class="container">
                 </div>
              </div>
              <div class="carousel-item">
                 <img class="second-slide" src="{{asset('landing/images/qa2.jpeg')}}" alt="Second slide"style="width: 100%;">
              </div>
              <div class="carousel-item">
                 <img class="third-slide" src="{{asset('landing/images/qa3.jpeg')}}" alt="Third slide"style="width: 100%;">
              </div>
           </div>
           <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
           </a>
           <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
           </a>
        </div>
        <div class="booking_ocline">
           <div class="container">
              <div class="row">
                 <div class="col-md-5">
                    <div class="book_room">
                       <h1>Kost Mama Ninda</h1>
                        <div class="col-md-12">
                           <button class="book_btn"><a class="text-light" href="#room">Cek Kamar</a></button>
                        </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- end banner -->
     <!-- about -->
     <div class="about">
        <div class="container-fluid">
           <div class="row">
              <div class="col-md-5">
                 <div class="titlepage">
                    <h2>Tentang Kost Mama Ninda</h2>
                    <p>Selamat datang di Kost Mama Ninda, yang terletak di lingkungan tenang Silale. Kost kami menawarkan 10 kamar yang nyaman dan terawat dengan baik, tersebar di dua lantai. Setiap lantai dilengkapi dengan dua kamar mandi dan dapur yang lengkap untuk memenuhi kebutuhan sehari-hari Anda. Kami mengutamakan kebersihan, kenyamanan, dan kemudahan bagi para penghuni. Lokasi kami yang strategis memudahkan akses ke berbagai fasilitas dan transportasi terdekat. Dengan lingkungan yang tenang dan fasilitas yang terawat, Kost Mama Ninda adalah pilihan ideal bagi pelajar, profesional, atau siapa saja yang mencari tempat tinggal yang nyaman dan aman. Kami siap menyambut Anda dengan keramahan dan kenyamanan yang akan membuat Anda merasa seperti di rumah sendiri.</p>
                 </div>
              </div>
              <div class="col-md-7">
                 <div class="about_img">
                    <figure><img src="{{asset('landing/images/qa1.jpeg')}}" alt="#"/></figure>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- end about -->
     <!-- our_room -->
     <div  class="our_room" id="room">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>Kamar</h2>
                    <p>Menyediakan Kamar Yang Nyaman</p>
                 </div>
              </div>
           </div>
           <div class="row">
               @foreach ($kamar as $row)
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="{{ asset('file/kamar/'.$row->foto_kamar) }}" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Kamar No {{$row->no_kamar}}</h3>
                        <h5>Rp. {{number_format($row->harga)}} Perbulan</h5>
                        <p>{!! Str::limit($row->deskripsi, 50, '...') !!}</p>
                     </div>
                     <a class="btn btn-sm btn-danger mb-3" href="{{ url('datakamar/detail-kamar', $row->slug_kamar) }}">Detail Kamar</a>
                  </div>
               </div>                   
               @endforeach

               <div class="col-md-12 text-center mt-2" data-aos="fade-up">
                  <a href="{{ url('kamar') }}" class="btn btn-warning">Lihat Kamar Lain . . .</a>
                </div>
           </div>
        </div>
     </div>
     <!-- end our_room -->
    <!-- testimoni -->
    <div  class="blog">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>Testimoni</h2>
                    <p>Testimoni dari mereka yang pernah kost di sini </p>
                 </div>
              </div>
           </div>
           <div class="row">
            <div id="testimoni" class="col-12">
                <div id="testimoniCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($testimoni as $index => $testimony)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <div class="testimoni-item bg-light rounded shadow-sm p-4 text-center">
                                    <p class="mb-3">{{ $testimony->komentar }}</p>
                                    <h5 class="text-muted mb-0">{{ $testimony->nama }}</h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#testimoniCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#testimoniCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        </div>
     </div>
<!-- end testimoni -->
     <!-- end blog --> 
     <!--  contact -->
     <div class="contact">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>Temukan Lokasi Pada Laman Google Maps</h2>
                 </div>
              </div>
           </div>
           <div class="row">
           <div class="col-md-6">
           @if ($message = Session::get('sukses'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p>{{ $message }}</p>
                </div>
                @endif
               
                  <form id="request"action="{{route('home.store')}}" method="POST" class="main_form">
                     @csrf 
                     @method('POST')
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Nama" type="type" name="nama"> 
                        </div>
                        <div class="col-md-12">
                           <textarea name="komentar" placeholder="Komentar" type="type" Komentar="Name"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button type='submit' class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            
              <div class="col-md-6">
                 <div class="map_main">
                    <div class="map-responsive">
                       {!! $konf->maps_setting !!}
                    </div>
                 </div>
                 <a class="btn btn-sm btn-danger" href="https://maps.app.goo.gl/2BWcze5hQ9AYCZnFA" target="_blank">Buka Pada Google Maps...</a>
              </div>
           </div>
        </div>
     </div>
     <!-- end contact -->
@endsection