<!DOCTYPE html>

<head>
    <!-- --- Meta --- -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <meta http-equiv="cache-control" content="no-cache">
    <meta name="orientation" content="portrait">
    <meta content="document" name="resource-type" />
    <meta content="all" name="audience" />
    <meta content="general" name="rating" />
    <meta content="all" name="robots" />
    <meta content="index, follow" name="robots" />
    <meta content="id" name="language" />
    <meta content="id" name="geo.country" />
    <meta content="global" name="distribution" />
    <meta content="1 days" name="revisit-after" />
    <meta content="Indonesia" name="geo.placename" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="#006946" name="apple-mobile-web-app-status-bar-style" />
    <meta content name="og:description" />
    <meta content="#006946" name="msapplication-navbutton-color" />
    <meta content="#006946" name="msapplication-navbutton-color" />
    <meta content="#006946" name="theme-color" />
    <meta content="text/html; charset=UTF-8" https-equiv="Content-Type" />
    <meta content="blogger" name="generator" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />

    <!-- --- Title --- -->
    <title>Website Kampung Bumun | Sistem Informasi Desa</title>

    <!-- --- Link --- -->
    <link href="https://fonts.googleapis.com/css?family=Google+Sans:100,300,400,500,700,900,100i,300i,400i,500i,700i,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <script src="https://www.gstatic.com/charts/loader.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">


    <!-- LINK DIREKTORI -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- --- JavaScript --- -->
    <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 500) {
                    $('.scrolltop').slideDown(200);
                } else {
                    $('.scrolltop').slideUp(300);
                }
            });
            $('.scrolltop').click(function() {
                $('body,html').animate({
                    scrollTop: 0
                }, 800).animate({
                    scrollTop: 0
                }, 200).animate({
                    scrollTop: 0
                }, 150).animate({
                    scrollTop: 0
                }, 100).animate({
                    scrollTop: 0
                }, 50);
            });
        });
    </script>

    <script type="text/javascript">
        $(window).scroll(function() {

            var scroll = $(window).scrollTop();

            if (scroll >= 1) {
                $(".mainheader").addClass("fixed");
            } else {
                $(".mainheader").removeClass("fixed");
            }
        });
    </script>
</head>

