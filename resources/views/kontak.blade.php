@extends('layouts.landing')
@section('content')
<div class="back_re">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="title">
                 <h2>Hubungi Kami</h2>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!--  contact -->
 <div class="contact">
    <div class="container">
       <div class="row">
          <div class="col-md-6">
            <a href="https://wa.me/{{$konf->no_hp_setting}}?text=Halo%2C%20saya%20tertarik%20dengan%20kost%20Mama%20Ninda." target="_blank"><img class="img-fluid" src="{{asset('landing/images/WhatsApp.svg')}}" style="width: 50%" alt=""></a><br>
            <a href="https://wa.me/{{$konf->no_hp_setting}}?text=Halo%2C%20saya%20tertarik%20dengan%20kost%20Mama%20Ninda." target="_blank" class="btn btn-sm btn-success mb-4">Hubungi Pemilik Kost</a>
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