<?php
session_start();
?>

<!DOCTYPE html>
<!--
    Massively by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>HertaHub - Beranda</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/index.css" />
    <script src="assets/js/webpack.js"></script>
</head>

<body>
    <!-- Wrapper -->
    <div id="wrapper" class="fade-in">
        <div id="box">
            <!-- Intro -->
            <div id="intro">
                <div class="planet-border">
                    <div class="planet"></div>
                    <h1 class="introAnime">
                        Herta<br />
                        Hub
                    </h1>
                    <p style="font-size: x-small; line-height: 1px;">Pusat Forum & Diskusi</p>
                </div>
            </div>
            <p class="introDesc">
                <span class="text kuru">Kuru Kuru</span>
                <span class="text kururin">Kururin</span>
            </p>
            <ul class="actions">
                <li>
                    <a href="#header" class="button icon solid solo fa-arrow-down scrolly"></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Header -->
    <div id="boxes">
        <header id="header">
            <a href="#main" class="logo">HertaHub</a>
        </header>
    </div>

    <!-- Nav -->
    <nav id="nav">
        <ul class="links">
            <?php if (isset($_SESSION['user_id'])): ?>
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="pages/profile.php">Profile</a></li>
                <li><a href="pages/forum.php">Forum</a></li>
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                    <li><a href="pages/kelolaUser.php">Kelola User</a></li>
                <?php endif; ?>
                <li><a href="#" id="logoutHomeBtn">Logout</a></li>
            <?php else: ?>
                <li><a href="pages/login.php">Login / Register</a></li>
            <?php endif; ?>
        </ul>
        <ul class="icons">
            <li>
                <a href="https://twitter.com/" class="icon brands fa-twitter"><span class="label">Twitter</span></a>
            </li>
            <li>
                <a href="https://facebook.com/" class="icon brands fa-facebook-f"><span
                        class="label">Facebook</span></a>
            </li>
            <li>
                <a href="https://instagram.com/" class="icon brands fa-instagram"><span
                        class="label">Instagram</span></a>
            </li>
            <li>
                <a href="https://github.com/" class="icon brands fa-github"><span class="label">GitHub</span></a>
            </li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">
        <!-- CAROUSEL LANDSCAPE (desktop only) -->
        <div class="d-none d-md-block">
            <div id="carouselLandscape" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000"    data-bs-pause="hover">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/assets/img/ads/benefit-landscape-ai.png" class="d-block w-100 carousel-img" alt="Landscape 1">
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/img/ads/benefit-landscape.png" class="d-block w-100 carousel-img" alt="Landscape 2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselLandscape"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselLandscape"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- CAROUSEL PORTRAIT (mobile only) -->
        <div class="d-block d-md-none">
            <div id="carouselPortrait" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000"    data-bs-pause="hover">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/assets/img/ads/benefit-portrait-ai.png" class="d-block w-100 carousel-img" alt="Portrait 1">
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/img/ads/benefit-portrait.png" class="d-block w-100 carousel-img" alt="Portrait 2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselPortrait"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselPortrait"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <div>
            <h2 class="title">Tentang HertaHub</h2>
            <p class="desc">
                HertaHub adalah aplikasi forum berbasis web untuk tugas mata kuliah Pengembangan Desain Web 
                <br>
                yang dikembangkan oleh <b>Kelompok 1</b>, berikut adalah anggotanya :
                <br>
                <ol>
                    <li>
                    <b>Ridwan Fahmidina Pamungkas (20230140185)</b> - Pengembang fitur Forum
                    </li>
                    <br>
                    <li>
                    <b>Naufal Muhammad Daffa (20230140166)</b> - Manajemen Database & OAuth API
                    </li>
                    <br>
                    <li>
                    <b>Ardhian Fadli Rabbani (20230140156)</b> - Pengembang halaman Kelola User untuk role admin    
                    </li>
                    <br>
                    <li>
                    <b>Galang Yudha Priambodo (20230140176)</b> - Penyusun halaman Profile    
                    </li>
                    <br>
                    <li>
                    <b>Afnan Asilah Prayogi (20230140153)</b> - Pengembang Login/Register    
                    </li>
                    <br>
                    <li>
                    <b>Rangga Ramadhana (20230140155)</b> - Tester/QA    
                    </li>
                    <br>
                    <li>
                    <b>Avanro Naufal Teknologi Informasi (20230140199)</b> - Pengembang menu Login/Register    
                    </li>
                    <br>
                    <li>
                    <b>Arthur Gerald Arya Wirayudha (20230140196)</b> - Pengelola halaman Home    
                    </li>
                </ol>
            </p>
        </div>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <section class="split contact">
            <section class="alt">
                <h3>Address</h3>
                <p>
                    1234 Somewhere Road #87257<br />
                    Nashville, TN 00000-0000
                </p>
            </section>
            <section>
                <h3>Phone</h3>
                <p><a href="#">(000) 000-0000</a></p>
            </section>
            <section>
                <h3>Email</h3>
                <p><a href="#">info@untitled.tld</a></p>
            </section>
            <section>
                <h3>Social</h3>
                <ul class="icons alt">
                    <li>
                        <a href="https://twitter.com/" class="icon brands alt fa-twitter"><span
                                class="label">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://facebook.com/" class="icon brands alt fa-facebook-f"><span
                                class="label">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://instagram.com/" class="icon brands alt fa-instagram"><span
                                class="label">Instagram</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/" class="icon brands alt fa-github"><span
                                class="label">GitHub</span></a>
                    </li>
                </ul>
            </section>
        </section>
    </footer>

    <!-- Copyright -->
    <div id="copyright">
        <ul>
            <li>&copy; Untitled</li>
            <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
        </ul>
    </div>

    <!-- Scripts -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="widget/live2d-widget/L2Dwidget.min.js"></script>
    <script src="assets/js/miku.js"></script>


    <script>
        $('#logoutHomeBtn').on('click', function (e) {
            e.preventDefault();
            $.post('includes/api.php', {
                action: 'logout'
            }, function (resp) {
                if (resp.status === 'success') {
                    window.location.href = 'index.php';
                }
            }, 'json');
        });
    </script>
</body>

</html>