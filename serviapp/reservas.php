
<?php
    include('session.php');
    // Database connection parameters
    $host = "localhost";
    $username = "admin2";
    $password = "1234";
    $dbname = "lircayhub";

    // Create a database connection
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //


    if (isset($_POST['create'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $servicio = $_POST['servicio'];
        $queryInsert = "INSERT INTO reservas (nombre,email,telefono,fecha,servicio,hora) VALUES ('".$nombre."','".$email."','".$telefono."','".$fecha."','".$servicio."','".$hora."')";
        $result = mysqli_query($conn, $queryInsert); 
    }

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $queryDelete = "DELETE FROM reservas WHERE id = '$id'";
        $result = mysqli_query($conn, $queryDelete);
    }

    // Fetch all reservations
    $query = "SELECT * FROM reservas";
    $result = mysqli_query($conn, $query);

    $query = "SELECT * FROM reservas";
    $result = mysqli_query($conn, $query);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Site made with Mobirise Website Builder v5.8.4, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.8.4, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo-121x121.png" type="image/x-icon">
    <meta name="description" content="">
    
    
    <title>Reservas</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

    
    
<body>
    <section data-bs-version="5.1" class="menu cid-tA7CEUvCZ1" once="menu" id="menu1-1f">
        
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="index.php">
                            <img src="assets/images/logo-121x121.png" alt="" style="height: 3.8rem;">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7" href="index.php">LIRCAYHUB</a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item dropdown"><a class="nav-link link text-black text-primary dropdown-toggle display-4" href="index.php" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Contenidos<br></a><div class="dropdown-menu" aria-labelledby="dropdown-676"><a class="text-black text-primary dropdown-item display-4" href="page1.php">Registro</a><a class="text-black text-primary show dropdown-item display-4" href="page2.php">Servicios<br></a></div></li><li class="nav-item"><a class="nav-link link text-black text-primary show display-4" href="login.php"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>LOG - IN</a></li><li class="nav-item"><a class="nav-link link text-black text-primary show display-4" href="index.php"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>LOG - OUT</a></li></ul>
                    
                    
                </div>
            </div>
        </nav>

    </section>


    <section data-bs-version="5.1" class="form7 cid-tAd8v1uWgb" id="form7-1h">
        <div class="container">
        <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Reservas</strong></h3>
                <section class="table-container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Servicio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Iterar sobre los resultados de la consulta
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<td>' . $row['nombre'] . '</td>';
                                echo '<td>' . $row['email'] . '</td>';
                                echo '<td>' . $row['telefono'] . '</td>';
                                echo '<td>' . $row['fecha'] . '</td>';
                                echo '<td>' . $row['hora'] . '</td>';
                                echo '<td>' . $row['servicio'] . '</td>';
                                echo '<td>';
                                echo '<a href="editar_reserva.php?id=' . $row['id'] . '">Editar</a> ';
                                echo '<form method="post" action="">';
                                echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                                echo '<button type="submit" name="delete" onclick="return confirm(\'¿Estás seguro de que deseas borrar esta reserva?\')">Borrar</button>';
                                echo '</form>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </section>
    </section>
    
    <section data-bs-version="5.1" class="footer7 cid-tA7vYusjj8" once="footers" id="footer7-10">

    

<div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">
                        © LIRCAYHUB Copyright 2023 - All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
        <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script> 
</html>
                
