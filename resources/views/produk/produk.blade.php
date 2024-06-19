@extends('main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primaryx" style="color:#e0ba75";>Manajemen Data Produk</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold" style="color:#e0ba75";>
                Data Produk
            </h6>
        </div>
        <div class="card-body">
            <a href="{{route('produk_tambah')}}" class="btn btn-custom">
                <i class="fas fa-plus"></i> Tambah
            </a>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="50">No</th>
                            <th width="100">Nama Produk</th>
                            <th width="100">Harga</th>
                            <th width="75">Foto</th>
                            <th width="100">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->namaproduk }}</td>
                            <td>{{ $data->harga }}</td>
                            <td>
                                @if($data->foto)
                                    <img src="{{ url('storage/produk/'.$data->foto) }}" alt="Profile Picture" style="width: 50px; height: 50px;">
                                @else
                                    <p>Tidak ada gambar</p>
                                @endif
                            </td>
                            <td>
                                <a type="button" name="edit" id="{{ $data->id }}" value="{{ $data->id }}" class="btn btn-success" href="{{ route('produk_edit', $data->id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a name="delete" id="{{$data->id}}" value="{{$data->id}}" class="btn btn-danger" onclick="return confirm('Apakah ingin menghapus user?')">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>

</div>
@endsection