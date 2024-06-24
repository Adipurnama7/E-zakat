<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-Zakat</title>
    <link rel="shortcut icon" href="images/favicon.png" />
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
                        <div class="navbar-nav ms-lg-auto mx-xl-auto">
                            <a href="/" class="nav-item nav-link">Home</a>
                            <a href="/#Tentang" class="nav-item nav-link">About</a>
                            <a href="/#Informasi" class="nav-item nav-link">Information</a>
                            <a href="/#Donasi" class="nav-item nav-link">Donation</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Calculator</a>
                                <div class="dropdown-menu m-0 rounded-0">
                                    <a href="penghasilan.html" class="dropdown-item">Income Zakat</a>
                                    <a href="maal.html" class="dropdown-item">Wealth Zakat</a>
                                    <a href="perdagangan.html" class="dropdown-item">Trade Zakat</a>
                                    <a href="emas.html" class="dropdown-item">Gold Zakat</a>
                                    <a href="tabungan.html" class="dropdown-item">Savings Zakat</a>
                                    <a href="perusahaan.html" class="dropdown-item">Corporate Zakat</a>
                                </div>
                            </div>
                            <a href="/#Team" class="nav-item nav-link">Our Team </a>
                            <a href="/#Kontak" class="nav-item nav-link">Contact</a>
                        </div>
                    </div>
            </nav>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Hero Start -->
    <div class="container-fluid hero-header" id="Home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-header-inner animated zoomIn">
                        <p class="fs-4 text-dark">WELCOME TO E-Zakat</p>
                        <h2 class="display-1 mb-5 text-dark">Calculator Zakat</h2>
                        <a href="index.html#Donasi" class="btn btn-primary py-3 px-5">Donate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Calculation Start -->
    <div class='kalkulator'>
        <div class='kalkulator-container'>
            <div class='kalkulator-left'>
                <h1>Trading Zakat</h1>
                <h2>Intention (Niah)</h2>
                <img src='img/niat.png' alt='niat' style='height:auto; width:100%;'>
                <h3>"Nawaitu an ukhrija zakatadz maali fardhan lillahi ta’ala."</h3>
                <p>"Meaning: I intend to pay zakat on my wealth because of Allah Ta'ala."</p>
            </div>
            <div class='kalkulator-right'>
                <label>Capital / Year (IDR): </label>
                <input id="modal" type="text" class="form-control"
                    placeholder="Enter your capital expenditure">
                <label>Accounts Payable (Trade Debt) (IDR): </label>
                <input id="hutangDagang" type="text" class="form-control"
                    placeholder="Enter the trade debt you borrowed">
                <label>Cash and Profits / Year (IDR): </label>
                <input id="untung" type="text" class="form-control"
                    placeholder="Enter the amount of cash and profits you earn">
                <label>Losses / Year (IDR): </label>
                <input id="rugi" type="text" class="form-control" placeholder="Enter any losses incurred">
                <label>Debts / Installments / Basic Needs (IDR): </label>
                <input id="hutangCicilan" type="text" class="form-control"
                    placeholder="Enter any debts or installments related to basic needs">
                <label>Total Trading Wealth (IDR): </label>
                <input id="tot" class='form-control' type="text"
                    style='color:rgba(0, 0, 0, 0.9); background-color:rgba(255, 255, 255, .5); border: 0;' disabled>
                <label>Current Gold Price / Gram (IDR): </label>
                <input id="hargaEmas" type="text" class='form-control'
                    placeholder="Enter the current gold price">
                <p id="gold" style="color: red; display: none; margin-top: 5px;">Gold price cannot be 0.</p>
                <label>Trade Nisab Amount / Year (IDR): </label>
                <input id="nisab" class='form-control' type="text"
                    style='color:rgba(0, 0, 0, .9); background-color:rgba(255, 255, 255, .3); border: 0;' disabled>
                <button class='button'>Calculate Zakat</button>
                <div class="popup" style="display: none;">
                    <div class='popup-zakat'>
                        <p id="zakatInfo"></p>
                        <h3 id="result"></h3>
                        <a href='/#Donasi' class='popup-button' id="saveButton">Donation</a>
                        <button class='popup-button' id="closeButton">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Definisikan API key dan URL endpoint
            const apiKey = "14151696562b9dd162b6c1f7b19b95fe";
            const apiUrl = "https://api.metalpriceapi.com/v1/latest?api_key=" + apiKey + "&base=IDR&currencies=XAU";

            // Konfigurasi opsi permintaan HTTP
            const requestOptions = {
                method: 'GET',
                redirect: 'follow'
            };

            // Lakukan permintaan ke API harga emas
            fetch(apiUrl, requestOptions)
                .then(response => response.json())
                .then(data => {
                    // Tangani data yang diperoleh dari API
                    const hargaEmasDalamIDR = data.rates.XAU; // Harga emas dalam rupiah

                    // Tampilkan harga emas dalam rupiah di input harga emas dengan format "Rp." tanpa desimal
                    const hargaEmasInput = document.getElementById('hargaEmas');
                    hargaEmasInput.value = "Rp. " + Math.floor(1 / hargaEmasDalamIDR / 31).toLocaleString(
                        'id-ID');
                    hargaEmasInput.disabled = true; // Membuat input menjadi disable
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const modalInput = document.getElementById('modal');
            const untungInput = document.getElementById('untung');
            const hutangDagangInput = document.getElementById('hutangDagang');
            const rugiInput = document.getElementById('rugi');
            const hutangCicilanInput = document.getElementById('hutangCicilan');
            const hargaEmasInput = document.getElementById('hargaEmas');

            function formatToCurrency(value, includeDecimals = true) {
                if (includeDecimals) {
                    return `Rp. ${value.toLocaleString('id-ID')}`;
                } else {
                    return `Rp. ${value.toLocaleString('id-ID', { maximumFractionDigits: 0 })}`;
                }
            }

            function updateInputValue(inputElement, includeDecimals = true) {
                let value = inputElement.value.replace(/\D/g, '');
                value = isNaN(value) || value === '' ? 0 : parseInt(value);
                const formattedValue = formatToCurrency(value, includeDecimals);
                inputElement.value = formattedValue;
            }

            modalInput.addEventListener('input', function() {
                updateInputValue(this);
            });

            untungInput.addEventListener('input', function() {
                updateInputValue(this);
            });

            hutangDagangInput.addEventListener('input', function() {
                updateInputValue(this);
            });

            rugiInput.addEventListener('input', function() {
                updateInputValue(this);
            });

            hutangCicilanInput.addEventListener('input', function() {
                updateInputValue(this);
            });

            hargaEmasInput.addEventListener('input', function() {
                updateInputValue(this);
                if (this.value === 'Rp. 0') {
                    document.getElementById('gold').style.display = 'block';
                    this.style.borderColor = 'red';
                } else {
                    document.getElementById('gold').style.display = 'none';
                    this.style.borderColor = '';
                }
            });

            document.querySelector('.button').addEventListener('click', function() {
                const modal = parseFloat(modalInput.value.replace(/\D/g, '')) || 0;
                const untung = parseFloat(untungInput.value.replace(/\D/g, '')) || 0;
                const hutangDagang = parseFloat(hutangDagangInput.value.replace(/\D/g, '')) || 0;
                const rugi = parseFloat(rugiInput.value.replace(/\D/g, '')) || 0;
                const hutangCicilan = parseFloat(hutangCicilanInput.value.replace(/\D/g, '')) || 0;
                const hargaEmas = parseFloat(hargaEmasInput.value.replace(/\D/g, '')) || 0;

                const total = untung - (modal + hutangDagang) - rugi - hutangCicilan;
                const nisabPenghasilan = 85 * hargaEmas;
                const amount = 0.025 * total;

                document.getElementById('tot').value = formatToCurrency(total);
                document.getElementById('nisab').value = formatToCurrency(nisabPenghasilan,
                    false); // Tidak memasukkan desimal

                if (isNaN(nisabPenghasilan) || nisabPenghasilan <= 0) {
                    document.getElementById('gold').style.display = 'block';
                    document.getElementById('gold').innerHTML = 'Harga emas harus lebih dari 0.';
                    hargaEmasInput.style.borderColor = 'red';
                    return;
                }

                if (hargaEmas === 0) {
                    document.getElementById('gold').style.display = 'block';
                    document.getElementById('gold').innerHTML = 'Harga Emas tidak boleh 0';
                    hargaEmasInput.style.borderColor = 'red';
                    return;
                }

                if (total >= nisabPenghasilan) {
                    document.getElementById('zakatInfo').innerHTML =
                        'Jumlah zakat penghasilan yang harus Anda bayarkan setiap bulan sebesar:';
                    document.getElementById('result').innerHTML = formatToCurrency(amount) + ' IDR';
                } else {
                    document.getElementById('zakatInfo').innerHTML = '';
                    document.getElementById('result').innerHTML =
                        'Penghasilan Anda belum mencapai Nisab untuk Zakat Penghasilan.';
                }

                document.querySelector('.popup').style.display = 'block';
            });

            document.getElementById('closeButton').addEventListener('click', function() {
                document.querySelector('.popup').style.display = 'none';
            });
        });
    </script>
    <!-- Kalkulasi End-->
    <!-- Footer Start -->
    <div class="container-fluid footer pt-4 wow fadeIn" data-wow-delay="0.1s" id = "Kontak">
        <div class="container py-5">
            <div class="row g-4 footer-inner">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item mt-5">
                        <h4 class="text-light mb-4">E-<span class="text-primary">Zakat</span></h4>
                        <p class="mb-4 text-secondary">
                            E-zakat is a system or platform that facilitates the process of paying zakat
                            electronic or online. It allows individuals or companies to give zakat
                            them easily and efficiently through the payment methods provided.</p>
                        <a href="" class="btn btn-primary py-2 px-4">Donation Now</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item mt-5">
                        <h4 class="text-light mb-4">Our Mosque</h4>
                        <div class="d-flex flex-column">
                            <h6 class="text-secondary mb-0">Location</h6>
                            <div class="d-flex align-items-center border-bottom py-4">
                                <span class="flex-shrink-0 btn-square bg-primary me-3 p-4"><i
                                        class="fa fa-map-marker-alt text-dark"></i></span>
                                <a href="" class="text-body">Al-Jabar Mosque</a>
                            </div>
                            <h6 class="text-secondary mt-4 mb-0">Contact</h6>
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
                            <a class="text-body mb-2" href="/#Home"><i
                                    class="fa fa-check text-primary me-2"></i>Home</a>
                            <a class="text-body mb-2" href="/#Tentang"><i
                                    class="fa fa-check text-primary me-2"></i>About</a>
                            <a class="text-body mb-2" href="/#Donasi"><i
                                    class="fa fa-check text-primary me-2"></i>Donation</a>
                            <a class="text-body mb-2" href="/#Informasi"><i
                                    class="fa fa-check text-primary me-2"></i>Information</a>
                            <a class="text-body mb-2" href="/#Kalkulator"><i
                                    class="fa fa-check text-primary me-2"></i>Calculator</a>
                            <a class="text-body mb-2" href="/#Team"><i class="fa fa-check text-primary me-2"></i>Our
                                Team</a>
                            <a class="text-body mb-2" href="/#Kontak"><i
                                    class="fa fa-check text-primary me-2"></i>Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-4">
                <div class="border-top border-secondary pb-4"></div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-end">
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">Group 5</a>
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
