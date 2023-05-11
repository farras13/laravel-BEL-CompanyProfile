@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background-color:#75A0DC">
                    <div class="row">
                        <div class="text-left col-8">
                            <h2 style="color: white">Data Paket</h2>
                        </div>
                        <div class="text-right col-4">
                            <a href="{{ url('add-paket') }}"><button class="btn btn-primary">+
                                    Tambah
                                    Paket</button></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped nowrap" style="width: 100%" id="data">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Resi</th>
                                <th>Penerima</th>
                                <th>Pengirim</th>
                                <th>Berat (kg)</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paket as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->no_resi }}</td>
                                    <td>{{ $row->receiver_name }}</td>
                                    <td>{{ $row->sender_name }}</td>
                                    <td>{{ $row->weight }}</td>
                                    <td>{{ 'Rp.' . number_format($row->price) }}</td>
                                    <td>
                                        <div class="d-flex order-actions">
                                            <form action="edit-paket/{{ $row->id }}" method="get">
                                                <button type="submit" class="btn btn-sm btn-outline-primary"><i
                                                        class="ni ni-ruler-pencil text-black"></i>Edit
                                                </button>
                                            </form>
                                            <form action="{{ url('delete-paket') }}" method="POST"
                                                id="hapus_{{ $loop->iteration }}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $row->id }}">
                                                <button type="button" value="{{ $loop->iteration }}"
                                                    class="btn btn-sm btn-outline-danger hapus">X
                                                    Hapus</button>
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
        $(document).ready(function() {
            $('#data').DataTable({
                scrollX: true
            });
            $(".hapus").click(function() {
                console.log('kasfhjaf');
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
                        $("#hapus_" + nomer).submit();
                    } else if (result.isDenied) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Hapus data dibatalkan',
                        })
                    }
                });
            })
        });
    </script>
@endsection
