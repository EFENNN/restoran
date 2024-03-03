@extends('Admin.layout.index')

@section('container')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Tabel Menu's</h6>
          <div class="pb-3">
            <a href="{{ url('/tambahmenu')}}" class="btn btn-primary">+ Tambah menu</a>
          </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  </thead>
                  <th class="col-md-3">Menu Makanan</th>
                  <th class="col-md-2">Harga</th>
                  <th class="col-md-3">Foto</th>
                  <th class="col-md-2">Deskripsi</th>
                  <th class="col-md-2">Action</th>
                </tr>
              <tbody>
                @foreach ($menus as $menu)
                  <tr>
                    <td>{{ $menu->nama }}</td>
                    <td>{{ $menu->harga }}</td>
                    <td><img src="/foodimage/{{ $menu->gambar }}" style="width: 150px;"></td>
                    <td>{{ $menu->deskripsi }}</td>
                    <td>
                      <a href="{{ url('menuedit', $menu->id)}}" class="btn btn-warning btn-sm">Edit</a>
                      <a href="{{ url('deletemenu', $menu->id)}}" class="btn btn-danger btn-sm">Delete</a>
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