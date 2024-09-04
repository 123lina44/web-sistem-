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
            <a href="{{route('narasi.index')}}">Data Narasi</a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="{{route('narasi.create')}}">{{$title}}</a>
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
                    <form class="row g-3" action="{{ route('narasi.update', $narasi->id_narasi) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <div class="col-12 mb-4">
                          <label for="">Narasi</label>
                          <textarea name="narasi" id="editor" cols="30" rows="10">{{ $narasi->narasi }}</textarea>
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
<script>
  CKEDITOR.replace( 'editor', {
      filebrowserUploadMethod: 'form'
  });
</script>
@endsection