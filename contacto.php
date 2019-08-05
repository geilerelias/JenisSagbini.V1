<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Jenis Sagbini</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <!--sweet aler2-->
    <link rel="stylesheet" href="css/sweetalert2.min.css" />
    <!-- Bootstrap CSS -->

    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
    .navbar {
        box-shadow: none !important;
    }

    footer a {
        cursor: pointer !important;
        color: white;
        text-decoration: none !important;
        -o-transition: all 0.2s ease-in-out !important;
        transition: all 0.2s ease-in-out;
    }

    footer a:hover {
        color: white;
        font-size: 1.1rem;
    }
    </style>
</head>

<body>
    <header id="header" class="">
        <nav class="navbar navbar-expand-lg bg-dark">
            <button class="navbar-toggler text-white" type="button" data-toggle="drawer" data-target="#dw-s2"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white">
                    <i class="fas fa-bars"></i>
                </span>
            </button>

            <a class="navbar-brand" href="#">
                <div class=" text-white justify-content-rigth ">
                    <!--style="border-bottom: 6px solid red;"-->
                    <!--
                            <img src="img/firma.png" height="60" alt="Jenis Sagbini">
                            <div class="mt-1 text-uppercase display-4">Jenis Sagbini</div>
                            <hr class="bg-white col-12 " style="margin: 0" >
                            <div class="text-justify" style="font-size:18px;letter-spacing: 0.2em">Proyectos & Ingeniería</div>
                            -->
                </div>
            </a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <!--espacio en blanco -->
                    <li class="nav-item text-white">

                        <a style=" cursor: pointer;" href="index.php" class="nav-link text-white  ">Jenis Sagbini <span
                                class="text-lowercase text-capitalize">- Proyectos & Ingenieria</span> </a>

                    </li>
                    </li>
                </ul>
                <ul class="nav nav-tabs my-2 my-lg-0">
                    <li class="nav-item text-white">
                        <a style="height: 30px; cursor: pointer;" href="index.php"
                            class="nav-link text-white pt-0">Inicio</a>
                    </li>
                    <li class="nav-item text-white">
                        <a style="height: 30px; cursor: pointer;" href="quien-soy.php"
                            class="nav-link text-white pt-0">¿Quién soy?</a>
                    </li>
                    <li class="nav-item text-white">
                        <a style="height: 30px;cursor: pointer;" href="proyectos.php"
                            class="nav-link text-white  pt-0">Proyectos</a>
                    </li>
                    <li class="nav-item text-white">
                        <a style="height: 30px;cursor: pointer;" href="articulos.php"
                            class="nav-link text-white  pt-0">Artículos</a>
                    </li>
                    <li class="nav-item text-white">
                        <a style="height: 30px;cursor: pointer;" href="servicios.php"
                            class="nav-link text-white  pt-0">Servicios</a>
                    </li>
                    <li class="nav-item text-white ">
                        <a style="height: 30px;cursor: pointer;" href="contacto.php"
                            class="nav-link text-white  pt-0 active">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- /header -->
    <div class="row">
    <div class="col-sm-3 col-md-4 col-lg-2  d-sm-block d-none big-img" style="background-image: url('img/4.jpg'); background-position: -15em; box-shadow: 2px 0px 7px 0px  rgba(50, 50, 50, 0.75);transform: scaleX(-1);">
    </div>
    <!--Section: Contact v.2-->
    <section class="m-4 col-sm-9">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">C O N T A C T O</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Tienes alguna pregunta? Por favor, no dudes en contactarte con nosotros
            directamente. 
            Te ayudaremos.</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form"  method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0 form-group">
                                <label class="bmd-label-floating" for="name" class="">Escribe tu nombre y apellido</label>
                                <input type="text" id="name" name="name" class="form-control">
                                
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0 form-group">
                                <label class="bmd-label-floating" for="email" class="">Escribe tu e-mail</label>
                                <input type="email" id="email" name="email" class="form-control">
                                
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    

                    <!--Grid row-->
                    <div class="row mt-5" >

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form form-group">
                                 <label class="bmd-label-floating" for="message">Deja un corto mensaje</label>
                                <textarea type="text" id="message" name="message" rows="2"
                                    class="form-control md-textarea"></textarea>
                               
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="text-center text-md-left">
                    <button class="btn btn-raised btn-dark" id="btn-enviar">Enviar</button>
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Ave. Simón Bolívar No.6-04 Valledupar, Colombia</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+ 57 3002900321</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>contacto@jenissagbini.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </section>
    <!--Section: Contact v.2-->
    
