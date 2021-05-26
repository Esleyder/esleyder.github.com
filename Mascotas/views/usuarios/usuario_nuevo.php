<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Crear una cuenta</title>
        <link href="../../web/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Crear una cuenta</h3></div>
                                    <div class="card-body">
                                        <form id="nuevo" name="nuevo" method="POST" action="../../index.php?c=usuarios&a=guarda" autocomplete="off" >
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Cedula</label><input class="form-control py-4" id="cedula" name="cedula" type="number" placeholder="ingresa la cedula" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Nombre</label><input class="form-control py-4" id="nombre_usuario" name="nombre_usuario" type="text" placeholder="ingrese su nombre" /></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Apellido</label><input class="form-control py-4" id="apellido" name="apellido" type="text" placeholder="ingrese su apellido" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Sexo</label><input class="form-control py-4" id="sexo" name="sexo" type="text" placeholder="Enter last name" /></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Telefono</label><input class="form-control py-4" id="telefono" name="telefono" type="text" placeholder="ingrese su telefono" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Edad</label><input class="form-control py-4" id="edad" name="edad" type="number" placeholder="ingrese su edad" /></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Direccion</label><input class="form-control py-4" id="direccion" name="direccion" type="text" placeholder="ingrese su Direccion" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Celular</label><input class="form-control py-4" id="celular" name="celular" type="text" placeholder="ingrese su celular" /></div>
                                                </div>
                                            </div>

                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Correo</label><input class="form-control py-4" id="correo" name="correo" type="text" aria-describedby="emailHelp" placeholder="ingrese su correo" /></div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Contraseña</label><input class="form-control py-4" id="contraseña" name="contraseña" type="password" placeholder="ingrese su contraseña" /></div>
                                                </div>
                                            </div>
      
 <button type="submit" id="guardar" name="guardar" class="btn btn-primary btn-block" >Create Account</button>


                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.html">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Esleyder 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>