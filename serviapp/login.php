<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id, active FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: page2.php");
         exit(); // Agregado para detener la ejecución del script después de redirigir
      } else {
         $error = "Contraseña y/o Usuario Invalidos";
      }
   }
?>
<html>
   
   <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      
      <title>Login</title>
   
      
   </head>
   
   <body bgcolor="#FFFFFF">
	
      <div align="center">
         <div style="width: 300px; border: solid 1px #333333;" align="left">
            <div style="background-color: #333333; color: #FFFFFF; padding: 3px;"><b>Login</b></div>
				
            <div style="margin: 30px">
               
               <form action="" method="post">
                  <label>Nombre de Usuario</label><input required placeholder="Nombre de usuario" type="text" name="username" class="box"/><br /><br />
                  <label>Contraseña</label><input required type="password" placeholder="Contraseña" name="password" class="box" /><br/><br />
                  <input type="submit" class="btn btn-primary" value="Iniciar Sesion"/><br />
               </form>
               
               <?php
                  if(isset($error)) {
                     echo '<div style="font-size: 11px; color: #cc0000; margin-top: 10px">' . $error . '</div>';
                  }
               ?>
					
            </div>
				
         </div>
			
      </div>

   </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>
