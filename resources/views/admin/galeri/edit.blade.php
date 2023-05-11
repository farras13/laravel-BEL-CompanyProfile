@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background-color: #75A0DC">
                    <h2 style="color: white">Edit galeri</h2>
                </div>
                <div class="card-body">
                    <form action="{{url('update-galeri')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="" value="{{$galeri->id_galeri}}">
                        <div class="form-group">
                            <label for="Judul">Judul galeri</label>
                            <input type="text" name="judul" id="" value="{{$galeri->judul}}" class="form-control" placeholder="Judul" required>
                        </div>
                        <div class="form-group">
                            <label for="Image">Gambar Saat Ini</label>
                            <img src="{{url('image/galeri/'.$galeri->gambar.'')}}" class="img-thumbnail" alt="">
                        </div>
                        <div class="form-group">
                            <label for="Gambar">Gambar</label>
                            <input type="file" name="gambar" id="" class="form-control" placeholder="Giambar galeri" required>
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
