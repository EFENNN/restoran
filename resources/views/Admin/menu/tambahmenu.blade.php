@extends('Admin.layout.index')

@section('container')

<form action="{{ url('/uploadmenu') }}" method="post" enctype="multipart/form-data"> 
    @csrf

    <div class="mb-3">
        <a href="{{ url('/menu') }}" class="btn btn-primary">Back To Menu Table</a>
    </div>

    <div class="my-3 p-3 rounded shadow-sm">
        <div class="mb-3 row">
            <label for="namamakanan" class="col-sm-2 col-form-label">Nama Makanan</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Makanannya ....">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10"> 
                <input type="number" class="form-control" name="harga" id="harga" placeholder="Masukan Harga Makanannya ....">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="gambar" class="col-sm-2 col-form-label">Foto Makanan</label>
            <div class="col-sm-10"> 
                <input type="file" class="form-control" name="gambar" id="formfile">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name="deskripsi" placeholder="Masukan Deskripsi Makanannya ....">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="makanan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary text-warning">Simpan</button></div>
        </div>

    </div>
</form>    
@endsection