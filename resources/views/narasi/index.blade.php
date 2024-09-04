@extends('layouts.index')
@section('content')
<div class="container" style="margin-top: 70px;">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">{{$konf->instansi_setting}}</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="{{route('dashboard.index')}}">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">{{$title}}</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="d-flex align-items-center">
                <h4 class="card-title">{{$title}}</h4>
                <a class="btn btn-primary btn-round ms-auto" href="{{route('narasi.create')}}">
                  <i class="fa fa-plus"></i>
                  Tambah
                </a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                @if ($message = Session::get('sukses'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p>{{ $message }}</p>
                </div>
                @endif
                <table
                  id="basic-datatables"
                  class="display table table-striped table-hover"
                >
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Narasi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  {{-- <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nomor Kamar</th>
                      <th>Harga Kamar Perbulan</th>
                      <th>Ukuran Kamar</th>
                      <th>Maksimal Orang</th>
                      <th>Status</th>
                      <th>Foto Kamar</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot> --}}
                  <tbody>
                    @foreach ($narasi as $row)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{!! $row->narasi !!}</td>
                      <td>
                          <a href="{{ route('narasi.edit', $row->id_narasi) }}" class="btn btn-primary btn-xs" style="display: inline-block"><i class="fas fa-edit">Edit</i></a>
                          <form action="{{ route('narasi.destroy', $row->id_narasi) }}" method="POST" style="display: inline-block">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-xs btn-flat show_confirm"><i class="fas fa-trash">Delete</i></button>
                          </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection