@extends('pages.home.index')

@section('content')
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto d-flex align-items-center">
            <a href="{{ route('landing-page') }}">
                <img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid mr-2">
            </a>
            <h1 class="text-light"><a href="{{ route('landing-page') }}"><span>SMKN 2 SEMARANG</span></a></h1>
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="#header">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#services">Event</a></li>
            <li><a href="#portfolio">Prestasi</a></li>
            <li><a href="#team">Struktur Sekolah</a></li>
            <li><a href="#contact">Kontak</a></li>
            <li class="get-started"><a href="{{ route('daftar') }}">Daftar</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
    <h1>Selamat Datang di SMKN 2 Semarang </h1>
    <h2>Mari kita tingkatkan prestasi bersama!</h2>
    <a href="{{ route('daftar') }}" class="btn-get-started scrollto">Daftar Sekarang</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row content">
                <div class="col-lg-6 text-center text-lg-start" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{asset('assets/img/kepala-sekolah.jpg')}}" alt="" class="img-fluid mb-4">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 text-center text-lg-start" data-aos="fade-left" data-aos-delay="200">
                    <p class="text-justify">
                        SMK Negeri 2 Semarang (dahulu SMEA 1 Semarang) berdiri pada tanggal 26 Juni 1951, berdasarkan SK Menteri Pendidikan dan Kebudayaan No. 2881 / BIII / 51 dengan nama SMEA Negeri Semarang. Pertama kali bertempat di jalan Pattimura Semarang yang sekarang ditempati SMP Negeri 6 Semarang. Berdasarkan Surat Edaran Sekjen Depdikbud nomor: 41007/A.45/OT/1997 tertanggal 3 April 1997 perihal tindak lanjut Keptutusan Menteri Pendidikan dan Kebudayaan Nomor: 034.035 dan 036 / O / 1997 tentang Perubahan Nomenklatur SMP menjadi SLTP, SMA menjadi SMU dan SMKTA menjadi SMK, maka SMEA 1 Semarang namanya berubah menjadi SMK Negeri 2 Semarang.
                    </p>
                    <p class="font-italic text-justify">
                        Sekolah ini termasuk sekolah favorit di Kota Semarang, Jawa Tengah. Sekolah ini mendapatkan predikat sebagai sekolah Adiwiyata atau sekolah berwawasan lingkungan. Dan pada saat ini SMKN 2 Semarang telah berpredikat sekolah Adiwiyata Mandiri.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
                    <div class="content">
                        <h3>Kenapa Memilih Sekolah Ini?</h3>
                        <p class="text-justify">
                            SMK Negeri 2 Semarang adalah pilihan pendidikan yang unggul dengan reputasi solid sebagai sekolah favorit di Kota Semarang. Dikenal karena akreditasi dan penghargaan, termasuk predikat Adiwiyata Mandiri, sekolah ini menekankan pentingnya pendidikan lingkungan hidup dan pengembangan karakter siswa. Kurikulum yang relevan, fasilitas modern, dan pengembangan karakter melalui ekstrakurikuler mendukung persiapan siswa menghadapi dunia kerja.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Lab Praktik</h4>
                                    <p class="text-justify">
                                        Lab praktik yang dilengkapi dengan pendingin ruangan (AC) dan didesain agar anak merasa nyaman dan dapat berinteraksi dengan guru serta teman-temannya dengan leluasa. Ada beberapa lab di SMK 2 Semarang yaitu: Lab AKL, Lab MPLB, Lap PM, Lab ULP, Lab PPLG.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Pengembangan Karakter</h4>
                                    <p class="text-justify">
                                        Selain fokus pada akademik, SMK Negeri 2 Semarang juga menekankan pengembangan karakter siswa. Melalui kegiatan ekstrakurikuler dan program pengembangan diri, siswa diajarkan nilai-nilai seperti disiplin, kerjasama, dan kepemimpinan, yang sangat penting untuk sukses di masa depan.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-images"></i>
                                    <h4>Prestasi Yang Didapatkan</h4>
                                    <p class="text-justify">
                                        Juara 2 tingkat Kota Semarang LKS Web Design 2024. <br>
                                        Juara 1 tk. Kota Semarang LKS Graphic Design Technology 2024. <br>
                                        Juara 2 Lomba POPDA Jateng 2024 Wushu Sanda. <br>
                                        Juara 1 LKS AKUNTANSI KOTA SEMARANG TAHUN 2020, 2021, 2022, 2023, 2024. <br>
                                        Juara 1 Lomba POPDA Jateng 2024 Champion Gulat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>
        </div>
    </section><!-- End Why Us Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2>Event</h2>
                            <p>SMKN 2 Semarang mengadakan beberapa event yang menarik untuk mengembangkan bakat dan minat peserta didiknya.</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-stretch">
                                <div class="icon-box h-100 d-flex flex-column justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                                    <img src="{{asset('assets/img/gelarkarya.jpg')}}" class="img-fluid" alt="">
                                    <p style="text-align: center; margin-top: 10px;">MEMBUAT BAJU DARI BARANG BEKAS</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                                <div class="icon-box h-100 d-flex flex-column justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="200">
                                    <img src="{{asset('assets/img/bestari.jpg')}}" class="img-fluid" alt="">
                                    <p style="text-align: center; margin-top: 10px;">PENAMPILAN BESTARI DARI KELAS XI PPLG 1</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box h-100 d-flex flex-column justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="300">
                                    <img src="{{asset('assets/img/ramayana.jpg')}}" class="img-fluid" alt="">
                                    <p style="text-align: center; margin-top: 10px;">PENAMPILAN KARYA SENI RAMAYANA</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box h-100 d-flex flex-column justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="400">
                                    <img src="{{asset('assets/img/fashionshow.jpg')}}" class="img-fluid" alt="">
                                    <p style="text-align: center; margin-top: 10px;">PENAMPILAN FASHION SHOW MEMPERINGATI HARI IBU KITA KARTINI</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->




    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-left">
                <h2>Prestasi</h2>
                <p>Dibawah ini adalah bukti dokumentasi prestasi yang didapatkan oleh sekolah kami :</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-akademik">Akademik</li>
                        <li data-filter=".filter-olahraga">Olahraga</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <!-- Portfolio Item 1 -->
                <div class="col-lg-4 col-md-6 portfolio-item filter-akademik">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/webtechnologies.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>LKS WEB Technologies</h4>
                            <p>Juara 2</p>
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/webtechnologies.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Akademik">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="{{asset('assets/img/webtechnologies.jpg')}}" download="webtechnologies.jpg" class="ms-2">
                                    <i class="bx bx-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 2 -->
                <div class="col-lg-4 col-md-6 portfolio-item filter-olahraga">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/wushusanda.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Lomba POPDA Jateng 2024 Wushu Sanda</h4>
                            <p>Juara 2</p>
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/wushusanda.png')}}" data-gall="portfolioGallery" class="venobox" title="Olahraga">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="{{asset('assets/img/wushusanda.png')}}" download="wushusanda.png" class="ms-2">
                                    <i class="bx bx-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 3 -->
                <div class="col-lg-4 col-md-6 portfolio-item filter-akademik">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/graphichdesign.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>LKS Graphic Design Technology</h4>
                            <p>Juara 1</p>
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/graphichdesign.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Akademik">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="{{asset('assets/img/graphichdesign.jpg')}}" download="graphichdesign.jpg" class="ms-2">
                                    <i class="bx bx-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 4 -->
                <div class="col-lg-4 col-md-6 portfolio-item filter-olahraga">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/gulat.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Lomba POPDA Jateng 2024 Champion Gulat</h4>
                            <p>Juara 1</p>
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/gulat.png')}}" data-gall="portfolioGallery" class="venobox" title="Olahraga">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="{{asset('assets/img/gulat.png')}}" download="gulat.png" class="ms-2">
                                    <i class="bx bx-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 5 -->
                <div class="col-lg-4 col-md-6 portfolio-item filter-akademik">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/bilingualsecretary.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Lomba Bilingual Secretary</h4>
                            <p>Juara 3</p>
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/bilingualsecretary.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Akademik">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="{{asset('assets/img/bilingualsecretary.jpg')}}" download="bilingualsecretary.jpg" class="ms-2">
                                    <i class="bx bx-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 6 -->
                <div class="col-lg-4 col-md-6 portfolio-item filter-akademik">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/accounting.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>LKS Accounting</h4>
                            <p>Juara 1</p>
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/accounting.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Akademik">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="{{asset('assets/img/accounting.jpg')}}" download="accounting.jpg" class="ms-2">
                                    <i class="bx bx-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Struktur Sekolah</h2>
                        <p style="text-align: justify;">Struktur sekolah dirancang untuk memastikan proses pendidikan berjalan efektif. Setiap bagian, dari kepala sekolah hingga staf, memiliki peran penting dalam menciptakan lingkungan belajar yang kondusif, 
                            sehingga sekolah dapat memberikan pendidikan berkualitas dan mengembangkan potensi siswa secara optimal.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                <div class="pic"><img src="{{asset('assets/img/team/pak-warno.jpg')}}" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Sri Suwarno, S.Pd., M.Pd.</h4>
                                    <span>Kepala SMK Negeri 2 Semarang</span>
                                    <p>Saya ingin mempersekolahkan orang lain dengan biaya murah</p>                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <div class="member" data-aos="zoom-in" data-aos-delay="200">
                                <div class="pic"><img src="{{asset('assets/img/team/pak-marjo.jpg')}}" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Sumarjo, S.Pd.</h4>
                                    <span>Wakil Kepala bidang Kesiswaan</span>
                                    <p>Meningkatkan kreativitas untuk mencerdaskan generasi bangsa</p>                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4">
                            <div class="member" data-aos="zoom-in" data-aos-delay="300">
                                <div class="pic"><img src="{{asset('assets/img/team/bu-ema.jpg')}}" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Ema Charolina Paembonan, S.E.,M. Ak., CAAT.</h4>
                                    <span>Wakil Kepala bidang Humas dan Industri</span>
                                    <p>You are never too old to learn</p>                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4">
                            <div class="member" data-aos="zoom-in" data-aos-delay="400">
                                <div class="pic"><img src="{{asset('assets/img/team/pak-sis.jpg')}}" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Siswanto, S.E.</h4>
                                    <span>Wakil Kepala bidang Sarana, Prasarana, dan Ketenagaan</span>
                                    <p>Break, the limits!</p>                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4">
                            <div class="member" data-aos="zoom-in" data-aos-delay="500">
                                <div class="pic"><img src="{{asset('assets/img/team/bu-darsini.jpg')}}" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Darsini, S.Pd., M.Si.</h4>
                                    <span>Wakil Kepala bidang Kurikulum</span>
                                    <p>Pendidikan adalah senjata paling kuat yang bisa kamu gunakan untuk mengubah dunia.</p>                    
                                </div>
                            </div>
                        </div>

                        <!-- Tambahan Anggota 6 -->
                        <div class="col-lg-6 mt-4">
                            <div class="member" data-aos="zoom-in" data-aos-delay="600">
                                <div class="pic"><img src="{{asset('assets/img/team/pak-jek.jpg')}}" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Zakaria Adiwibowo, S.Kom.</h4>
                                    <span>Pembina OSIS</span>
                                    <p>Berkomitmen untuk pendidikan yang inklusif</p>                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Team Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    <div class="container">
        <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
            <h2>Kontak</h2>
            <p>Untuk info lebih lanjut bisa menghubungi kontak dibawah ini.</p>
            </div>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <iframe style="border:0; width: 100%; height: 270px;" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.0807730489294!2d110.4315097154122!3d-6.9862191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ca596276b2b%3A0xb94e391a4198acac!2sSMK%20Negeri%202%20Semarang!5e0!3m2!1sid!2sid!4v1695652397945!5m2!1sid!2sid" 
                frameborder="0" allowfullscreen></iframe>
            <div class="info mt-4">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>SMK Negeri 2 Semarang, Jl. Dr. Cipto no. 121 A Kelurahan Karangturi Semarang.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 mt-4">
                    <div class="info">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p>smeansa_smg@yahoo.co.id</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info w-100 mt-4">
                        <i class="icofont-phone"></i>
                        <h4>Call:</h4>
                        <p>024-8455757</p>
                    </div>
                </div>
            </div>
        </div><!-- End Contact Section -->

</main>
<!-- End #main -->
@endsection