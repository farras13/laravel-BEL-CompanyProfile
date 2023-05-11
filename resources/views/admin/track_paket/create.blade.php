@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header" style="background-color: #75A0DC">
        <h2 style="color: white">Data Track Paket</h2>
      </div>
      <div class="card-body">
        <form action="{{url('save-track_paket')}}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">No Resi</label>
            <div class="col-sm-10">
              <select name="package_id" class="select2 form-control">
                <option selected disabled>Pilih No Resi</option>
                <?php foreach ($no_resi as $data) :  ?>
                <option value="<?= $data->id ?>">
                  <?= $data->no_resi ?>
                </option>
                <?php endforeach ?>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Masuk">
                <label class="form-check-label" for="inlineRadio1">Masuk</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Keluar">
                <label class="form-check-label" for="inlineRadio2">Keluar</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="inlineRadio3" value="Diantar">
                <label class="form-check-label" for="inlineRadio3">Diantar ke Penerima</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="inlineRadio3" value="Selesai">
                <label class="form-check-label" for="inlineRadio3">Selesai</label>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Waktu</label>
            <div class="col-sm-10">
              <input type="datetime-local" class="form-control" placeholder="Waktu Input" name="time">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Deskripsi Perjalanan" name="description">
            </div>
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
