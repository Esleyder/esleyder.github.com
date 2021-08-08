<?php
$result="";
if(isset($_POST['submit'])){
    require 'PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='esleyder2031@gmail.com';
    $mail->Password='Esleyder18$';
    $mail->setFrom($_POST['email'],$_POST['nombre']);
    $mail->addAddress('esleyder2031@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['nombre']);
    $mail->isHTML(true);
    $mail->Subject='Enviado por '.$_POST['nombre'];
    $mail->Body='<h1 align=center>Nombre: '.$_POST['nombre'].'<br>Email: '.$_POST['email'].'<br
    >Mensaje: '.$_POST['mensaje'].'<br>Telefono: '.$_POST['telefono'].'</h1>';
    if(!$mail->send()){
        $result="Algo esta mal, por favor inténtelo de nuevo.";
    }
    else{
        $result="Gracias ".$_POST['nombre']." por contactarnos, espera la respuesta!";
    }
	 header('Location:index.php'); 
}
?>	<!-- formulario inicio -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bitcode Contacto</title>
	<link rel="icon" type="image/x-icon" href="../assets/Bitcode.ico" /> 
    <link rel="stylesheet" href="../css/estilos.css">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>
   <header class="header">
       <div class="container">
           <div class="logo">
               <h1>Bitcode</h1>
           </div>
           <nav class="menu">
               <ul>
                   <li><a href="../index.html">Inicio</a></li>
                   <li><a href="#">Empresa <i class="icon-abajo2"></i></a>
                   <ul class="submenu">
                       <li><a href="#">
                            Cultura Corporativa
                       </a></li>
                       <li><a href="#">
                           Noticias
                       </a></li>
                       <li><a href="#">
                           Casos De Exito
                       </a></li>
					      <li><a href="#">
                           Nuestros Aliados
                       </a></li>
                   </ul>
                   </li>
                   <li><a href="contacto.php">Contacto</a></li>
                   <li><a href="#">Servicios <i class="icon-abajo2"></i></a>
                   <ul class="submenu">
                       <li><a href="servicios.html">
                           Soporte tecnico
                       </a></li>
                       <li><a href="desarollo.html">
                           Desarollo
                       </a></li>
                   </ul>
                   </li>
                   
               </ul>
           </nav>
       </div>
   </header>
 
    <div class="portada">
    </div>
			 <div class="container-boton">
        <a href="https://wa.me/987654321?text=Quiero%20realizar%20un%20proyecto%20web%20php" target="_blank">
            <img class="boton" src="../assets/icono.png" alt="">
        </a>
    </div>
	 <footer>

        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="../assets/prueba.png" alt="">
                </div>
                <div class="terms">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit cum cumque velit libero officiis quam doloremque reprehenderit quae corporis! Delectus architecto officia praesentium atque laudantium, nam deleniti sapiente deserunt.</p>
                </div>
            </div>
            <div class="box__footer">
                <h2>Soluciones</h2>
                <a href="https://www.google.com">App Desarrollo</a>
                <a href="#">App Marketing</a>
                <a href="#">IOS Desarrollo</a>
                <a href="#">Android Desarrollo</a>
            </div>

            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="#">Acerca de</a>
                <a href="#">Trabajos</a>
                <a href="#">Procesos</a>
                <a href="#">Servicios</a>              
            </div>

            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
                <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
            </div>

        </div>

        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados © 2021 <b>MagtimusPro</b></p>
        </div>
    </footer>
  
	
</body>
</html>



























