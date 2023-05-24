
<?php



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
            
                     <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item dropdown"><a class="nav-link link text-black text-primary dropdown-toggle display-4" href="index.php" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Contenidos<br></a><div class="dropdown-menu" aria-labelledby="dropdown-676"><a class="text-black text-primary dropdown-item display-4" href="page1.php">Registro</a><a class="text-black text-primary show dropdown-item display-4" href="page2.php">Servicios<br></a><a class="text-black text-primary show dropdown-item display-4" href="reservas.php">Reservas<br></a></div></li><li class="nav-item"><a class="nav-link link text-black text-primary show display-4" href="login.php"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>LOG - IN</a></li><li class="nav-item"><a class="nav-link link text-black text-primary show display-4" href="index.php"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>LOG - OUT</a></li></ul>
            
                </div>
            </div>
        </nav>

    </section>


    <section data-bs-version="5.1" class="form7 cid-tAd8v1uWgb" id="form7-1h">
        <div class="container">
        <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Servicio Automóviles</strong></h3>
                
            </div>
            
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                    <form method="POST" class="mbr-form form-with-styler mx-auto" data-form-title="Form Name">
                        <input type="hidden" name="email" data-form-email="true" value="Xvl5unI7foT8NlHvKEs4zDklz/ATghygK+fxD7RCXeM6IAYU22dGSD0z6dIpOSG/WJX5e/gUQnabV8Bt9ZvlApL/T4tSf0K1yaCJxBDMdBLGA91AWfvux/onm8xY7efH">
                        <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">
                            Completa los datos</p>
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Enviado exitosamente</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                Oops...! some problem!
                            </div>
                        </div>
                        <!--SERVICIO-->
                            <div class="dragArea row">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                                    <input required type="text" name="nombre" placeholder="Nombre Completo" data-form-field="name" class="form-control" value="" id="name-form7-1h">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
                                    <input required type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" value="" id="email-form7-v">
                                </div>
                                <div data-for="telefono" class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                                    <input required type="telefono" name="telefono" placeholder="Teléfono" data-form-field="telefono" class="form-control" value="" id="telefono-form7-1h">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="fecha">
                                    <input required type="date" name="fecha" placeholder="" data-form-field="fecha" class="form-control" value="" id="fecha-form7-1h">
                                </div>
                                <div data-for="hora" class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                                    <select name="hora" class="form-select" aria-label="Default select example">
                                        <option selected>Selecciona una Hora</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:00">12:00</option>
                                        <option value="15:00">15:00</option>
                                        <option value="16:00">16:00</option>
                                        <option value="16:30">16:30</option>
                                        <option value="17:00">17:00</option>
                                        <option value="17:30">17:30</option>
                                    </select> 
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="servicio">
                                    <p>Servicio Seleccionado</p>
                                    <input readonly value="Limpieza profunda y lavado $35.000" type="text" name="servicio" placeholder="" data-form-field="servicio" class="form-control" value="" id="servicio-form7-1h">
                                </div>
                                <div class="col-auto mbr-section-btn align-center">
                                    <input type="submit" class="btn btn-primary display-4" name="create" value="Enviar"></input>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
    </section>
    
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
</body>

</html>
                
