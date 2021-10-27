<html>
<head>
        <meta charset="utf-8">
        <title>Ana Leal - Registro</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        
    </head>

    <body>
        <!-- Insertar navbar -->
        <?php
        include 'plantillas/navbar.php'
        ?>
        <!-- Insertar navbar -->

         <!-- Page Header Start -->
         <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Registro de Usuario</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        
        <!-- Registro Start -->
        
        <div class="contact" style="margin-bottom: 90px;">
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form action="fun/registrousuario.php" method="post">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu Nombre" required="required" data-validation-required-message="Por favor ingresa tu Nombre" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Ingresa tu Nombre de Usuario" required="required" data-validation-required-message="Por favor ingresa tu Nombre de ususario" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu Correo" required="required" data-validation-required-message="Por favor ingresa tu Correo" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    
                                    <div class="control-group">
                                        <input type="pass" class="form-control" id="pass" name="pass" placeholder="Ingresa tu Contraseña" required="required" data-validation-required-message="Por favor ingresa tu contrasena" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="tel" name="tel" placeholder="Ingresa tu Telefono" required="required" data-validation-required-message="Por favor ingresa tu Telefono" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Ingresa tu nombre de Direccion" required="required" data-validation-required-message="Por favor ingresa tu Direccion" />
                                        <input type="hidden" class="form-control" id="rol" name="rol" value="2" required="required" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div>
                                        <input class="btn" type="submit" id="sendMessageButton" class="submit" value="Registrarse">
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Insertar footer -->
        <?php
        include 'plantillas/footer.php'
        ?>
        <!-- Insertar footer -->

    </body>

</html>