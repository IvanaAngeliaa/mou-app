@extends('main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primaryx" style="color:#e0ba75";>Manajemen Persediaan Barang</h1>

    <!-- Info tabel -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold" style="color:#e0ba75";>
               Informasi Persediaan Barang
            </h6>

            <div class="card-body">
        <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="75">Id Barang</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Stock</th>
                            <th>Satuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($datapersediaan as $d)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $datapersediaan->namabarang }}</td>
                            <td>{{ ($datapersediaan->kategori) ? $data->kategori->namakategori : ""}}</td>
                            <td>{{ $datapersediaan->minimalstock }}</td>
                            <td>{{ $datapersediaan->satuan }}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
        </div>
    </div>

    <!-- tabel edit -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold" style="color:#e0ba75";>
                Persediaan Barang
            </h6>

        <div class="card-body">
            <a href="{{route('persediaan_tambah')}}" class="btn btn-custom">
                <i class="fas fa-plus"></i> Tambah
            </a>

            <a href="{{route('pemakaian_tambah')}}" class="btn btn-custom">
                <i class="fas fa-edit"></i> Pemakaian
            </a>

        </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="100">Id Barang</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <!-- <th>Tanggal Keluar</th> -->
                            <th>Kadaluarsa</th>
                            <th width="100">Aksi</th>
                        </tr>
                    </thead>
                    @foreach($datapemakaian as $d)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $datapemakaian->stock }}</td>
                            <td>{{ $datapemakaian->status }}</td>
                            <td>{{ $datapemakaian->tanggal }}</td>
                            <td>{{ $datapemakaian->kadaluarsa }}</td>
                        
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection