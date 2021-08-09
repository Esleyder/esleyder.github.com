<?php
$result="";
if(isset($_POST['submit'])){
    require 'phpmailer/PHPMailerAutoload.php';
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
    >Mensaje: '.$_POST['mensaje'].'</h1>';
    if(!$mail->send()){
        $result="Algo esta mal, por favor inténtelo de nuevo.";
    }
    else{
        $result="Gracias ".$_POST['nombre']." por contactarnos, espera la respuesta!";
    }
	 //header('Location:../index.php'); 
}
?>
<!-- formulario inicio -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bitcode Contacto</title>
	<link rel="icon" type="image/x-icon" href="../assets/Bitcode.ico" /> 
    <link rel="stylesheet" href="../css/estilos.css">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
	<br>
	<br>
	<br>
	<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contáctanos
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Nombre y Apellidos</label>
                            <input type="text" class="form-control" name="nombre" id="nombre"  aria-describedby="emailHelp" placeholder="Ingresa tu nombre y apellidos completo" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="email" class="form-control"  name="email" id="email" aria-describedby="emailHelp" placeholder="Ingresa tu correo" required>                           
                        </div>

                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" name="submit" class="btn btn-primary text-right">Enviar</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Dirección</div>
                <div class="card-body">
                    <p>Av. 6a # 18n 69 Oficina 87 Piso 3 Centro Comercial Shopping las Fuentes</p>
                    <p>Santiago de Cali</p>
                    <p>Colombia</p>
                    <p>Email : Soporte1@bitcode.com.co</p>
                    <p>Tel : 3232496114</p>
                </div>
            </div>
        </div>
    </div>
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



























