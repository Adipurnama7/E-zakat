<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-Zakat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/kalkulator.css" rel="stylesheet">



</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar start -->
    <div class="container-fluid fixed-top">
        <div class="container topbar d-none d-lg-block">
            <div class="topbar-inner">
                <div class="row gx-0">
                    <div class="col-lg-7 text-start">
                        <div class="h-100 d-inline-flex align-items-center me-4">
                            <span class="fa fa-phone-alt me-2 text-dark"></span>
                            <a href="#" class="text-secondary"><span>082321568554</span></a>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center">
                            <span class="far fa-envelope me-2 text-dark"></span>
                            <a href="#" class="text-secondary"><span>ezakat@gmail.com</span></a>
                        </div>
                    </div>
                    <div class="col-lg-5 text-end">
                        <div class="h-100 d-inline-flex align-items-center">
                            <a class="text-body ps-4" href="login"><i class="fa fa-lock text-dark me-1"></i> login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg py-3">
                <a href="index.html" class="navbar-brand">
                    <h1 class="mb-0">E-<span class="text-primary">Zakat</span> </h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav ms-lg-auto mx-xl-auto">
                        <a href="#Home" class="nav-item nav-link">Home</a>
                        <a href="#Tentang" class="nav-item nav-link">Tentang</a>
                        <a href="#Informasi" class="nav-item nav-link">Informasi</a>
                        <a href="#Donasi" class="nav-item nav-link">Donasi</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kalkulator</a>
                            <div class="dropdown-menu m-0 rounded-0">
                                <a href="/zakat_penghasilan" class="dropdown-item">Zakat Penghasilan</a>
                                <a href="/zakat_maal" class="dropdown-item">Zakat Maal</a>
                                <a href="/perdagangan" class="dropdown-item">Zakat Perdagangan</a>
                                <a href="/emas" class="dropdown-item">Zakat Emas</a>
                                <a href="/tabungan" class="dropdown-item">Zakat Tabungan</a>
                                <a href="/perusahaan" class="dropdown-item">Zakat Perusahaan</a>
                            </div>
                        </div>
                        <a href="#Team" class="nav-item nav-link">Our Team </a>
                        <a href="#Kontak" class="nav-item nav-link">Kontak</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Hero Start -->
    <div class="container-fluid hero-header" id = "Home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-header-inner animated zoomIn">
                        <p class="fs-4 text-dark">WELCOME TO E-Zakat</p>
                        <h2 class="display-1 mb-5 text-dark">Bersihkan Harta Sucikan Jiwa</h2>
                        <a href="index.html#Donasi" class="btn btn-primary py-3 px-5">Donasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Satrt -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 mb-5">
                <div class="col-xl-6">
                    <div class="row g-4">
                        <div class="col-6">
                            <img src="img/about4.jpg" class="img-fluid h-100 wow zoomIn" data-wow-delay="0.1s"
                                alt="">
                        </div>
                        <div class="col-6">
                            <img src="img/about-2.jpg" class="img-fluid pb-3 wow zoomIn" data-wow-delay="0.1s"
                                alt="">
                            <img src="img/about-3.jpg" class="img-fluid pt-3 wow zoomIn" data-wow-delay="0.1s"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeIn" data-wow-delay="0.5s" id = "Tentang">
                    <p class="fs-5 text-uppercase text-primary">Tentang E-Zakat</p>
                    <h1 class="display-5 pb-4 m-0">Apa itu E-Zakat ?</h1>
                    <p class="pb-4">e-Zakat merupakan sebuah platform di bidang pengelolaan zakat yang harapannya
                        platform ini bisa membantu dan tentunya bermanfaat bagi semua orang untuk mempermudah cara
                        penyalurannya</p>
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <div class="ps-3 d-flex align-items-center justify-content-start">
                                <span class="bg-primary btn-md-square rounded-circle mt-4 me-2"><i
                                        class="fa fa-eye text-dark fa-4x mb-5 pb-2"></i></span>
                                <div class="ms-4">
                                    <h5>Zakat</h5>
                                    <p>bagian tertentu dari harta yang wajib dikeluarkan oleh setiap muslim apabila
                                        telah mencapai syarat yang ditetapkan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ps-3 d-flex align-items-center justify-content-start">
                                <span class="bg-primary btn-md-square rounded-circle mt-4 me-2"><i
                                        class="fa fa-flag text-dark fa-4x mb-5 pb-2"></i></span>
                                <div class="ms-4">
                                    <h5>Penerima Zakat</h5>
                                    <p>Fakir, Miskin, Amil, Mualaf, Riqab, Gharimin, Fisabillilah, Ibnu Sabil</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row g-2">
                        <div class="col-md-6">
                            <p class="mb-2"><i class="fa fa-check text-primary me-3"></i>Zakat Fitrah</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>Zakat Mall</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-2"><i class="fa fa-check text-primary me-3"></i>Zakat Penghasilan</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>Zakat mas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center bg-primary py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-2">
                        <i class="fa fa-mosque fa-5x text-white"></i>
                    </div>
                    <div class="col-lg-7 text-center text-lg-start">
                        <h1 class="mb-0">Setiap Muslim Perlu Menyadari Pentingnya Berbagi Kebahagiaan</h1>
                    </div>
                    <div class="col-lg-3">
                        <a href="" class="btn btn-light py-2 px-4">Donasi Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




    <!-- Events Start -->
    <div class="container-fluid event py-5" id= "Informasi">
        <div class="container py-5">
            <h1 class="display-3 mb-5 wow fadeIn" data-wow-delay="0.1s">Informasi <span
                    class="text-primary">Zakat</span></h1>
            <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.1s">
                <div class="col-3 col-lg-2 pe-0">
                    <div class="text-center border-bottom border-dark py-3 px-2">
                        <h6>Sebelum 1 Dhulhijah</h6>

                    </div>
                </div>
                <div class="col-9 col-lg-6 border-start border-dark pb-5">
                    <div class="ms-3">
                        <h4 class="mb-3">Zakat Fitrah</h4>
                        <p class="mb-4">Zakat yang diwajibkan atas setiap jiwa baik lelaki dan perempuan muslim yang
                            dilakukan pada bulan Ramadhan </p>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="overflow-hidden mb-5">
                        <img src="img/zakat beras.jpg" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
            <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.3s">
                <div class="col-3 col-lg-2 pe-0">
                    <div class="text-center border-bottom border-dark py-3 px-2">
                        <h6>Sedangkan zakat mal wajib dikeluarkan pada saat harta telah mencapai nishab dan telah
                            berlalu satu tahun hijria</h6>
                    </div>
                </div>
                <div class="col-9 col-lg-6 border-start border-dark pb-5">
                    <div class="ms-3">
                        <h4 class="mb-3">Zakat Mal</h4>
                        <p class="mb-4">Zakat yang dikenakan atas segala jenis harta, yang secara zat maupun
                            substansi perolehannya, tidak bertentangan dengan ketentuan agama. Sebagai contoh, zakat mal
                            terdiri atas uang, emas, surat berharga, penghasilan profesi, dan lain-lain</p>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="overflow-hidden mb-5">
                        <img src="img/zakat mall.jpg" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
            <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.5s">
                <div class="col-3 col-lg-2 pe-0">
                    <div class="text-center border-bottom border-dark py-3 px-2">
                    </div>
                </div>
                <div class="col-9 col-lg-6 border-start border-dark pb-5">
                    <div class="ms-3">
                        <h4 class="mb-3">Syarat Zakat Fitrah dan Zakat Mall </h4>
                        <p>Syarat harta yang dikenakan zakat mal sebagai berikut: milik penuh, halal, cukup nisab, haul.
                            Hanya saja, syarat haul tidak berlaku untuk zakat pertanian, perkebunan dan kehutanan,
                            perikanan, pendapatan dan jasa, serta zakat rikaz.</p>
                        <br>
                        <p>Sedangkan untuk syarat zakat fitrah sebagai berikut:
                            beragama Islam
                            hidup pada saat bulan ramadhan;
                            memiliki kelebihan kebutuhan pokok untuk malam dan hari raya idul fitri;</p>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="overflow-hidden mb-5">
                        <img src="img/events-3.jpg" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Events End -->


    <!-- Donasi -->
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg" id = "Donasi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Donasi</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->

    <!-- ================ Donasi ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-contact contact_form" enctype="multipart/form-data" method="post"
                            action="{{ route('Masjid.store') }}"">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4" style="border: 2px solid black; border-radius: 10px;">
                                    <div class="form-group">
                                        <input class="form-control valid" name="Nama_Donatur"
                                            placeholder="Masukkan Nama Anda" required="">
                                    </div>
                                </div>
                                <div class="col-sm-4" style="border: 2px solid black; border-radius: 10px;">
                                    <div class="form-group">
                                        <input class="form-control valid"
                                            name="No_Hp"placeholder="Masukkan No. Handphone Anda" required=""
                                            type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4" style="border: 2px solid black; border-radius: 10px;">
                                    <div class="form-group">
                                        <input class="form-control valid"
                                            name="Alamat"placeholder="Masukkan Alamat Anda" required=""
                                            type="text">
                                    </div>
                                </div>
                                <div class="col-12 mt-3" style="border: 2px solid black; border-radius: 10px;">
                                    <div class="form-group">
                                        <input class="form-control" name="Total_Donasi"
                                            placeholder="Jumlah Donasi Yang Anda Ingin Berikan. Contoh: 100000"
                                            type="number">
                                    </div>
                                </div>

                                <div class="col-12 mt-3">
                                    <div class="form-group">
                                        Bukti Pengiriman Donasi
                                        <input type="file" class="form-control w-100" name="Bukti_Donasi"
                                            required=""
                                            style="border: 2px solid black; border-radius: 10px;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Kirim
                                    Donasi</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
    </section>

    <!-- end donasi -->

    <!-- Team Start -->
    <div class="container-fluid team py-5" id="Team">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <p class="fs-5 text-uppercase text-primary">Our Team</p>
                <h1 class="display-3">Meet Our Organizer</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-xl-5">
                    <div class="team-img wow zoomIn" data-wow-delay="0.1s">
                        <img src="img/aisah.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-xl-7">
                    <div class="team-item wow fadeIn" data-wow-delay="0.1s">
                        <h1>Kelompok 5</h1>
                        <!-- <h5 class="fw-normal fst-italic text-primary mb-4">President</h5> -->
                        <p class="mb-4">Kelompok ini bertujuan untuk memperkenalkan E-Zakat yang memfasilitasi
                            manajemen zakat dan pembayaran zakat secara online. Presentasi akan mencakup fitur-fitur
                            utama, keunggulan, dan cara penggunaan platform untuk memberikan zakat dengan mudah dan
                            efisien</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="team-item wow zoomIn" data-wow-delay="0.2s">
                                <img src="img/Adi.jpg" width="200" height="200" alt="">
                                <div class="team-content text-dark text-center py-3">
                                    <div class="team-content-inner">
                                        <h5 class="mb-0">Adi Purnama</h5>
                                        <p class="text-dark">Sekertaris</p>
                                        <div class="team-icon d-flex align-items-center justify-content-center">
                                            <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square me-2"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-item wow zoomIn" data-wow-delay="0.4s">
                                <img src="img/ade.jpg" width="200" height="200" alt="">
                                <div class="team-content text-dark text-center py-3">
                                    <div class="team-content-inner">
                                        <h5 class="mb-0">Ade Ripaldi</h5>
                                        <p class="text-dark">Anggota
                                        <div class="team-icon d-flex align-items-center justify-content-center">
                                            <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square me-2"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="team-item wow zoomIn" data-wow-delay="0.6s">
                                <img src="img/Angga.jpg" alt="" width="200" height="200">
                                <div class="team-content text-dark text-center py-3">
                                    <div class="team-content-inner">
                                        <h5 class="mb-0">Angga Gustian</h5>
                                        <p class="text-dark">Anggota</p>
                                        <div class="team-icon d-flex align-items-center justify-content-center">
                                            <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square me-2"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="team-item wow zoomIn" data-wow-delay="0.2s">
                                <img src="img/alip.jpg" width="200" height="200" alt="">
                                <div class="team-content text-dark text-center py-3">
                                    <div class="team-content-inner">
                                        <h5 class="mb-0">Alif Firmansyah</h5>
                                        <p class="text-dark">Anggota</p>
                                        <div class="team-icon d-flex align-items-center justify-content-center">
                                            <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square me-2"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-item wow zoomIn" data-wow-delay="0.4s">
                                <img src="img/nada.jpg" width="200" height="200" alt="">
                                <div class="team-content text-dark text-center py-3">
                                    <div class="team-content-inner">
                                        <h5 class="mb-0">Nada</h5>
                                        <p class="text-dark">Anggota
                                        <div class="team-icon d-flex align-items-center justify-content-center">
                                            <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square me-2"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->





    <!-- Footer Start -->
    <div class="container-fluid footer pt-4 wow fadeIn" data-wow-delay="0.1s" id = "Kontak">
        <div class="container py-5">
            <div class="row g-4 footer-inner">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item mt-5">
                        <h4 class="text-light mb-4">E-<span class="text-primary">Zakat</span></h4>
                        <p class="mb-4 text-secondary">
                            E-zakat adalah sistem atau platform yang memfasilitasi proses pembayaran zakat secara
                            elektronik atau online. Ini memungkinkan individu atau perusahaan untuk memberikan zakat
                            mereka dengan mudah dan efisien melalui metode pembayaran yang disediakan.</p>
                        <a href="" class="btn btn-primary py-2 px-4">Donasi Sekarang</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item mt-5">
                        <h4 class="text-light mb-4">Our Mosque</h4>
                        <div class="d-flex flex-column">
                            <h6 class="text-secondary mb-0">Lokasi</h6>
                            <div class="d-flex align-items-center border-bottom py-4">
                                <span class="flex-shrink-0 btn-square bg-primary me-3 p-4"><i
                                        class="fa fa-map-marker-alt text-dark"></i></span>
                                <a href="" class="text-body">Mesjid Al Jabar</a>
                            </div>
                            <h6 class="text-secondary mt-4 mb-0">Kontak</h6>
                            <div class="d-flex align-items-center py-4">
                                <span class="flex-shrink-0 btn-square bg-primary me-3 p-4"><i
                                        class="fa fa-phone-alt text-dark"></i></span>
                                <a href="" class="text-body">
                                    082321568554
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item mt-5">
                        <h4 class="text-light mb-4">Explore Link</h4>
                        <div class="d-flex flex-column align-items-start">
                            <a class="text-body mb-2" href="#Home"><i
                                    class="fa fa-check text-primary me-2"></i>Home</a>
                            <a class="text-body mb-2" href="#Tentang"><i
                                    class="fa fa-check text-primary me-2"></i>Tentang</a>
                            <a class="text-body mb-2" href="#Donasi"><i
                                    class="fa fa-check text-primary me-2"></i>Donasi</a>
                            <a class="text-body mb-2" href="#Informasi"><i
                                    class="fa fa-check text-primary me-2"></i>Info</a>
                            <a class="text-body mb-2" href="#Kalkulator"><i
                                    class="fa fa-check text-primary me-2"></i>Kalkulator</a>
                            <a class="text-body mb-2" href="#Team"><i class="fa fa-check text-primary me-2"></i>Our
                                Team</a>
                            <a class="text-body mb-2" href="#Kontak"><i
                                    class="fa fa-check text-primary me-2"></i>Kontak</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-4">
                <div class="border-top border-secondary pb-4"></div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-end">
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">Kelompok 5</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-light back-to-top"><i
                class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>
