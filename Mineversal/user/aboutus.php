<?php

require_once("auth.php"); 

?>

<!DOCTYPE html>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="assets/css/index.css" type="text/css"/>
    
    <link rel="stylesheet" href="framework/css/bootstrap.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <head>
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="framework/js/jquery-3.5.1.slim.min.js" type="text/JavaScript"></script>
        <script src="framework/js/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="framework/css/owl.carousel.min.css">
        
        <link rel="shortcut icon" href="assets/img/logo1.png"/>
        <title>Mineversal | About Us</title>
        <style>
            html {
                scroll-behavior: smooth;
            }
            body {
                font-family: 'Alegreya';
                font-size: 18.6px;
                background-color: rgb(27, 27, 27);
                height: auto;
            }
            #cont p, #cont h1, #cont h2, .title, .sub-title {
                color: white;
                font-family: 'Alegreya';
                font-size: 18.6px;
            }
            #cont hr {
                border-color: white;
            }
            #slider {
                z-index: 0;
            }
            .card {
                flex: 1;
                margin: 0 10px;
                background: rgb(36, 34, 34)
            }
            .card .img {
                width: 100%;
            }
            .card .img img {
                height: 100%;
                width: 100%;
                object-fit: cover;
            }
            .card .content {
                padding: 10px 20px;
            }
        </style>
    </head>
    <body>
        <header id="bar" class="barheader sticky">
            <nav class="nav navbar navbar-expand-lg navbar-dark" id="nav-custom">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img class="my-auto" src="https://tugas.mineversal.com/user/assets/img/logo.png" width="200px"></a>
                    <button class="navbar-toggler navbar-toggler-right navbar-toggler-size" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item my-auto buttonbar active">
                                <a href="https://tugas.mineversal.com/user/" class="nav-link"><i class="fa fa-fw fa-home"></i> HOME</a>
                            </li>
                            <li class="nav-item my-auto buttonbar active">
                                <a href="https://tugas.mineversal.com/user/#online" class="nav-link"><i class="fa fa-fw fa-globe"></i> TRAVELLING</a>
                            </li>
                            <li class="nav-item my-auto buttonbar active">
                                <a href="https://tugas.mineversal.com/user/#data" class="nav-link"><i class="fa fa-fw fa-folder"></i> COVID-19 DATA</a>
                            </li>
                            <li class="nav-item my-auto buttonbar active">
                                <a href="https://tugas.mineversal.com/user/#aboutus" class="nav-link"><i class="fa fa-fw fa-user"></i> ABOUT US</a>
                            </li>
                            <li class="nav-item my-auto buttonbar active">
                                <a href="https://tugas.mineversal.com/user/#contact" class="nav-link"><i class="fa fa-fw fa-envelope"></i> CONTACT</a>
                            </li>
                            <li class="nav-item dropdown my-auto buttonbar active">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-fw fa-search"></i> SEARCH
                                </a>
                                <div class="dropdown" aria-labelledby="navbarDropdown">
                                    <form class="search-content" action="search?search=<?php echo $_GET['search'];?>" method="GET">
                                        <div class="search dropdown-item">
                                            <input type="text" placeholder="Search.." name="search">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item my-auto buttonbar active">
                                <a href="account" class="nav-link"><i class="fa fa-fw fa-user"></i> MY ACCOUNT</a>
                            </li>
                            <li class="nav-item my-auto buttonbar active">
                                <a class="nav-link" onclick="document.getElementById('signUp').style.display='block'" style="width:auto;"><i class="fa fa-fw fa-close"></i> LOGOUT</a>
                                <div id="signUp" class="signup-bg">
                                    <form class="signup-content animate col-md-4 mx-auto" action="logout.php" method="POST">
                                        <div class="signup-container">
                                            <div class="signup-formcontainer">
                                                <span onclick="document.getElementById('signUp').style.display='none'" class="close" title="Close Modal">&times;</span>
                                                <h1>Log Out Confirm</h1>
                                                <p>Are you sure you want logout?</p>
                                            </div>
                                            <div class="clearfix">
                                                <button type="button" onclick="document.getElementById('signUp').style.display='none'" class="cancelbtn">Cancel</button>
                                                <button type="submit" class="signupbtn" name="logout">Log Out</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div id="cont" class="container-fluid mt-5 pt-5">
            <div class="row">
                <div class="col-md-12">
                    <?php if($error_same){ ?>
                        <div class="alert alert-danger" role="alert"><strong>Username dan Email sudah terdaftar!</strong> <?php echo htmlentities($error_same);?></div>
                    <?php } ?>
                    <?php if($msg_reg){ ?>
                        <div class="alert alert-success" role="alert"><strong>Data Kamu Berhasil Tersimpan!</strong> <?php echo htmlentities($msg_reg);?></div>
                    <?php } ?>
                    <?php if($error_reg){ ?>
                        <div class="alert alert-danger" role="alert"><strong>Yah Maaf!</strong> <?php echo htmlentities($error_reg);?></div>
                    <?php } ?>
                    <?php if($error_log){ ?>
                        <div class="alert alert-danger" role="alert"><strong>Password Salah!</strong> <?php echo htmlentities($error_log);?></div>
                    <?php } ?>
                    <?php if($error_conf_psw){ ?>
                        <div class="alert alert-danger" role="alert"><strong>Password dan Konfirmasi Password Tidak Sama!</strong> <?php echo htmlentities($error_conf_psw);?></div>
                    <?php } ?>
                    <?php if($error_not_user){ ?>
                        <div class="alert alert-danger" role="alert"><strong>Maaf Kamu tidak terdaftar!</strong> <?php echo htmlentities($error_not_user);?></div>
                    <?php } ?>
                    <div class="card">
                        <div class="img"><img src="assets/img/Mineversal.jpg" alt="Mineversal"></div>
                        <div class="content">
                            <div class="title">ABOUT US</div>
                            <div class="sub-title">PROJECT FLOW</div>
                            <hr>
                            <p>Selamat Datang di Website Pertama Kami, Mineversal, Mineversal memiliki makna yaitu 
                            "milik bersama" karena ini merupakan Project gabungan yang dibuat oleh satu tim berisikan 
                            5 orang yaitu Zidan, Ivana, Nadya, Azhar, dan Gading dan dikembangkan bersama-sama. Website
                            ini dibuat untuk memenuhi persyaratan kelulusan dari Mata Kuliah Pemrograman Web. Pengembangan
                            dimulai pada tanggal 15 September dengan menentukan ide dari Project website yang kami ingin
                            buat ini, dari semua ide yang telah dipaparkan terdapat 3 ide utama yang ingin kami fokuskan
                            di web ini yaitu, Travelling Online, Data COVID-19 dan juga Habbit Tracker. Desain Sistem, UI/UX
                            mulai dibuat pada tanggal 20 September 2020 oleh Nadya. Setelah UI/UX dibuat Pembangunan dan 
                            pengembangan prototype dimulai pada tanggal 27 September 2020 dengan menggunakan Native CSS dan 
                            belum menggunakan Framework yang dibuat oleh Nadya dan juga Ivana. prototype tersebut kemudian
                            dirapihkan dan juga dibuat lebih responsive oleh Azhar. desain dan pembuatan database dibuat
                            pada tanggal 5 Oktober 2020 yang dibuat oleh Gading dan Zidan pun mulai membuat script back
                            end untuk menghubungkan database dengan prototype web kami. fitur login berhasil dibuat dan
                            setelahnya kami mulai menambahkan fitur utama dan juga fitur pendukung untuk melengkapi web kami.
                            13 Oktober kami mulai mencoba mengonlinekan website kami dan web kami pun mulai online dan dapat
                            diakses oleh orang dari berbagai dunia. Online Travelling ditambahkan sebagai fitur dikarenakan 
                            kami sebagai mahasiswa mendukung penuh kebijakan pemerintah terhadap kondisi pandemi ini yang 
                            mengharuskan masyarakat tetap dirumah atau work from home, dengan dibuatnya fitur Online 
                            Travelling ini kami berharap dapat membantu kebijakan pemerintah dan juga membantu masyarakat 
                            yang merasa jenuh dirumah untuk berlibur secara daring lewat berbagai artikel liburan yang telah 
                            kami tulis di web ini. Untuk fitur data COVID-19 itu merupakan fitur untuk memberitahukan kepada 
                            masyarakat secara terbuka persebaran dari COVID-19 agar masyarakat dapat semakin berhati-hati
                            dalam menjalankan aktivitasnya diluar rumah. Untuk fitur Habbit Tracker sendiri ialah fitur untuk 
                            mengingatkan aktivitas dan keseharian masyarakat selama dirumah, pengingatnya berupa email dari 
                            web kami yang akan dikirimkan kepada email masing-masing user dari web kami. Terima Kasih, 
                            Silahkan Manfaatkan fitur yang ada di web kami.<p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <h2 class="text-center">DEVELOPER TEAM</h2>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div id="slider" class="owl-carousel owl-theme slider slideshow">
                        <div class="card">
                            <div class="img"><img src="assets/img/nadya.jpeg" alt="Nadya"></div>
                            <div class="content">
                                <div class="title">Nadiya Amanda Rizkania</div>
                                <div class="sub-title"></div>
                                <p class="text-center">As UI/UX Designer and Front End Developer</p>
                                <div class="btn">
                                    <a class="call" href="https://instagram.com/amnndya">Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="img"><img src="assets/img/ivana.png" alt="Ivana"></div>
                            <div class="content">
                                <div class="title">Ivana Gabriella Manurung</div>
                                <div class="sub-title"></div>
                                <p class="text-center">As Content Researcher and Front End Developer</p>
                                <div class="btn">
                                    <a class="call" href="https://wa.me/+6281296932033">Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="img"><img src="assets/img/azhar.jpg" alt="Azhar"></div>
                            <div class="content">
                                <div class="title">Azhar Rizki Zulma</div>
                                <div class="sub-title"></div>
                                <p class="text-center">As Project Manager and Full Stack Developer</p>
                                <div class="btn">
                                    <a class="call" href="https://wa.me/+6281317441991">Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="img"><img src="assets/img/gading.jpeg" alt="Gading"></div>
                            <div class="content">
                                <div class="title">Gading Sectio Aryoseto</div>
                                <div class="sub-title"></div>
                                <p class="text-center">As Data Researcher and Back End Developer</p>
                                <div class="btn">
                                    <a class="call" href="https://wa.me/+6281294201579">Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="img"><img src="assets/img/zidan.jpeg" alt="Zidan"></div>
                            <div class="content">
                                <div class="title">Muhammad Zidan</div>
                                <div class="sub-title"></div>
                                <p class="text-center">As Feature Inovator and Back End Developer</p>
                                <div class="btn">
                                    <a class="call" href="https://wa.me/+6281906852062">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="footer">
            <div id="contact">
                <h3 class="">Contact Us</h3>
                <a href="https://facebook.com/mineversal" class="fa fa-facebook"></a>
                <a href="https://twitter.com/mineversals" class="fa fa-twitter"></a>
                <a href="https://instagram.com/mineversal" class="fa fa-instagram"></a>
                <a href="https://youtube.com/mineversal" class="fa fa-youtube"></a>
            </div>
            <br>
            <div>
                <p>Jakarta, 27 September 2020</p>
                <p>Thanks to Mrs Dian Pratiwi and Lab Asistant<p>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Mineversal</span></strong> 2020
            </div>
        </div>
        <a onclick="topFunction()" id="upBtn" title="Back to Top"><i class="arrow up"></i></a>
    </body>
    <script>
        $(".slider").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000, //2000ms = 2s;
            autoplayHoverPause: true,
            responsiveClass: true,
            margin:10,
            responsive:{
                0:{
                    items:1,
                    nav:true,
                    dots:false
                },
                600:{
                    items:3,
                    nav:false,
                    dots:false
                },
                1000:{
                    items:5,
                    nav:false,
                    dots:false
            }}
        });
    </script>
    <script src="assets/js/index.js" type="text/javascript"></script>
    <script src="framework/js/bootstrap.bundle.min.js" type="text/JavaScript"></script>
</html>