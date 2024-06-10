@extends('main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primaryx" style="color:#e0ba75";>Manajemen Data User</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primaryx" style="color:#e0ba75";>
                Data User
            </h6>
        </div>
        <div class="card-body">
            <a class="btn btn-custom" href="{{route('user_tambah')}}">
                <i class="fas fa-plus"></i> Tambah
            </a>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="50">No</th>
                            <th width="100">Username</th>
                            <th width="100">Full Name</th>
                            <!-- <th width="75">Password</th> -->
                            <th width="75">Foto</th>
                            <th width="100">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($data as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->username }}</td>
                            <td>{{ $data->fullname }}</td>
                            <td>
                                @if($data->profil)
                                    <img src="{{ url('storage/user/'.$data->profil) }}" alt="Profile Picture" style="width: 50px; height: 50px;">
                                @else
                                    <p>Tidak ada gambar</p>
                                @endif
                            </td>
                            <td>
                                <a type="button" name="edit" id="{{ $data->id }}" value="{{ $data->id }}" class="btn btn-success" href="{{ route('user_edit', $data->id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form id="del_event"  method="post" action="{{route('user_hapus', $data->id)}}" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-danger deleteBtn"><i class="fas fa-trash-alt"></i></button>
                                </form>
                                {{-- <a name="delete" id="{{$data->id}}" value="{{$data->id}}" class="btn btn-danger deleteBtn">
                                    <i class="fas fa-trash-alt"></i>
                                </a> --}}
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