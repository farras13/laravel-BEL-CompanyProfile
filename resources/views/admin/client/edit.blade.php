@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background-color: #75A0DC">
                    <h2 style="color: white">Edit client</h2>
                </div>
                <div class="card-body">
                    <form action="{{url('update-client')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="" value="{{$client->id_client}}">
                        <div class="form-group">
                            <label for="Image">Gambar Saat Ini</label>
                            <img src="{{url('image/client/'.$client->images.'')}}" class="img-thumbnail" alt="">
                        </div>
                        <div class="form-group">
                            <label for="Gambar">Gambar</label>
                            <input type="file" name="gambar" id="" class="form-control" placeholder="Giambar client" required>
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
