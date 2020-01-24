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
                            <a href="dasbor.php#statistik">
                                <i class="fas fa-chart-bar"></i>Statistik</a>
                        </li>
                        <li>
                            <a href="dasbor.php#databibit">
                                <i class="fas fa-table"></i>Data Bibit</a>
                        </li>
                        <li>
                            <a href="dasbor.php#pelatihan">
                                <i class="fas fa-users"></i>Pelatihan</a>
                        </li>
                        <li>
                            <a href="dasbor.php#pesanuser">
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
                            <a href="dasbor.php#statistik">
                                <i class="fas fa-chart-bar"></i>Statistik</a>
                        </li>
                        <li>
                            <a href="dasbor.php#databibit">
                                <i class="fas fa-table"></i>Data Bibit</a>
                        </li>
                        <li>
                            <a href="dasbor.php#pelatihan">
                                <i class="fas fa-users"></i>Pelatihan</a>
                        </li>
                        <li>
                            <a href="dasbor.php#pesanuser">
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
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Cari Sesuatu" />
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
            <br><br><br><br>
            <div class="row table-responsive " id="pesanuser">
                <div class="col-md-12">
                    <h2 class="title-1 m-b-25">Pesan User</h2>
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless" style="background:linear-gradient(to bottom,#536976,#292E49);color:white;">
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
                                include '../con.php';
                                $search = $_GET['search'];
                                $kontak = 'SELECT Nama,Email,Subjek,Pesan FROM kontak WHERE Nama LIKE "%' . $search . '%"';
                                $dataKontak = mysqli_query($con, $kontak);

                                if (mysqli_num_rows($dataKontak) > 0) {
                                    $no = 0;
                                    while ($data = mysqli_fetch_assoc($dataKontak)) {
                                        echo "<tr>";
                                        $no++;
                                        echo '<td>' . $no . '</td>';
                                        echo '<td class="text-right">' . $data["Nama"] . '</td>';
                                        echo '<td class="text-right">' . $data["Email"] . '</td>';
                                        echo '<td class="text-right">' . $data["Subjek"] . '</td>';
                                        echo '<td class="text-right">' . $data["Pesan"] . '</td>';
                                        echo "</tr>";
                                    }
                                } else {
                                    echo '<tr><td><h4 style="color:white;">Data Tidak Ditemukan Di Pesan User</h4></td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row" id="pesanuser">
                        <div class="col-md-12">
                            <h2 class="title-1 m-b-25">Data Lengkeng</h2>
                            <div class="table-responsive table--no-card">
                                <table class="table table-borderless " style="background:linear-gradient(to bottom,#1e3c72,#2a5298);color:white;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th class="text-right">Foto</th>
                                            <th class="text-right">Harga</th>
                                            <th class="text-right">Promo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../con.php';
                                        $search = $_GET['search'];
                                        $kontak = 'SELECT * FROM lengkeng WHERE Nama LIKE "%' . $search . '%"';
                                        $dataKontak = mysqli_query($con, $kontak);
                                        if (mysqli_num_rows($dataKontak) > 0) {
                                            $no = 0;
                                            while ($data = mysqli_fetch_assoc($dataKontak)) {
                                                echo "<tr>";
                                                $no++;
                                                echo '<td>' . $no . '</td>';
                                                echo '<td class="">' . $data["Nama"] . '</td>';
                                                echo '<td class="text-right"><img style="border-radius:10px;" src="../images/lengkeng/' . $data["foto"] . '" width="60px"></td>';
                                                echo '<td class="text-right">' . $data["harga"] . '</td>';
                                                echo '<td class="text-right">' . $data["promo"] . '</td>';
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo '<tr><td><h4 style="color:white;">Data Tidak Ditemukan Di Data Lengkeng</h4></td></tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div><br>
                            
                                    <div class="row" id="pesanuser">
                                <div class="col-md-12"><br>
                                    <h2 class="title-1 m-b-25">User Pelatihan</h2>
                                    <div class="table-responsive table--no-card">
                                        <table class="table table-borderless" style="background:linear-gradient(to bottom,#614385,#516395);color:white;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th class="text-right">Alamat</th>
                                                    <th class="text-right">Peserta</th>
                                                    <th class="text-right">Email</th>
                                                    <th class="text-right">Nomor</th>
                                                    <th class="text-right">Whatsapp</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include '../con.php';
                                                $search = $_GET['search'];
                                                $kontak = 'SELECT * FROM pelatihan WHERE nama LIKE "%' . $search . '%"';
                                                $dataKontak = mysqli_query($con, $kontak);
                                                if (mysqli_num_rows($dataKontak) > 0) {
                                                    $no = 0;
                                                    while ($data = mysqli_fetch_assoc($dataKontak)) {
                                                        echo "<tr>";
                                                        $no++;
                                                        echo '<td>' . $no . '</td>';
                                                        echo '<td>' . $data["nama"] . '</td>';
                                                        echo '<td class="text-right">' . $data["alamat"] . '</td>';
                                                        echo '<td class="text-right">' . $data["peserta"] . '</td>';
                                                        echo '<td class="text-right">' . $data["email"] . '</td>';
                                                        echo '<td class="text-right">' . $data["nomor"] . '</td>';
                                                        echo '<td><center><a href="https://wa.me/' . $data['nomor'] . '?text=Hai,' . $data['nama'] . '"><i style="font-size:30px;color:lime;" class="zmdi zmdi-whatsapp"></i></a></center></td>';
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo '<tr><td><h4 style="color:white;">Data Tidak Ditemukan Di Pesan User</h4></td></tr>';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    

                                    <!-- MAIN CONTENT-->

                                    <!-- END MAIN CONTENT-->
                                    <!-- END PAGE CONTAINER-->
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