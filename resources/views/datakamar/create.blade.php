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
            <a href="{{route('datakamar.index')}}">Data Kamar</a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="{{route('datakamar.create')}}">{{$title}}</a>
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
                    <form class="row g-3" action="{{ route('datakamar.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                      <div class="col-md-6 mb-2">
                          <label class="form-label" for="">Nomor Kamar<abbr title="" style="color: black">*</abbr></label>
                          <input type="number" class="form-control" placeholder="Masukkan Nomor Kamar disini...." name="no_kamar" value="{{ old('no_kamar') }}">
                      </div>
                      <div class="col-md-6 mb-2">
                          <label class="form-label" for="">Biaya Kamar Perbulan <abbr title="" style="color: black">*</abbr></label>
                          <input type="number" class="form-control" placeholder="Masukkan Biaya Kamar Perbulan disini...." name="harga" value="{{ old('harga') }}">
                      </div>
                      <div class="col-md-6 mb-2">
                          <label class="form-label" for="">Ukuran Kamar <abbr title="" style="color: black">*</abbr></label>
                          <select name="ukuran_kamar" id="" class="form-control">
                            <option value="">Pilih Ukuran Kamar</option>
                            <option value="4x2">4x2</option>
                            <option value="3x2">3x2</option>
                        </select>
                      </div>
                      <div class="col-md-6 mb-2">
                          <label class="form-label" for="">Maksimal Orang <abbr title="" style="color: black">*</abbr></label>
                          <input type="number" class="form-control" placeholder="Masukkan Maksimal Orang disini...." name="jumlah_max_kamar" value="{{ old('jumlah_max_kamar') }}">
                      </div>
                      <div class="col-md-6 mb-2">
                          <label class="form-label" for="">Status Kamar <abbr title="" style="color: black">*</abbr></label>
                          <select name="status" id="" class="form-control">
                              <option value="">Pilih Status Kamar</option>
                              <option value="Tersedia">Tersedia</option>
                              <option value="Tidak Tersedia">Tidak Tersedia</option>
                          </select>
                      </div>
                      <div class="col-md-6 mb-2">
                          <label class="form-label" for="">Foto <abbr title="" style="color: black">*</abbr> </label>
                          <input id="inputImg" type="file" accept="image/*" name="foto_kamar" class="form-control">
                          <img class="d-none w-25 h-25 my-2" id="previewImg" src="#" alt="Preview image">
                      </div>
                      <div class="col-12 mb-4">
                          <label for="">Deskripsi</label>
                          <textarea name="deskripsi" id="editor" cols="30" rows="10">{{ old('deskripsi') }}</textarea>
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
  document.getElementById('inputImg').addEventListener('change', function() {
      // Get the file input value and create a URL for the selected image
      var input = this;
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
              document.getElementById('previewImg').setAttribute('src', e.target.result);
              document.getElementById('previewImg').classList.add("d-block");
          };
          reader.readAsDataURL(input.files[0]);
      }
  });
</script>
<script>
  CKEDITOR.replace( 'editor', {
      filebrowserUploadMethod: 'form'
  });
</script>
@endsection