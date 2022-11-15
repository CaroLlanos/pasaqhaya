<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8" />
        <title>Pasaqhaya | Registro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="icon" href="assets/img/logo.png">

        <!-- App css -->
        <link href="assets/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/dashboard/assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/dashboard/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-start">
                            <a href="index.html" class="logo-dark">
                                <span><img src="assets/images/logo-dark.png" alt="" height="18"></span>
                            </a>
                            <a href="index.html" class="logo-light">
                                <span><img src="assets/images/logo.png" alt="" height="18"></span>
                            </a>
                        </div>

                        <!-- title-->
                        <h4 class="mt-0">Iniciar Sesión</h4>
                        <p class="text-muted mb-4">Ingresa tu emai y contraseña para acceder.</p>

                        <!-- form -->
                        <form action="#">
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email </label>
                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="Ingresar email">
                            </div>
                            <div class="mb-3">
                                <a href="pages-recoverpw-2.html" class="text-muted float-end"><small>Olvidaste contraseña?</small></a>
                                <label for="password" class="form-label">Contraseña</label>
                                <input class="form-control" type="password" required="" id="password" placeholder="Ingresar contraseña">
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                    <label class="form-check-label" for="checkbox-signin">Recordar contraseña</label>
                                </div>
                            </div>
                            <div class="d-grid mb-0 text-center">
                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-login"></i> Iniiar Sesión </button>
                            </div>
                            <!-- social-->
                            <div class="text-center mt-4">
                                <p class="text-muted font-16">Iniiar Sesión con</p>
                                <ul class="social-list list-inline mt-3">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                        <!-- end form-->

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            <p class="text-muted">Aún no tienes cuenta? <a href="pages-register-2.html" class="text-muted ms-1"><b>Registrarse</b></a></p>
                        </footer>

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
        <div class="auth-user-testimonial">
          <h2 class="mb-3">Pasaqhaya!</h2>
          <p class="lead">
            <i class="mdi mdi-format-quote-open"></i> Es un sazonador picante y acido con la mejor combinación
             de las especies de ají que se encuentra en la región! . <i class="mdi mdi-format-quote-close"></i>
          </p>
         <!--<p>- Hyper Admin User</p> -->
        </div>
        <!-- end auth-user-testimonial-->
      </div>
            <!-- end Auth fluid right content -->
        </div>
        <!-- end auth-fluid-->

        <!-- bundle -->
        <script src="assets/dashboard/assets/js/vendor.min.js"></script>
        <script src="assets/dashboard/assets/js/app.min.js"></script>

    </body>

</html>