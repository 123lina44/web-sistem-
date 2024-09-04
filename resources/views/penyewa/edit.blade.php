@extends('layouts.index')
@section('content')
<div class="container" style="margin-top: 70px;">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">{{$title}}</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="#">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="{{route('penyewa.index')}}">Data Penyewa</a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="{{route('penyewa.create')}}">{{$title}}</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Error!</strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <form class="row g-3" action="{{ route('penyewa.update', $penyewa->id_penyewa) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <div class="col-md-6 mb-2">
                          <label class="form-label" for="">Nama Penyewa<abbr title="" style="color: black">*</abbr></label>
                          <input type="text" class="form-control" placeholder="Masukkan Nama Penyewa disini...." name="penyewa" value="{{ $penyewa->penyewa}}">
                      </div>
                      <div class="col-md-6 mb-2">
                          <label class="form-label" for="">No Kamar <abbr title="" style="color: black">*</abbr></label>
                          <select name="id_kamar" id="" class="form-control">
                            <option @if ($penyewa->id_kamar == $penyewa->id_kamar)
                                selected
                            @endif value="{{$penyewa->id_kamar}}">Kamar No {{$penyewa->no_kamar}}</option>
                            @foreach ($listkamar as $row)
                              <option value="{{$row->id_kamar}}">Kamar No {{$row->no_kamar}}</option>        
                            @endforeach
                          </select>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label class="form-label" for="">Jenis Kelamin <abbr title="" style="color: black">*</abbr></label>
                          <select name="jenis_kelamin" id="" class="form-control">
                            <option @if ($penyewa->jenis_kelamin == $penyewa->jenis_kelamin)
                                selected
                            @endif value="{{$penyewa->jenis_kelamin}}">{{$penyewa->jenis_kelamin}}</option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                        </select>
                      </div>

                      <button class="btn btn-success col-2 m-3" type="submit">Submit</button>
                    </form>
            </div>
        </div>
    </div>
    </div>
  </div>
@endsection
@section('script')
@endsection