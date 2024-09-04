@extends('layouts.landing')
@section('content')
    <!-- end header -->
    <div class="back_re">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="title">
                    <h2>Kamar Kost</h2>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- our_room -->
     <div  class="our_room">
        <div class="container">
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
                     <p>{!! Str::limit($row->deskripsi, 50, '. . .') !!}</p>
                  </div>
                  <a class="btn btn-sm btn-danger mb-3" href="{{ url('datakamar/detail-kamar', $row->slug_kamar) }}">Detail Kamar</a>
               </div>
            </div>                   
            @endforeach

           {{-- <div class="col-md-4 col-sm-6">
              <div id="serv_hover"  class="room">
                 <div class="room_img">
                    <figure><img src="{{asset('landing/images/room2.jpg')}}" alt="#"/></figure>
                 </div>
                 <div class="bed_room">
                    <h3>Bed Room</h3>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                 </div>
              </div>
           </div>
           <div class="col-md-4 col-sm-6">
              <div id="serv_hover"  class="room">
                 <div class="room_img">
                    <figure><img src="{{asset('landing/images/room3.jpg')}}" alt="#"/></figure>
                 </div>
                 <div class="bed_room">
                    <h3>Bed Room</h3>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                 </div>
              </div>
           </div>
           <div class="col-md-4 col-sm-6">
              <div id="serv_hover"  class="room">
                 <div class="room_img">
                    <figure><img src="{{asset('landing/images/room4.jpg')}}" alt="#"/></figure>
                 </div>
                 <div class="bed_room">
                    <h3>Bed Room</h3>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                 </div>
              </div>
           </div>
           <div class="col-md-4 col-sm-6">
              <div id="serv_hover"  class="room">
                 <div class="room_img">
                    <figure><img src="{{asset('landing/images/room5.jpg')}}" alt="#"/></figure>
                 </div>
                 <div class="bed_room">
                    <h3>Bed Room</h3>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                 </div>
              </div>
           </div>
           <div class="col-md-4 col-sm-6">
              <div id="serv_hover"  class="room">
                 <div class="room_img">
                    <figure><img src="{{asset('landing/images/room6.jpg')}}" alt="#"/></figure>
                 </div>
                 <div class="bed_room">
                    <h3>Bed Room</h3>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                 </div>
              </div>
           </div> --}}
        </div>
        </div>
     </div>
     <!-- end our_room -->
@endsection