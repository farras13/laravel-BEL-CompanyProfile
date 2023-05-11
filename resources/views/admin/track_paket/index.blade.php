@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header" style="background-color:#75A0DC">
        <div class="row">
          <div class="text-left col-8">
            <h2 style="color: white">Data Track Paket</h2>
          </div>
          <div class="text-right col-4">
            <a href="{{url('add-track_paket')}}"><button class="btn btn-primary">+
                Tambah
                Track Paket</button></a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped" id="data">
          <thead>
            <tr>
              <th>No</th>
              <th>No Resi</th>
              <th>Status</th>
              <th>Waktu</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($track_paket as $row)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$row->paket->no_resi}}</td>
              <td>
                {{$row->status}}
              </td>
              <td>{{date('d F y H:i', strtotime($row->time)) . ' WIB'}}</td>
              <td>{{$row->description}}</td>
              <td>
                <form action="{{url('delete-track_paket')}}" method="POST" id="hapus_{{$loop->iteration}}">
                  @csrf
                  <input type="hidden" name="id" value="{{$row->id}}">
                  <button type="button" value="{{$loop->iteration}}" class="btn btn-sm btn-outline-danger hapus">X
                    Hapus</button>
                </form>
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
            $(".hapus").click(function(){
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
