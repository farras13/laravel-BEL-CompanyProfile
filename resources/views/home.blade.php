@extends('layouts.template')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url({{ asset('assets/images/BANNER-1.jpg') }});">
                    <!-- <div class="carousel-container">
                                                                                    <div class="carousel-content animate__animated animate__fadeInUp">
                                                                                      <h2>Welcome to <span>BEL</span></h2>
                                                                                      <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                                                                      <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                                                                                    </div>
                                                                                  </div> -->
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url({{ asset('assets/images/BANNER-2.jpg') }});">
                    <!-- <div class="carousel-container">
                                                                                    <div class="carousel-content animate__animated animate__fadeInUp">
                                                                                      <h2>Lorem Ipsum Dolor</h2>
                                                                                      <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                                                                      <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                                                                                    </div>
                                                                                  </div> -->
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url({{ asset('assets/images/BANNER-3.jpg') }});">
                    <!-- <div class="carousel-container">
                                                                                    <div class="carousel-content animate__animated animate__fadeInUp">
                                                                                      <h2>Sequi ea ut et est quaerat</h2>
                                                                                      <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                                                                      <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                                                                                    </div>
                                                                                  </div> -->
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

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container" data-aos="fade-up">

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h2>Berkah Ekspressindo Logistik</h2>
                        <!-- <h3>motto dari perusahaan ini</h3> -->
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                        <p style="text-align: justify;">
                            Didirikan pada tahun 2022, PT Berkah Ekspressindo Logistik adalah salah satu perusahaan
                            expedisi domestik yang menyediakan layanan express serta layanan regular.
                            Perusahaan ini berdomisili di jalan Bangka Raya Nomor 53B,RT-11 RW-11 Kelurahan Pela
                            Mampang, Kecamatan Mampang Prapatan Jakarta Utara.
                            <br><br>
                            <b>Ada dua hal penting yang menjadi fokus kami dalam melayani pelanggan, diantaranya : </b>
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i><b>Kepercayaan dan Harmonisasi</b>
                                <ul>
                                    <li>Tidak hanya sekedar bisnis yang saling membutuhkan, namun saling percaya dan
                                        hubungan keharmonisan dengan pelanggan merupakan hal terpenting dalam pelayanan kami
                                    </li>
                                </ul>
                            </li>
                            <li><i class="ri-check-double-line"></i><b> Kualitas Kerja </b>
                                <ul>
                                    <li>Tidak hanya sekedar bisnis yang saling membutuhkan, namun saling percaya dan
                                        hubungan keharmonisan dengan pelanggan merupakan hal terpenting dalam pelayanan kami
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <p class="fst-italic">
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->
        <section id="tracking" class="contact section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Tracking</h2>
                </div>
                <div class="row mt-2 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-10">
                        <div class="col-lg-12 col-md-6 footer-newsletter">
                            <form action="{{ url('track') }}" method="post">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Masukkan No. Resi"
                                        aria-label="Masukkan No. Resi" aria-describedby="basic-addon2" name="no_resi">
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
        </section><!-- End Contact Section -->
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Keunggulan</h2>
                    <p>Berikut merupakan salah satu keunggulan dari layanan yang kami tawarkan</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                <i class="bx bxs-group"></i>
                            </div>
                            <h4><a href="">SDM Terbaik</a></h4>
                            <p>Memiliki SDM yang berpengalaman dan memiliki komitmen yang tinggi untuk memberikan service
                                terbaik kepada pelanggan.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-orange ">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                    </path>
                                </svg>
                                <i class="bx bx-cog"></i>
                            </div>
                            <h4><a href="">Service Culture</a></h4>
                            <p>Corporate culture yang kuat terutama dalam “service culture” dan “customer culture” dengan
                                nilai utama “Customer come first”.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bx bx-map"></i>
                            </div>
                            <h4><a href="">Jangkauan luas</a></h4>
                            <p>Memiliki pelayanan ke seluruh wilayah indonesia dengan layanan express maupun regular.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box iconbox-yellow">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                                    </path>
                                </svg>
                                <i class="bx bx-package"></i>
                            </div>
                            <h4><a href="">Proof of Delivery </a></h4>
                            <p>Menyediakan fasilitas, “Proof of Delivery”, Asuransi, Packing, dan Wrapping.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-red">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                                    </path>
                                </svg>
                                <i class="bx bx-desktop"></i>
                            </div>
                            <h4><a href=""> IT System</a></h4>
                            <p>Menggunakan sitem berbasis IT untuk menunjang kebutuhan ataupun layanan yang prima.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                    </path>
                                </svg>
                                <i class='bx bx-purchase-tag-alt'></i>
                            </div>
                            <h4><a href="">Harga Kompetitif</a></h4>
                            <p>Memiliki harga yang kompetitif dengan layanan dan solusi terbaik bagi semua pelanggan kami.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="Gallery" class="portfolio-details">
            <div class="container">

                <div class="section-title">
                    <h2>Gallery</h2>
                </div>
                <div class="row gy-4 d-flex justify-content-center">
                    <div class="col-lg-12">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                @foreach ($gallery as $g)
                                    <div class="swiper-slide">
                                        <img src="{{ url('image/galeri/' . $g->gambar) }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                            <!-- <div class="text-center">
                                                                                        <a href="#" class="btn btn-read-more-gallery">Read More</a>
                                                                                      </div> -->
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Clients</h2>
                </div>

                <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
                    @foreach ($clients as $client)
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="client-logo">
                                <img src="{{ url('image/client/' . $client->images) }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </section><!-- End Our Clients Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Contact</h2>
                </div>
                <div class="row justify-content-center" data-aos="fade-up">
                    <div class="map-section">
                        <iframe style="border:0; width: 100%; height: 350px;"
                            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Bangka Raya Nomor 53B, Kel. Pela Mampang Kecamatan Mampang Prapatan, Jakarta Utara Indonesia&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                            frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-10 my-4">

                        <div class="info-wrap">
                            <div class="row">
                                <div class="col-lg-4 info">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>jln Bangka Raya Nomor 53B, Kel. Pela Mampang ,
                                        Kec. Mampang Prapatan, Jakarta Selatan ,
                                        Indonesia</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>berkahekspressindologistik@gmail.com</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+62 823 234 445 66</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
@endsection
