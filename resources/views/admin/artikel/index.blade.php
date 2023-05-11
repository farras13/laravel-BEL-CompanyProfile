@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background-color:#39b54a">
                    <div class="row">
                        <div class="text-left col-8">
                            <h2 style="color: white">Data Artikel</h2>
                        </div>
                        <div class="text-right col-4">
                            <a href="{{url('add-artikel')}}"><button class="btn btn-primary" style="background-color: #f1592a">+ Tambah Artikel</button></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="data">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Isi</th>
                                <th>Penulis</th>
                                <th>Tanggal Terbit</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artikel as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->judul}}</td>
                                    <td>
                                        <img src="{{url('image/artikel/'.$row->gambar)}}" class="img-thumbnail" alt="">
                                    </td>
                                    <td>{{substr($row->isi,0,30)}} ...</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{ date_format(date_create($row->date),"d F Y")}}</td>
                                    <td>
                                        <div class="d-flex order-actions">
                                            <form action="edit-artikel/{{$row->id_artikel}}" method="get">
                                                <button type="submit" class="btn btn-sm btn-outline-warning"><i class="ni ni-ruler-pencil text-black"></i>Edit
                                                </button>
                                            </form>
                                            <form action="{{url('delete-artikel')}}" method="POST" id="hapus_{{$loop->iteration}}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$row->id}}">
                                                <button id="hapus" type="button" value="{{$loop->iteration}}" class="btn btn-sm btn-outline-danger">X Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready( function () {
            $('#data').DataTable();
            $("#hapus").click(function(){
                var nomer = $(this).val();
                Swal.fire({
                    title: 'Apakah anda yakin untuk menghapus data ini?',
                    showCancelButton: true,
                    confirmButtonText: `Iya`,
                    denyButtonText: `Batal`,
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            Swal.fire({
                                icon: 'info',
                                title: 'hapus data berhasil',
                            });
                            $("#hapus_"+nomer).submit();
                        } else if (result.isDenied) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Hapus data dibatalkan',
                            })
                        }
                    });
            })
        } );
    </script>
@endsection
