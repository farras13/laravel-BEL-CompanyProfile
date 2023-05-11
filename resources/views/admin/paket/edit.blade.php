@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header" style="background-color: #75A0DC">
        <h2 style="color: white">Edit Artikel</h2>
      </div>
      <div class="card-body">
        <form action="{{url('update-paket')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" id="" value="{{$paket->id}}">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">No Resi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="No Resi" name="no_resi" value={{$paket->no_resi}}>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Penerima</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Nama Penerima" name="receiver_name"
                value={{$paket->receiver_name}}>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Alamat Penerima</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Alamat Penerima" name="receiver_address"
                value={{$paket->receiver_address}}>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Pengirim</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Nama Pengirim" name="sender_name"
                value={{$paket->sender_name}}>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Alamat Pengirim</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Alamat Pengirim" name="sender_address"
                value={{$paket->sender_address}}>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Deskripsi Paket</label>
            <div class="col-sm-10">
              <textarea placeholder="Deskripsi Paket" name="package_desc"
                class="form-control">{{$paket->package_desc}}</textarea>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Berat (Kg)</label>
            <div class="col-sm-10">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Kg</span>
                </div>
                <input type="number" class="form-control" name="weight" value={{$paket->weight}}>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp</span>
                </div>
                <input type="number" class="form-control" name="price" value={{$paket->price}}>
              </div>
            </div>
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
