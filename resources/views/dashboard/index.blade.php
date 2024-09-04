@extends('layouts.index')
@section('content')
<div class="container" style="margin-top: 70px;">
    <div class="page-inner">
      <div
        class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
      >
        <div>
          <h3 class="fw-bold mb-3">{{$title}}</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-3">
          <div class="card card-stats card-round">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-icon">
                  <div
                    class="icon-big text-center icon-primary bubble-shadow-small"
                  >
                    <i class="fas fa-door-open"></i>
                  </div>
                </div>
                <div class="col col-stats ms-3 ms-sm-0">
                  <div class="numbers">
                    <p class="card-category">Kamar Kost</p>
                    <h4 class="card-title">{{$kamar}} Kamar</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-3">
          <div class="card card-stats card-round">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-icon">
                  <div
                    class="icon-big text-center icon-warning bubble-shadow-small"
                  >
                  <i class="fas fa-male"></i>
                  </div>
                </div>
                <div class="col col-stats ms-3 ms-sm-0">
                  <div class="numbers">
                    <p class="card-category">Penyewa</p>
                    <h4 class="card-title">{{$penyewa}} Orang</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <h4 class="card-title">Data Penyewa Kost</h4>
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
                    <th>Penyewa</th>
                    <th>Kamar No</th>
                    <th>Jenis Kemlamin</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($penyewaGet as $row)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->penyewa }}</td>
                    <td>{{ $row->no_kamar }}</td>
                    <td>{{ $row->jenis_kelamin }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
  </div>
@endsection