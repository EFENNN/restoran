@extends('Admin.layout.index')

@section('container')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Tabel Users</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="col-md-1">No</th>
                  <th class="col-md-3">Nama</th>
                  <th class="col-md-4">Email</th>
                  <th class="col-md-2">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=$data->firstItem()?>
                @foreach ($data as $data)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$data->name}}</td>
                  <td>{{$data->email}}</td>
                  
                  @if ($data->usertype=='0') 
                    <td>
                      <a href="" class="btn btn-warning btn-sm">Edit</a>
                      <a href="{{url('/deleteuser',$data->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    @else
                    <td></td>
                  @endif
                </tr>
                <?php $i++?>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection