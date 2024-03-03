@extends('Admin.layout.index')

@section('container')

<form action="{{ url('/uploadteam') }}" method="post" enctype="multipart/form-data"> 
    @csrf

    <div class="mb-3">
        <a href="{{ url('/team') }}" class="btn btn-primary">Back To Team Table</a>
    </div>

    <div class="my-3 p-3 rounded shadow-sm">
        <div class="mb-3 row">
            <label for="namateam" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Lengkap ....">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="gambar" class="col-sm-2 col-form-label">Foto Team</label>
            <div class="col-sm-10"> 
                <input type="file" class="form-control" name="gambar" id="formfile">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="spesialis" class="col-sm-2 col-form-label">Spesialis</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="spesialis" placeholder="Masukan Spesialisnya ....">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="makanan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary text-warning">Simpan</button></div>
        </div>

    </div>
</form>    
@endsection