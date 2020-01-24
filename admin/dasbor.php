<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Telaga | Admin</title>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <?php
    @session_start();
    if (!$_SESSION['nama']) {
        header("location:index.php");
    }
    ?>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <h3><b>Telaga</b> Nursery</h3>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="#statistik">
                                <i class="fas fa-chart-bar"></i>Statistik</a>
                        </li>
                        <li>
                            <a href="#databibit">
                                <i class="fas fa-table"></i>Data Bibit</a>
                        </li>
                        <li>
                            <a href="#pelatihan">
                                <i class="fas fa-users"></i>Pelatihan</a>
                        </li>
                        <li>
                            <a href="#pesanuser">
                                <i class="fas fa-address-book"></i>Pesan User</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h3><b>Telaga</b> Nursery</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="#statistik">
                                <i class="fas fa-chart-bar"></i>Statistik</a>
                        </li>
                        <li>
                            <a href="#databibit">
                                <i class="fas fa-table"></i>Data Bibit</a>
                        </li>
                        <li>
                            <a href="#pelatihan">
                                <i class="fas fa-users"></i>Pelatihan</a>
                        </li>
                        <li>
                            <a href="#pesanuser">
                                <i class="fas fa-address-book"></i>Pesan User</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="cari.php" method="GET">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Cari Sesuatu " />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap" style="margin-left:200px;">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><? echo $_SESSION['nama']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><? echo $_SESSION['nama']; ?></a>
                                                    </h5>
                                                    <span class="email"><? echo $_SESSION['email']; ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <?php
            include '../con.php';
            $kueri = 'SELECT * FROM kontak';
            $data = mysqli_query($con, $kueri);
            ?>
            <!-- MAIN CONTENT-->
            <div class="main-content" id="statistik">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Dasbor Admin </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o add"></i>
                                            </div>
                                            <div class="text">
                                                <h2><? echo mysqli_num_rows($data); ?></h2>
                                                <span>User menghubungi</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2><? $s = mysqli_query($con,"SELECT * FROM lengkeng");echo mysqli_num_rows($s); ?></h2>
                                                <span>Bibit Kelengkeng</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-accounts-outline"></i>
                                            </div>
                                            <div class="text">
                                                <h2><? $s = mysqli_query($con,"SELECT * FROM pelatihan");echo mysqli_num_rows($s);?></h2>
                                                <span>User Pelatihan</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account"></i>
                                            </div>
                                            <div class="text">
                                                <h2><? echo $_SESSION['nama']?></h2>
                                                <span>Logged in</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="row" id="databibit">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Data Bibit</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">

                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#modalLoginForm">
                                            <i class="zmdi zmdi-plus"></i>Tambah Bibit</button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Bibit</th>
                                                <th>Foto</th>
                                                <th>Harga</th>
                                                <th>Promo</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $bibit = 'SELECT * FROM lengkeng';
                                            $datalengkeng = mysqli_query($con, $bibit);
                                            $no = 0;
                                            while ($row = mysqli_fetch_assoc($datalengkeng)) {
                                                $no++;
                                                echo ' <tr class="tr-shadow">';
                                                echo '<td>' . $no . '</td>';
                                                echo '<td>' . $row["Nama"] . '</td>';
                                                echo '<td><img src="../images/lengkeng/' . $row["foto"] . '" width="100px"></td>';
                                                echo '<td>' . $row["harga"] . '</td>';
                                                echo '<td><span class="status--process">' . $row["promo"] . '</span></td>';
                                                echo '<td>
                                            <div class="table-data-feature">
                                            <a href="editlengkeng.php?id=' . $row['id'] . '"><button  class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button></a>
                                                <a href="deletelengkeng.php?id=' . $row['id'] . '">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button></a>
                                            </div>
                                        </td>';
                                                echo '</tr>';
                                                echo '<tr class="spacer"></tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div><br>
                        <div class="col-lg-12" id="pelatihan">
                            <h2 class="title-1 m-b-25">Peserta Pelatihan</h2>
                            <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                                <div class="au-card-inner">
                                    <div class="table-responsive">
                                        <table class="table table-top-countries">
                                            <tbody>
                                                <tr style="border-bottom:1px white solid; color:white;">
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Estimasi Peserta</th>
                                                    <th>Email</th>
                                                    <th>Nomor</th>
                                                    <th>Kontak Whatsapp</th>
                                                </tr>
                                                <?php
                                                $noms = 1;
                                                $ntaps = mysqli_query($con, "SELECT * FROM pelatihan");
                                                while ($row = mysqli_fetch_assoc($ntaps)) {
                                                    echo '<tr>';
                                                    echo '<td>' . $noms . '</td>';
                                                    $noms++;
                                                    echo '<td>' . $row['nama'] . '</td>';
                                                    echo '<td>' . $row['alamat'] . ' Peserta</td>';
                                                    echo '<td>' . $row['peserta'] . '</td>';
                                                    echo '<td>' . $row['email'] . '</td>';
                                                    echo '<td>' . $row['nomor'] . '</td>';
                                                    echo '<td><center><a href="https://wa.me/' . $row['nomor'] . '?text=Hai,' . $row['nama'] . '"><i style="font-size:30px;color:lime;" class="zmdi zmdi-whatsapp"></i></a></center></td>';
                                                    echo '</tr>';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                        <div class="row table-responsive table-responsive-data2" id="pesanuser">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Pesan User</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th class="text-right">Email</th>
                                                <th class="text-right">Subjek</th>
                                                <th class="text-right">Pesan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            while ($row = mysqli_fetch_assoc($data)) {
                                                echo "<tr>";
                                                $no++;
                                                echo '<td>' . $no . '</td>';
                                                echo '<td>' . $row["Nama"] . '</td>';
                                                echo '<td class="text-right">' . $row["Email"] . '</td>';
                                                echo '<td class="text-right">' . $row["Subjek"] . '</td>';
                                                echo '<td class="text-right">' . $row["Pesan"] . '</td>';
                                                echo "</tr>";
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="copyright">
                                        <p>Copyright © 2020 Telaga Nursery All rights reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MAIN CONTENT-->
                <!-- END PAGE CONTAINER-->
            </div>

        </div>
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Tambah Bibit </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <form action="tambahbibit.php" method="post" enctype="multipart/form-data">
                                <i class="fas fa-tree prefix grey-text"> Nama :</i>
                                <input type="text" name="nama" id="defaultForm-email" placeholder="Isi Nama Bibit" class="form-control validate">
                        </div>

                        <div class="md-form mb-4">
                            <i class="fas fa-camera prefix grey-text"> Foto :</i>
                            <input type="file" name="foto" id="defaultForm-pass" class="form-control validate" placeholder="Upload Foto Bibit">
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-usd prefix grey-text"> Harga :</i>
                            <input type="text" name="harga" id="defaultForm-pass" class="form-control validate" placeholder="Isi Harga Bibit">
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-scissors prefix grey-text"> Promo :</i>
                            <input type="text" name="promo" id="defaultForm-pass" class="form-control validate" placeholder="Isi Harga Promo">
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <input type="submit" name="submit" value="Tambah Bibit" class="btn btn-lg btn-primary">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalLoginedit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Tambah Bibit </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <form action="tambahbibit.php" method="post" enctype="multipart/form-data">
                                <i class="fas fa-tree prefix grey-text"> Nama :</i>
                                <input type="text" name="nama" id="defaultForm-email" placeholder="Isi Nama Bibit" class="form-control validate">
                        </div>

                        <div class="md-form mb-4">
                            <i class="fas fa-camera prefix grey-text"> Foto :</i>
                            <input type="file" name="foto" id="defaultForm-pass" class="form-control validate" placeholder="Upload Foto Bibit">
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-usd prefix grey-text"> Harga :</i>
                            <input type="text" name="harga" id="defaultForm-pass" class="form-control validate" placeholder="Isi Harga Bibit">
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-scissors prefix grey-text"> Promo :</i>
                            <input type="text" name="promo" id="defaultForm-pass" class="form-control validate" placeholder="Isi Harga Promo">
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <input type="submit" name="submit" value="Daftar Sekarang" class="btn btn-lg btn-primary">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js">
        </script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="vendor/select2/select2.min.js">
        </script>

        <!-- Main JS-->
        <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->