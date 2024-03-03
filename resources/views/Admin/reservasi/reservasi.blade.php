@extends('Admin.layout.index')

@section('container')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Tabel Reservasi</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
              </thead>
              <th class="col-md-2">Nama</th>
              <th class="col-md-2">No Phone</th>
              <th class="col-md-2">Time</th>
              <th class="col-md-2">Date</th>
              <th class="col-md-2">Orang</th>
              <th class="col-md-3">Pesan</th>
              <th class="col-md-2">Action</th>
              </tr>
              <tbody>
                @foreach ($data as $data)
                <tr>
                  <td>{{ $data->nama }}</td>
                  <td>{{ $data->number }}</td>
                  <td>{{ $data->time }}</td>
                  <td>{{ $data->date }}</td>
                  <td>{{ $data->guest }}</td>
                  <td>{{ $data->message }}</td>
                  @auth
                  @if (auth()->user()->usertype == '1')
                  <td>
                    <a href="{{ url('deletebook', $data->id)}}" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                  @else
                  <td></td>
                  @endif
                  @endauth
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