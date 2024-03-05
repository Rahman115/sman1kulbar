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
    <meta name="description" content="<?php echo $meta['desk']; ?>">

    <meta name="keywords" content="<?php echo $meta['keywords']; ?>">

    <meta name="author" content="AbuduChoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="-1" />
    <title></title>

    <link rel="stylesheet" href="<?php echo STYLE; ?>style.min.css">

</head>

<body>
    <header>
        <h2>SMA NEGERI 1 KULISUSU BARAT</h2>
        <p>Scroll down to see the sticky effect.</p>
    </header>
    <div id="container">
        <nav>
        <div class="nav-content">
                <button class="nav-content-btn"><a href="#" >BERANDA</a></button>

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
                <button class="nav-content-btn"><a href="#" >EKSTRAKURIKULER</a></button>

            </div>
            <div class="nav-content">
                <button class="nav-content-btn"><a href="#" >KONTAK</a></button>

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

    <!-- <footer>
        <div class="foo-content">@ Abuduchoy 2024</div>
    </footer> -->

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