<body>
    <!-- --- Scroll To Top --- -->
    <div class="scrolltop"><i aria-hidden="true" class="fa fa-angle-up"></i></div>

    <!-- Navbar Top -->
    <div class="navtop">
        <div class="nav-clear">
            <div class="kalender_fix">
                <!-- --- JavaScript Tanggal --- -->
                <script type="text/javascript">
                    now = new Date();
                    if (now.getTimezoneOffset() == 0)(a = now.getTime() + (7 * 60 * 60 * 1000))
                    else(a = now.getTime());
                    now.setTime(a);
                    var tahun = now.getFullYear()
                    var hari = now.getDay()
                    var bulan = now.getMonth()
                    var tanggal = now.getDate()
                    var hariarray = new Array("Minggu", "Senin",
                        "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu")
                    var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember")
                    document.write(hariarray[hari] + ", " + tanggal + " " + bulanarray[bulan] + " " + tahun)
                </script>
            </div>
            <div class="sosmed-kotakcari">
                <div class="sosmed">
                    <ul>
                        <li><a href=" /"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                        <li class="menu-item"><a href=" / " title><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- --- End Navbar Top -->


    <!-- --- Header --- -->
    <div class="mainheader">
        <div id="header-wrapper">
            <!-- --- Hamburger Menu - Handphone --- -->
            <div class="chanelmenumobile">
                <button class="button1" onclick="$(&#39;.menubar&#39;).animate({width:&quot;toggle&quot;},200);">
                    <i aria-hidden="true" class="fa fa-2x fa-align-right"></i>
                </button>
            </div>
            <!-- --- End Hamburger Menu - Handphone --- -->
            <!-- --- Logo Navbar --- -->
            <div class="header section" id="header">
                <div class="widget Header" data-version="1" id="Header1">
                    <div id="header-inner">
                        <h2>KAMPUNG BUMUN</h2>
                    </div>
                </div>
            </div>
            <!-- --- End Logo Navbar --- -->
            <!-- --- Navbar Menu --- -->
            <div class="header section" id="header2">
                <div class="widget HTML" data-version="1" id="HTML7">
                    <div class="widget-content">
                        <div class="menubar">
                            <ul>
                                <li><a href="#" title="Beranda"><i class="bi bi-house-fill"> </i> Beranda </a> </li>
                                <li class="last"><a onclick="$(&#39;.menudrop1&#39;).slideToggle();" title="Profil">
                                        <i class="bi bi-person-fill"></i> Profile
                                        <i class="bi bi-caret-down" onclick="$(&#39;.menudrop1&#39;).slideToggle();"></i> </a>
                                    <ul class="menudrop1">
                                        <li><a href="web/sejarah.html #sejarah" title="Sejarah Desa"> Sejarah </a></li>
                                        <li><a href="web/sejarah.html #visimisi" title="Visi & Misi">Visi & Misi</a></li>
                                        <li><a href="web/sejarah.html #geografis" title="Geografis Desa">Geografis </a></li>
                                        <li><a href="web/sejarah.html #demografi" title="Demografi Desa">Demografi </a></li>
                                    </ul>
                                </li>
                                <li class="last"><a onclick="$(&#39;.menudrop3&#39;).slideToggle();" title="Pemerintah">
                                        <i class="bi bi-bank2"></i> Pemerintah
                                        <i class="bi bi-caret-down" onclick="$(&#39;.menudrop3&#39;).slideToggle();"></i> </a>
                                    <ul class="menudrop3">
                                        <li><a href="/" title="Struktur">Struktur</a></li>
                                        <li><a href="/" title="Lembaga">Lembaga</a></li>
                                    </ul>
                                </li>
                                <li class="last"><a onclick="$(&#39;.menudrop&#39;).slideToggle();" title="Panduan">
                                        <i class="bi bi-file-earmark-fill"></i> Data
                                        <i class="bi bi-caret-down" onclick="$(&#39;.menudrop&#39;).slideToggle();"></i> </a>
                                    <ul class="menudrop">
                                        <li><a href="/" title="Pendidikan">Pendidikan</a></li>
                                        <li><a href="/" title="Penduduk">Penduduk</a></li>
                                        <li><a href="/" title="Wilayah">Wilayah</a></li>
                                    </ul>
                                </li>
                                <li><a href="" title=" Kontak Desa ">
                                        <i class="bi bi-person-lines-fill"></i> Kontak </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- --- End Navbar Menu --- -->
        </div>
    </div>
    <!-- --- End Header --- -->
    <div style="clear:both;"></div>

    <!-- --- Agenda Desa --- -->
    
    <!-- --- End Agenda Desa --- -->

    <div style="clear:both;"></div>

    <!-- --- Mini Item Menu ---  -->
    <div id="blog-outer">
        <div id="wrap2">
            <div id="content-wrapper">
                <span id="skiplinks" style="display:none;">
                    <a href="#main">skip to main </a> |
                    <a href="#sidebar">skip to sidebar</a>
                </span>
                <div class="newpost"><i aria-hidden="true" class="fa fa-1x fa-dot-circle-o"></i> MENU</div>
                <!-- <div class="newpostd">Mensejahterakan dan Mencerdaskan Warga</div> -->
                <div id="menustatic2-wrapper">
                    <div class="menustatic2 section" id="menustatic2">
                        <div class="widget HTML" data-version="1" id="HTML6">
                            <div class="widget-content">
                                <center>
                                    <ul class="mediapartner0">
                                        <li>
                                            <a href="web/sejarah.html #sejarah">
                                                <i aria-hidden="true" class="fa fa-university fa-lg university"></i>
                                                <h6> Sekilas Desa</h6>
                                            </a>
                                        </li>
                                        <li><a href="">
                                                <i aria-hidden="true" class="fa fa-calendar fa-lg  map-marker"></i>
                                                <h6> Agenda</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="doc/tatib.pdf" target="_blank" class="pdf-link">
                                                <i aria-hidden="true" class="fa fa-gavel fa-lg gavel"></i>
                                                <h6> Perdes</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </center>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- --- End Mini Item Menu ---  -->

    <div id="menustatic1-wrapper">
        <div class="menustatic1 no-items section" id="menustatic1"></div>
    </div>

    <!-- --- --- -->
    <div class="kolombawah">
        <div id="dropdown-wrapper"></div>
    </div>
    <!-- ---- --- -->

    <!-- --- Copyright --- -->
    <section class="footer">
        <div class="social">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-snapchat"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
        </div>
        <ul class="list">
            <li>
                <a href="#">BERANDA</a>
            </li>
            <li>
                <a href="#">PROFILE</a>
            </li>
            <li>
                <a href="#">PEMERINTAH</a>
            </li>
            <li>
                <a href="#">DATA</a>
            </li>
            <li>
                <a href="#">KONTAK</a>
            </li>
        </ul>
        <p class="copyright">Kembang Desa @ 2023</p>
    </section>
    <!-- --- End Copyright -->


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function() {
            if ($('#sidebar').length) { // Ganti "#sticky-sidebar" dengan ID tertentu
                var el = $('#sidebar');
                var stickyTop = $('#sidebar').offset().top;
                var stickyHeight = $('#sidebar').height();
                $(window).scroll(function() {
                    var limit = $('#menustatic1-wrapper').offset().top - stickyHeight - 55; // Jarak berhenti di "#footer-wrapper"
                    var windowTop = $(window).scrollTop();
                    if (stickyTop < windowTop) {
                        el.css({
                            position: 'fixed',
                            top: 40 // Jarak atau margin sticky dari atas
                        });
                    } else {
                        el.css('position', 'static');
                    }
                    if (limit < windowTop) {
                        var diff = limit - windowTop;
                        el.css({
                            top: diff
                        });
                    }
                });
            }
        });
    </script>
</body>

</html>