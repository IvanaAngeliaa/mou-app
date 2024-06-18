@extends('main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-custom">Manajemen Persediaan Barang</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-custom">
                Form Tambah Persediaan Barang
            </h6>
        </div>
        <form method="post" action="{{route('persediaan_simpan')}}" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Kategori :</label>
                    <select name="kategori" class="form-control">
                        @foreach($datapersediaan as $d)
                            <option value="{{$d->id}}">{{$d->namakategori}}</option>
                        @endforeach
                        <option value="id"selected disabled hidden name="namakategori">Pilih Kategori</option>
                    </select>
            </div>
            <div class="form-group">
                <label>Nama Barang:</label>
                <input type="text" class="form-control" placeholder="Masukan Nama Barang" name="namabarang" required>
            </div>
            <div class="form-group">
                <label>Minimal Stock:</label>
                <input type="number" class="form-control" placeholder="Masukan Minimal Stock" name="minimalstock" required>
            </div>
            <div class="form-group">
                <label>Satuan:</label>
                <!-- <select class="form-control" placeholder="Pilih Satuan" name="satuan"> -->
                <select name="satuan" class="form-control">
                    <option value=""selected disabled hidden>Pilih Satuan</option>
                    <option value="mika">Mika</option>
                    <option value="gram">Gram</option>
                    <option value="pcs">Pcs</option>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Simpan
            </button>
            <a href="{{route('persediaan_index')}}" class="btn btn-warning">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
        </form>
    </div>

</div>
@endsection