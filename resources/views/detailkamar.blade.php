@extends('layouts.landing')
@section('content')
<!-- end header -->
<div class="back_re">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="title">
               <h2>Kamar No {{$detailkamar->no_kamar}}</h2>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- our_room -->
<div  class="our_room">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-sm-12">
            <div id="serv_hover"  class="room">
               <div class="room_img">
                  <figure><img src="{{ asset('file/kamar/'.$detailkamar->foto_kamar) }}" alt="#"/></figure>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-sm-12">
            <div class="bed_room">
               <p>{!! $detailkamar->deskripsi !!}</p>
               <ul class="property-list-details mt-5">
                  <li>No. Kamar: <strong>{{ $detailkamar->no_kamar }}</strong></li>
                  <li>Harga / Bulan: <strong>Rp. {{ number_format($detailkamar->harga) }}</strong></li>
                  @if ($detailkamar->status == "Tersedia")
                  <li>Status: <span class="badge badge-success">{{ $detailkamar->status }}</span></li>
                  @else
                  <li>Status: <span class="badge badge-warning">{{ $detailkamar->status }}</span></li>
                  @endif
                  <li>Maximal Penghuni dalam kamar: <strong>{{ $detailkamar->jumlah_max_kamar }} orang/kamar</strong></li>
                  <li>Ukuran Kamar: <strong>{{ $detailkamar->ukuran_kamar }} Meter</strong></li>
                  @if ($detailkamar->ukuran_kamar == "4x2")
                  <li><img src="{{ asset('file/ukuran_kamar/4x2.jpeg') }}" alt=""></li>
                  @else
                  <li><img src="{{ asset('file/ukuran_kamar/3x2.jpeg') }}" alt=""></li>
                  @endif
               </ul>
            </div>
         </div>
   </div>
</div>
<!-- end our_room -->

<div class="site-section" style="margin-top: 200px">
   <div class="container">
     <div class="row">
       <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
         <h2 class="mb-5">Lihat Kamar</h2>
         <p>Tersedia berbagai macam pilihan kamar yang dapat anda pilih sesuai dengan keinginan anda masing-masing</p>
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
       <div class="col-md-12 text-center mt-5" data-aos="fade-up">
         <a href="{{ url('kamar') }}" class="btn btn-warning">Lihat Kamar Lain . . .</a>
       </div>
     </div>
   </div>
 </div>
@endsection