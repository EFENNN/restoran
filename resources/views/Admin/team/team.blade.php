@extends('Admin.layout.index')

@section('container')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Tabel Team's</h6>
          <div class="pb-3">
            <a href="{{ url('/tambahteam')}}" class="btn btn-primary">+ Tambah Team</a>
          </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  </thead>
                  <th class="col-md-3">Nama</th>
                  <th class="col-md-4">Foto</th>
                  <th class="col-md-3">Spesialis</th>
                  <th class="col-md-2">Action</th>
                </tr>
              <tbody>
                @foreach ($teams as $team)
                  <tr>
                    <td>{{ $team->nama }}</td>
                    <td><img src="/teamimage/{{ $team->gambar }}" style="width: 150px;"></td>
                    <td>{{ $team->spesialis }}</td>
                    <td>
                      <a href="{{ url('teamedit', $team->id)}}" class="btn btn-warning btn-sm">Edit</a>
                      <a href="{{ url('deleteteam', $team->id)}}" class="btn btn-danger btn-sm">Delete</a>
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
@endsection