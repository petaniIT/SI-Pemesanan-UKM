<?php
// menyimpan pembelian ke dalam session
session_start();
// untuk koneksi ke database
include_once 'configs/koneksi.php';
//mendapatkan id produk dari url
$id_produk = $_GET['id'];
//query ambil data
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk= '$id_produk'");
$detail = $ambil->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-12">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | UKM Desa Tritiro</title>

    <!-- core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/icomoon.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/ico/bulkum.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->
<label>Realtime</label>
<script type="text/javascript">
    function tampilkanwaktu() { //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
        var waktu = new Date(); //membuat object date berdasarkan waktu saat 
        var sh = waktu.getHours() +
            ""; //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
        var sm = waktu.getMinutes() + ""; //memunculkan nilai detik    
        var ss = waktu.getSeconds() +
            ""; //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" +
            sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
    }
</script>

<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
    <span id="clock"></span>
    &nbsp;
    <?php
    $hari  = date('l');
    $tgl   = date('d');
    $bulan = date('F');
    $tahun = date('Y');

    if ($hari == "Sunday") {
        echo "Minggu";
    } else if ($hari == "Monday") {
        echo "Senin";
    } else if ($hari == "Tuesday") {
        echo "Selasa";
    } else if ($hari == "Wednesday") {
        echo "Rabu";
    } else if ($hari == "Thursday") {
        echo ("Kamis");
    } else if ($hari == "Friday") {
        echo "Jum'at";
    } else if ($hari == "Saturday") {
        echo "Sabtu";
    }
    if ($bulan == "January") {
        echo " Januari ";
    } else if ($bulan == "February") {
        echo " Februari ";
    } else if ($bulan == "March") {
        echo " Maret ";
    } else if ($bulan == "April") {
        echo " April ";
    } else if ($bulan == "May") {
        echo " Mei ";
    } else if ($bulan == "June") {
        echo " Juni ";
    } else if ($bulan == "July") {
        echo " Juli ";
    } else if ($bulan == "August") {
        echo " Agustus ";
    } else if ($bulan == "September") {
        echo " September ";
    } else if ($bulan == "October") {
        echo " Oktober ";
    } else if ($bulan == "November") {
        echo " November ";
    } else if ($bulan == "December") {
        echo " Desember ";
    }
    echo $tgl;
    echo $tahun;
    ?>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="top-number">
                            <center>
                                <p><strong>SISTEM INFORMASI PEMASARAN USAHA KECIL DAN MENENGAH (UKM) </strong></p>
                                <p><strong>DESA TRITIRO KABUPATEN BULUKUMBA </strong></p>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social" navbar-form navbar-right>
                            <ul class="social-share">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-whatsapp"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-phone-square"></i></a>
                                </li>
                            </ul>
                            <br /> <br />
                            <div class="row">
                                <div class="col-sm-13 col-xs-12">
                                    <form action="pencarian.php" method="get" class="navbar-form navbar-right">
                                        <input type="text" class="form-control" name="keyword" placeholder="Pencarian">
                                        <button class="btn btn-primary">Cari </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- begin:: nav -->
            <nav class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="assets/images/ico/bulkum.ico" width="90" height="85" alt="logo" class="img-responsive"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="berita.php">Berita Desa UKM</a>
                            </li>
                            <li>
                                <a href="profilukm.php">Profil UKM</a>
                            </li>
                            <li>
                                <a href="keranjanguser.php">Belanja</a>
                            </li>
                            <li>
                                <a href="login.php">Login </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- end:: nav -->

            <strong>
                <marquee> Selamat Datang di Sistem Informasi Pemasaran Usaha Kecil dan Menengah (UKM) Desa TritiroKabupaten Bulukumba </marquee>
            <strong>
    </header>

    <section class="konten">
        <br /><br />
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="pictures/foto_produk/<?php echo $detail["foto_produk"]; ?>" alt="" class="img-responsive">
                </div>
                <div class="col-md-6">

                    <h2><?php echo $detail["nama_produk"] ?></h2>
                    <h4><?php echo number_format($detail["harga_produk"]); ?></h4>
                    <h5>Stok: <?php echo $detail["stok_produk"] ?></h5>

                    <form method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="number" min="1" class="form-control" name="jumlah" max=" <?php echo $detail['stok_produk'] ?>" required="required" />
                                <div class="input-group-btn">
                                    <button class="btn btn-primary" name="beli">Beli</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <p><?= $detail["deskripsi_produk"]; ?></p>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-11">
                    <center> &copy; 2019 <a target="_blank" href="http://shapebootstrap.net/"
                            title="Free Twitter Bootstrap WordPress Themes and HTML templates">Sistem Informasi
                            Pemasaran UKM Desa Tritiro</a>. All Rights Reserved.</center>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>

<?php
//jika ada tombol beli
if (isset($_POST["beli"]))
{
    //mendapatkan jumlah yang diinputkan
    $jumlah = $_POST["jumlah"];
    //masukkan di keranjang belanja
    $_SESSION["keranjang"]["$id_produk"] = $jumlah;

    echo "<script>alert('produk telah masuk ke keranjang belanja');</script>";
    echo "<script>location='keranjang.php';</script>";
}
?>