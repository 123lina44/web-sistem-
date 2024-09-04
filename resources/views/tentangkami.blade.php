@extends('layouts.landing')
@section('content')
    <!-- end header -->
    <div class="back_re">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="title">
                    <h2>Tentang Kost Mama Ninda</h2>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- about -->
     <div class="about">
        <div class="container-fluid">
           <div class="row">
              <div class="col-md-5">
                 <div class="titlepage">
                    <p class="margin_0">{!! $narasi->narasi !!}</p>
                 </div>
              </div>
              <div class="col-md-7">
                  <div class="about_img">
                    <figure><img src="{{asset('landing/images/qa1.jpeg')}}" alt="#"/></figure>
                  </div>
                  <div class="about_img mt-4">
                     <figure><img src="{{asset('landing/images/qa3.jpeg')}}" alt="#"/></figure>
                  </div>
                  <div class="about_img mt-4">
                     <figure><img src="{{asset('landing/images/qa6.jpeg')}}" alt="#"/></figure>
                  </div>
              </div>
           </div>
        </div>
     </div>
     <!-- end about -->
@endsection