@extends('main')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-custom">Manajemen Pemakaian Barang</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-custom">
            Form Edit Pemakaian Barang
        </h6>
    </div>
    <form action="{{ route('pemakaian_update', $data->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
    

    <!-- tambahin input id dan input status, tapi valuenya ud ditentuin, dan bikin input jadi hidden -->
        <input hidden type="text" class="form-control" name="id" value="<?php echo $data['id'] ?>" />
        <input hidden type="hidden" class="form-control" name="status" value="<?php echo $data['status'] ?>" />


        <div class="form-group">
            <label>Stock:</label>
            <input type="number" class="form-control" placeholder=" Masukan stock yang ditambah" name="stock" required value="<?=$data['stock'];?>">
        </div>
        <div class="form-group">
            <label>Tanggal:</label>
            <input type="date" class="form-control" placeholder=" Pilih tanggal" name="tanggal" required value="<?=$data['tanggal'];?>">
        </div>
        <div class="form-group">
            <label>Kadaluarsa:</label>
            <input type="date" class="form-control" placeholder=" Pilih tanggal" name="kadaluarsa" required value="<?=$data['kadaluarsa'];?>">
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