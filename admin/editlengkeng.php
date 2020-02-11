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
    <style>
        body {
            background: linear-gradient(to bottom right, red, purple, blue);
            height: 550px;
        }

        .p {
            margin-top: 50px;
            margin-bottom: 50px;
            background-color: white;
            border-radius: 15px;
            width: 60%;
        }

        @media screen and (max-width: 700px) {
            .p {
                width: 100%;

            }
        }
        .tombol {
            background:linear-gradient(to left, red,purple,blue);
            border:none;
            padding :10px;
            color:white;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <?php
    include '../con.php';
    $id = $_GET['id'];
    $kueri = "SELECT * FROM lengkeng WHERE id = $id";
    $data = mysqli_query($con, $kueri);
    $array = mysqli_fetch_array($data);
    ?>
    <div class="container p">
        <!-- Default form register -->
        <form class=" border border-light p-5" action="editbibit.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
            <p class="h4 text-center mb-4">Update Bibit</p>

            <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <b><i class="fa fa-tree"> Nama</b></i> :
                    <input type="text" id="defaultRegisterFormFirstName" name="nama" value="<?php echo $array['Nama']; ?>" class="form-control">
                </div>
            </div>
            <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <b><i class="fa fa-camera"> Foto</b></i> :
                    <input required type="file" id="defaultRegisterFormFirstName" name="foto" value="<?php echo $array['foto']; ?>" class="form-control">
                </div>
            </div>
            <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <b><i class="fa fa-usd"> Harga</b></i> :
                    <input type="text" id="defaultRegisterFormFirstName" name="harga" value="<?php echo $array['harga']; ?>" class="form-control">
                </div>
            </div>
            <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <b><i class="fa fa-scissors"> Promo</b></i> :
                    <input type="text" id="defaultRegisterFormFirstName" name="promo" value="<?php echo $array['promo']; ?>" class="form-control">
                </div>
            </div>
            <input class="btn tombol my-4 btn-block" name="submit" type="submit">

            <!-- Social register -->

            <!-- Terms of service -->
        </form>
    </div>
    <!-- Default form register -->
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