</div>
    <!-- Footer -->
    <footer class="page-footer font-small bg-dark">
        <div class="text-white" style="background-color: black">
            <div class="container">
                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">
                            ¡Conéctate con nosotros en las redes sociales!
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!-- Facebook -->
                        <a class="fb-ic">
                            <i class="fab fa-facebook-f white-text mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic">
                            <i class="fab fa-twitter white-text mr-4"> </i>
                        </a>
                        <!-- Google +-->
                        <a class="gplus-ic">
                            <i class="fab fa-google-plus-g white-text mr-4"> </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic">
                            <i class="fab fa-linkedin-in white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row-->
            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5 text-white">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">jenis sagbini</h6>
                    <hr class="bg-white mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;" />
                    <p><i> ¡Haciendo a la Gente Exitosa en un mundo cambiante!.</i></p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Servicios</h6>
                    <hr class="bg-white mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;" />
                    <p>
                        Desarrollo Web
                    </p>
                    <p>
                        Auditoría de Sistemas
                    </p>
                    <p>
                        Marketing
                    </p>
                    <p>
                        Emprendimiento
                    </p>
                    <p>
                        Capacitaciones
                    </p>
                    <p>
                        Investigación
                    </p>
                    <p>
                        Asesorías
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Enlaces Útiles</h6>
                    <hr class="bg-white mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;" />
                    <p>
                        <a href="#!">¿Quién soy?</a>
                    </p>
                    <p>
                        <a href="#!">Proyectos</a>
                    </p>
                    <p>
                        <a href="#!">Articulos</a>
                    </p>
                    <p>
                        <a href="#!">Servicios</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contacto</h6>
                    <hr class="bg-white mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;" />
                    <p>
                        <i class="fas fa-home mr-3"></i> Av. Simón Bolívar No. 6-04
                        Valledupar, Co
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> contacto@jenissagbini.com
                    </p>
                    <p><i class="fas fa-phone mr-3"></i> +57 300 290 0321</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class=" text-center py-3 text-white" style="background:#212121">
            © 2018-2019 Copyright:
            <a href=""> jenissagbini.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap-material-design.js"></script>
    <!--sweet aler2-->
    <script src="js/sweetalert2.min.js"></script>
    <script>
    $(document).ready(function() {
        $("body").bootstrapMaterialDesign();
        
    
        function submitForm(){
            // Initiate Variables With Form Content
            var name = $("#name").val();
            var email = $("#email").val();
            var message = $("#message").val();
         $.ajax({
                type: "POST",
                url: "processMail.php",
                data: "name=" + name + "&email=" + email + "&message=" + message,
            })
            .done(function(response) {
                console.log(response);
                Swal.fire({
                    type: response.tipo,
                    title: response.titulo,
                    text: response.mensaje,
                }).then((result) => {
                  if (result.value) {
                        if(response.estado==true){
                            $("#contact-form").submit();
                        }
                  }
                })
                
            })
            .fail(function() {
                Swal.fire({
                    type: 'error',
                    title: 'Error de conexion',
                    text: 'No se puede conectar con el servidor',
                })
            })
            .always(function() {
                console.log( "complete" );
            });
           
        }
        
        $("#btn-enviar").click(function(event) {
          submitForm();
        });
    });
    </script>
</body>

</html>