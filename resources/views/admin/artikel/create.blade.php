@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background-color: #39b54a">
                    <h2 style="color: white">Data Artikel</h2>
                </div>
                <div class="card-body">
                    <form action="{{url('save-artikel')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="Judul">Judul Artikel</label>
                            <input type="text" name="judul" id="" class="form-control" placeholder="Judul" required>
                        </div>
                        <div class="form-group">
                            <label for="Gambar">Gambar Artikel</label>
                            <input type="file" name="gambar" id="" class="form-control" placeholder="Giambar Artikel" required>
                        </div>
                        <div class="form-group">
                            <label for="Isi">Isi Artikel</label>
                            <textarea name="isi" id="" class="form-control" placeholder="Isi artikel" required></textarea>
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
