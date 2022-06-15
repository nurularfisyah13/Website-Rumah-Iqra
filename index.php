<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Iqra</title>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <img src="assets/gambar/Logo.png" alt="logo">

            <!-- Navigasi -->
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">TENTANG</a></li>
                <li><a href="#">GALERI</a></li>
                <li><a href="#">INFORMASI</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
            </div>
            <!-- Content -->
            <div class="content">
                <h1>RUMAH IQRA</h1>
                <h2>Pusat Belajar Mengaji</h2>
                <p>wadah untuk anak-anak, remaja, dan dewasa, yang diharapkan dapat membangun ummat untuk lebih mencintai Al-Qur'an dalam hal membaca, menghafal, dan mentadabburi sebagai pedoman hidup.</p>
                <div>
                    <button type="button"><a href="login.php" class="dropdown-link"><span></span>Login</a></button>
                    <button type="button"><a href="register.php" class="dropdown-link"><span></span>Daftar Sekarang</a></button>
                </div>
            </div>
            </div>

            <!-- Program -->
            <section class="program">
                <h1>Program</h1>

                <div class="row1">
                    <div class="course-col1">
                        <h3>Program Utama</h3>
                        <p class="row-p"><a href="#">Belajar Membaca Iqra</a></p>
                        <p class="row-p"><a href="#">Belajar Membaca Al-Qur'an</a></p>
                        <p class="row-p"><a href="#">Belajar Menghafal Al-Qur'an</a></p>
                    </div>
                    <div class="course-col2">
                        <h3>Program Umum</h3>
                        <p class="row-p"><a href="#">Belajar Membaca</a></p>
                        <p class="row-p"><a href="#">Belajar Menulis</a></p>
                        <p class="row-p"><a href="#">Belajar Berhitung</a></p>
                    </div>
                </div>
            </section>

            <!-- Pengetahuan -->
            <section class="pengetahuan">
                <h1>Pengetahuan Lainnya</h1>

                <div class="row2">
                    <div class="pengetahuan-col">
                        <img src="assets/gambar/tajwidbg.png" alt="tajwidbg">
                        <div class="layer">
                            <h3>Tajwid</h3>
                        </div>
                    </div>
                    <div class="pengetahuan-col">
                        <img src="assets/gambar/doabg.png" alt="doabg">
                        <div class="layer">
                            <h3>Doa-Doa</h3>
                        </div>
                    </div>
                    <div class="pengetahuan-col">
                        <img src="assets/gambar/sholatbg.png" alt="sholatbg">
                        <div class="layer">
                            <h3>Tuntunan Sholat</h3>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Info -->
            <section class="info">
                <div class="row3">
                    <div class="pengajar">
                        <h4>Jumlah Pengajar</h2>
                            <img src="assets/gambar/user-1.png" alt="user-1">
                            <p class="info-p">10</p>
                    </div>
                    <div class="pengajar">
                        <h4>Lokasi</h2>
                            <img src="assets/gambar/map.png" alt="map">
                            <p class="info-p">4</p>
                    </div>
                    <div class="pengajar">
                        <h4>Jumlah Murid</h2>
                            <img src="assets/gambar/user-1.png" alt="user-1">
                            <p class="info-p">150</p>
                    </div>
                </div>
            </section>

            <!-- Kegiatan -->
            <section class="kegiatan">
                <h1>Kegiatan</h1>

                <div class="slidershow middle">
                    <div class="slides">
                        <input type="radio" name="r" id="r1" checked>
                        <input type="radio" name="r" id="r2">
                        <input type="radio" name="r" id="r3">
                        <input type="radio" name="r" id="r4">
                        <input type="radio" name="r" id="r5">
                        <input type="radio" name="r" id="r6">
                        <input type="radio" name="r" id="r7">
                        <input type="radio" name="r" id="r8">
                        <div class="slide s1">
                            <img src="assets/gambar/gambar1.jpeg" alt="gambar1">
                        </div>
                        <div class="slide">
                            <img src="assets/gambar/gambar7.jpg" alt="gambar7">
                        </div>
                        <div class="slide">
                            <img src="assets/gambar/gambar3.jpeg" alt="gambar3">
                        </div>
                        <div class="slide">
                            <img src="assets/gambar/gambar4.jpg" alt="gambar4">
                        </div>
                        <div class="slide">
                            <img src="assets/gambar/gambar5.jpg" alt="gambar5">
                        </div>
                    </div>

                    <div class="navigation">
                        <label for="r1" class="bar"></label>
                        <label for="r2" class="bar"></label>
                        <label for="r3" class="bar"></label>
                        <label for="r4" class="bar"></label>
                        <label for="r5" class="bar"></label>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <div class="footer">
                Copyright &copy; Rumah Iqra All Rights reserved 2021
            </div>
</body>

</html>