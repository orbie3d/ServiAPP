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

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the reservation ID from the URL
        $id = $_GET["id"];

        // Get the updated values from the form
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        $servicio = $_POST["servicio"];

        // Update the reservation in the database
        $query = "UPDATE reservas SET nombre='$nombre', email='$email', telefono='$telefono', fecha='$fecha', hora='$hora', servicio='$servicio' WHERE id='$id'";
        $result = mysqli_query($conn, $query);

        // Check if the update was successful
        if ($result) {
            echo "Reserva actualizada correctamente.";
        } else {
            echo "Error al actualizar la reserva: " . mysqli_error($conn);
        }
    } else {
        // Get the reservation ID from the URL
        $id = $_GET["id"];

        // Query to retrieve the reservation details
        $query = "SELECT * FROM reservas WHERE id='$id'";
        $result = mysqli_query($conn, $query);

        // Check if the reservation exists
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $nombre = $row["nombre"];
            $email = $row["email"];
            $telefono = $row["telefono"];
            $fecha = $row["fecha"];
            $hora = $row["hora"];
            $servicio = $row["servicio"];
        } else {
            echo "No se encontró la reserva.";
            exit;
        }
    }
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
    <title>Editar Reserva</title>
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
</head>

<body>
    <section data-bs-version="5.1" class="form7 cid-tAd8v1uWgb" id="form7-1h">
        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Editar Reserva</strong></h3>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8 mx-auto mbr-form">
                    <form method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $telefono; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="fecha">Fecha</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $fecha; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="hora">Hora</label>
                                    <input type="time" class="form-control" id="hora" name="hora" value="<?php echo $hora; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="servicio">Servicio</label>
                                    <input type="text" class="form-control" id="servicio" name="servicio" value="<?php echo $servicio; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>
</body>
</html>

<?php
    // Close the database connection
    mysqli_close($conn);
?>
