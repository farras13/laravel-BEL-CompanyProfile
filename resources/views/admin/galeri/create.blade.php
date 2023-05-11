@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background-color: #75A0DC">
                    <h2 style="color: white">Data galeri</h2>
                </div>
                <div class="card-body">
                    <form action="{{url('save-galeri')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="Judul">Judul galeri</label>
                            <input type="text" name="judul" id="" class="form-control" placeholder="Judul" required>
                        </div>
                        <div class="form-group">
                            <label for="Gambar">Gambar</label>
                            <input type="file" name="gambar" id="" class="form-control" placeholder="Giambar galeri" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
