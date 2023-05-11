@extends('layouts.template')
@section('content')
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url({{ asset('assets/images/BANNER-1.jpg') }});">
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url({{ asset('assets/images/BANNER-2.jpg') }});">
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url({{ asset('assets/images/BANNER-3.jpg') }});">
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
</section><!-- End Hero -->

<div class="container">
  {{-- Track --}}
  <div class="row" id="profil">
    <div class="col-12">
      <div class="card text-center">
        <hr class="lines">
        <h3>Lacak Paket</h3>
        <hr class="lines">
        <div class="card-body" style="background-color:#ffffff;">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <form action="{{url('track')}}" method="post">
                @csrf
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Masukkan No. Resi" aria-label="Masukkan No. Resi"
                    aria-describedby="basic-addon2" name="no_resi">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-primary input-group-text" id="basic-addon2"
                      style="color: #ffffff;">Lacak</span>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Profil --}}
  <style>
    .timeline_area {
      position: relative;
      z-index: 1;
    }

    .single-timeline-area {
      position: relative;
      z-index: 1;
      padding-left: 180px;
    }

    @media only screen and (max-width: 575px) {
      .single-timeline-area {
        padding-left: 100px;
      }
    }

    .single-timeline-area .timeline-date {
      position: absolute;
      width: 180px;
      height: 100%;
      top: 0;
      left: 0;
      z-index: 1;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -ms-grid-row-align: center;
      align-items: center;
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end;
      padding-right: 60px;
    }

    @media only screen and (max-width: 575px) {
      .single-timeline-area .timeline-date {
        width: 100px;
      }
    }

    .single-timeline-area .timeline-date::after {
      position: absolute;
      width: 3px;
      height: 100%;
      content: "";
      background-color: #ebebeb;
      top: 0;
      right: 30px;
      z-index: 1;
    }

    .single-timeline-area .timeline-date::before {
      position: absolute;
      width: 11px;
      height: 11px;
      border-radius: 50%;
      background-color: #78A2E2;
      content: "";
      top: 50%;
      right: 26px;
      z-index: 5;
      margin-top: -5.5px;
    }

    .single-timeline-area .timeline-date p {
      margin-bottom: 0;
      color: #020710;
      font-size: 13px;
      text-transform: uppercase;
      font-weight: 500;
    }

    .single-timeline-area .single-timeline-content {
      position: relative;
      z-index: 1;
      padding: 30px 30px 25px;
      border-radius: 6px;
      margin-bottom: 15px;
      margin-top: 15px;
      -webkit-box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
      box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
      border: 1px solid #ebebeb;
    }

    @media only screen and (max-width: 575px) {
      .single-timeline-area .single-timeline-content {
        padding: 20px;
      }
    }

    .single-timeline-area .single-timeline-content .timeline-icon {
      -webkit-transition-duration: 500ms;
      transition-duration: 500ms;
      width: 30px;
      height: 30px;
      background-color: #045FD4;
      -webkit-box-flex: 0;
      -ms-flex: 0 0 30px;
      flex: 0 0 30px;
      text-align: center;
      max-width: 30px;
      border-radius: 50%;
      margin-right: 15px;
    }

    .single-timeline-area .single-timeline-content .timeline-icon i {
      color: #ffffff;
      line-height: 30px;
    }

    .single-timeline-area .single-timeline-content .timeline-text h6 {
      -webkit-transition-duration: 500ms;
      transition-duration: 500ms;
    }

    .single-timeline-area .single-timeline-content .timeline-text p {
      font-size: 13px;
      margin-bottom: 0;
    }

    .single-timeline-area .single-timeline-content:hover .timeline-icon,
    .single-timeline-area .single-timeline-content:focus .timeline-icon {
      background-color: #020710;
    }

    .single-timeline-area .single-timeline-content:hover .timeline-text h6,
    .single-timeline-area .single-timeline-content:focus .timeline-text h6 {
      color: #3f43fd;
    }
  </style>
  <div class="row" id="profil">
    <div class="col-12">
      <div class="card text-center">
        <hr class="lines">


        @if ($paket != null && $paket->count() == 0)
        <h3>No Resi tidak ditemukan</h3>
        @else
        <h3>Informasi Paket</h3>
        @endif
        <hr class="lines">
        <div class="card-body" style="background-color:#ffffff;">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <?php if($paket->count() != 0) : ?>
              <table class="table">
                <thead>
                  <tr>
                    <th>No Resi</th>
                    <th>Pengirim</th>
                    <th>Penerima</th>
                    <th>Asal</th>
                    <th>Tujuan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <?= $paket->no_resi ?>
                    </td>
                    <td>
                      <?= $paket->sender_name ?>
                    </td>
                    <td>
                      <?= $paket->receiver_name ?>
                    </td>
                    <td>
                      <?= $paket->sender_address ?>
                    </td>
                    <td>
                      <?= $paket->receiver_address ?>
                    </td>
                  </tr>
                </tbody>
              </table>
              <?php endif ?>
              <div class="apland-timeline-area">
                @foreach ($track as $data)
                <!-- Single Timeline Content-->
                <div class="single-timeline-area">
                  <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                    <p>
                      <?= date('d F Y, H:i', strtotime($data->time)) . " WIB" ?>
                    </p>
                  </div>
                  <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                      <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                        <div class="timeline-icon"><i class="bx bx-package" aria-hidden="true"></i></div>
                        <div class="timeline-text">
                          <h6>
                            <?= $data->status ?>
                          </h6>
                          <p>
                            <?= $data->description ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                <!-- Section: Timeline -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
