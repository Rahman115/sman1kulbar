<?php

$url = $_SERVER["REQUEST_URI"];
$ur = explode("/", $url);

$page = $ur[1];
$view = new view($viewName);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8" />
    <meta name="description" content="SMA Negeri 1 Kulisusu Barat, Sekolah yang terdapat di Buton Utara">

    <meta name="keywords" content="SMA Negeri 1 Kulisusu Barat, SMA BUTON URATA, SMAN 1 BUTON UTARA, KULISUSU BARAT,">

    <meta name="author" content="AbuduChoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="-1" />
    <title>SMAN 1 KULISUSU BARAT</title>

    <link rel="stylesheet" href="<?php echo STYLE; ?>style.min.css">

</head>

<body>
    <header>
        <h2>SMA NEGERI 1 KULISUSU BARAT</h2>
        <p>TERWUJUDNYA PESERTA DIDIK YANG BERAHKLAK MULIA</p>
    </header>
    <div id="container">
        <nav>
            <div class="nav-content">
                <button class="nav-content-btn"><a href="#">BERANDA</a></button>

            </div>
            <div class="dropdown">
                <button class="dropbtn">PROFIL SEKOLAH</button>
                <div class="dropdown-content">
                    <a href="#">Sambutan Kepala Sekolah</a>
                    <a href="#">Sejarah</a>
                    <a href="#">Visi & Misi</a>
                    <a href="#">Akreditasi Sekolah</a>
                    <a href="#">Tata Tertib</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">BERITA</button>
                <div class="dropdown-content">
                    <a href="#">Berita Terbaru</a>
                    <a href="#">Info Sekolah</a>
                    <a href="#">Agenda</a>
                    <a href="#">Galeri</a>
                </div>
            </div>
            <div class="nav-content">
                <button class="nav-content-btn"><a href="#">EKSTRAKURIKULER</a></button>

            </div>
            <div class="nav-content">
                <button class="nav-content-btn"><a href="#">KONTAK</a></button>

            </div>

            <!-- <ul>

                    <li><a href="">BERITA</a></li>
                    <li><a href="">GALERI</a></li>
                    <li><a href="">KONTAK</a></li>
                </ul> -->
        </nav>

    </div>

    <!-- <div class="pages"> -->
    <?php
    $view->bind('data', $data);
    $view->forceRender();
    ?>
    <!-- </div> -->
    <div class="content" style="background-color:var(--dark); color: #fff;">
        <div class="col-4">SMA NEGERI 1 KULISUSU BARAT</div>
        <div class="col-4">Postingan Terbaru</div>
        <div class="col-4">Informasi Kontak

        <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=Asia%2FJakarta&bgcolor=%23ffffff&showTitle=0&showPrint=0&showTz=0&src=aWQuaXNsYW1pYyNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=aWQuaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%230B8043&color=%234285F4" style="border:solid 1px #777" width="100%" height="300" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
    <footer>
        <div class="foo-content">Copyright @ Abuduchoy 2024</div>
    </footer>

    <script>
        window.onscroll = function () { myFunction() };

        var navbar = document.getElementById("container");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }

        console.log(window.pageYOffset);
    </script>
</body>

</html>