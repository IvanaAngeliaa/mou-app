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
                        
                        @foreach($persediaan as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->namabarang }}</td>
                            <td>{{ $data->kategori->namakategori}}</td>
                            <td class="{{ $data->stock <= $data->minimalstock ? 'text-danger' : '' }}">{{ $data->stock }}</td>
                            <td>{{ $data->satuan }}</td>
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
                            <th width="300">Nama Barang</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <!-- <th>Tanggal Keluar</th> -->
                            <th>Kadaluarsa</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    @foreach($pemakaian as $data)
                        <tr>
                            <!-- <td>{{ $loop->iteration }}</td> -->
                            <td>{{ $data->persediaan->namabarang }}</td>
                            <td>{{ $data->stock }}</td>
                            <td>{{ $data->status }}</td>
                            <td>{{ $data->tanggal }}</td>
                            <td>{{ $data->kadaluarsa }}</td>
                            <td>
                                <a type="button" name="edit" id="{{ $data->id }}" value="{{ $data->id }}" class="btn btn-success" href="{{ route('pemakaian_edit', $data->id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form id="del_event"  method="post" action="{{route('pemakaian_hapus', $data->id)}}" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-danger deleteBtn"><i class="fas fa-trash-alt"></i></button>
                                </form>
                                {{-- <a name="delete" id="{{$data->id}}" value="{{$data->id}}" class="btn btn-danger deleteBtn">
                                    <i class="fas fa-trash-alt"></i>
                                </a> --}}
                            </td>
                        </tr>
                        
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).on('click', '.deleteBtn', function (e) {
        e.preventDefault();
        var form = $(this).parents('form');
        swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Data yang dihapus tidak dapat dikembalikan!',
            icon: 'warning',
            cancelButtonText: "Batal",
            showCancelButton: true,
            confirmButtonText: 'Ya, Hapus!',
        }).then((result)=>{
            if(result.isConfirmed){
                form.submit();
                swal.close();
            }else{
                swal.close();
            }
        })
    });
</script>
@endsection