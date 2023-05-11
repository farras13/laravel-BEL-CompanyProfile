@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background-color: #39b54a">
                    <h2 style="color: white">Edit Artikel</h2>
                </div>
                <div class="card-body">
                    <form action="{{url('update-artikel')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="" value="{{$artikel->id_artikel}}">
                        <div class="form-group">
                            <label for="Judul">Judul Artikel</label>
                            <input type="text" name="judul" id="" value="{{$artikel->judul}}" class="form-control" placeholder="Judul" required>
                        </div>
                        <div class="form-group">
                            <label for="Image">Gambar Saat Ini</label>
                            <img src="{{url('image/artikel/'.$artikel->gambar.'')}}" class="img-thumbnail" alt="">
                        </div>
                        <div class="form-group">
                            <label for="Gambar">Gambar Artikel</label>
                            <input type="file" name="gambar" id="" class="form-control" placeholder="Giambar Artikel" required>
                        </div>
                        <div class="form-group">
                            <label for="Isi">Isi Artikel</label>
                            <textarea name="isi" id="" class="form-control" placeholder="Isi artikel" required>{{$artikel->isi}}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">
                                <i class="fa fa-save"></i> Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
