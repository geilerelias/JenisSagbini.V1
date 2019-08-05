<?php
include 'config.inc.php';
?>

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

        <nav class="navbar navbar-expand-lg  bg-dark">
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
                            class="nav-link text-white pt-0 ">Inicio</a>
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
                            class="nav-link text-white  pt-0 active">Artículos</a>
                    </li>
                    <li class="nav-item text-white">
                        <a style="height: 30px;cursor: pointer;" href="servicios.php"
                            class="nav-link text-white  pt-0">Servicios</a>
                    </li>
                    <li class="nav-item text-white ">
                        <a style="height: 30px;cursor: pointer;" href="contacto.php"
                            class="nav-link text-white  pt-0">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
   
    <div class="container">
        <h4 class="font-weight-light text-center text-lg-left mt-4 mb-0">Mis Artículos Publicados en revistas.</h4>
        <hr class="mt-2 mb-5">
        <div class="list-group">
            <a href="http://memoriascimted.com/wp-content/uploads/2017/01/La-investigaci%C3%B3n-aplicada-a-la-sociedad-de-la-informaci%C3%B3n.pdf" class="list-group-item list-group-item-action flex-column list-group-item-light align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1 ">
                        SISTEMA DE DIALOGO HUMANO ROBOT UTILIZANDO RAZONAMIENTO BASADO EN CASOS. LA INVESTIGACION APLICADA EN LA SOCIEAD DE LA INFORMACION INNOVACION Y DESARROLLO TECNOLÓGICO 
                    </h5>
                    <small>En: Colombia  ISBN: 9789585660847  ed: CIMTED , v. , p.38 - 45  1 ,2018</small>
                </div>
                <p class="mb-2 mt-1">
                    Socializado en el CONGRESO INTERNACIONAL SOBRE TECNOLOGÌA E INNOVACIÒN+CIENCIA E INVESTIGACIÓN. BUENOS AIRES, ARGENTINA. 2018.
                </p>
            </a>
            <br/>
            <a href="http://eventossinndetec.com/#/revista/inndecomm/actual" class="list-group-item list-group-item-action flex-column list-group-item-light align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">
                        EMPRENDIMIENTO DIGITAL "SOMOS UNO" PARA LA GESTION DEL SEGUIMIENTO Y CONSOLIDACION DE IGLESIAS CRISTIANAS. REVISTA INNDECOM. 
                    </h5>
                    <small class="text-muted mt-2">En Colombia ISSN-E 2665-2358 Ed: SERVICIO NACIONAL DE APRENDIZAJE “SENA”. Vol.1. p.81-88. 2018.</small>
                </div>
                <p class="mb-2 mt-1">
                    Socializado en el III SIMPOSIO DE INVESTIGACIÓN, INNOVACIÓN Y DESARROLLO TECNOLÓGICO. VALLEDUPAR, COLOMBIA. 2018.
                </p>
            </a>
            <br/>
            <a href="#" class="list-group-item list-group-item-action flex-column list-group-item-light align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">
                        HABILIDADES GERENCIALES PARA EL DESARROLLO DE INGENIEROS. DESARROLLO E INNOVACION TECNOLOGICA "UN APRENDIZAJE INVESTIGATIVO. 
                    </h5>
                    <small class="text-muted">
                        En: Colombia  ISBN: 978-958-5493-01-8  ed: UNIVERSIDAD POPULAR DEL CESAR , v. , p.49 - 54  1 ,2018
                    </small>
                </div>
                <p class="mb-2 mt-1"></p>
            </a>
            <br/>
            <a href="http://eventossinndetec.com/#/memorias" class="list-group-item list-group-item-action flex-column list-group-item-light align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">
                        ESTILOS DE APRENDIZAJE: CONDICIONES PEDAGÓGICAS PRESENTES EN EL PROCESO FORMATIVO EN LOS APRENDICES DEL PROGRAMA CONTABILIDAD Y FINANZAS DEL COMM VALLEDUPAR. MEMORIAS DEL II SIMPOSIO DE INVESTIGACION, INNOVACION Y DESARROLLO TECNOLOGICO .
                    </h5>
                    <small class="text-muted">
                        En: Colombia  ISBN: 2590-6151  ed: SERVICIO NACIONAL DE APRENDIZAJE SENA , v. , p.36 - 40  1 ,2017
                    </small>
                </div>
                <p class="mb-2 mt-1 ">
                    Socializado en el II SIMPOSIO DE INVESTIGACIÓN, INNOVACIÓN Y DESARROLLO TECNOLÓGICO. VALLEDUPAR, COLOMBIA. 2017.
                </p>
            </a>
            <br/>
            <a href="http://eventossinndetec.com/#/memorias" class="list-group-item list-group-item-action flex-column list-group-item-light align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">
                        SISTEMA DE INFORMACIÓN PARA LA GESTIÓN DE LOS PROCESOS DE LA EMPRESA SERVIFLASH DEL VALLE, EN LA CIUDAD DE VALLEDUPAR" MEMORIAS DE SIMPOSIO DE INVESTIGACIÓN, INNOVACIÓN Y DESARROLLO TECNOLOGICO . 
                    </h5>
                    <small class="text-muted">
                        En: Colombia  ISBN: 2590-6151  ed: SERVICIO NACIONAL DE APRENDIZAJE SENA, v. , p.82 - 88  ,2017
                    </small>
                </div>
                <p class="mb-2 mt-1">
                    Socializado en el II SIMPOSIO DE INVESTIGACIÓN, INNOVACIÓN Y DESARROLLO TECNOLÓGICO. VALLEDUPAR, COLOMBIA. 2017.
                </p>
            </a>
            <br/>
            <a href="http://emprendedoresafide2016.com.uy/trabajos/" class="list-group-item list-group-item-action flex-column list-group-item-light align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">
                        MODELO DE NEGOCIO A PARTIR DE LA PRODUCCION Y COMERCIALIZACION DE HUMUS INNOVACION Y ECOSISTEMA EMPRENDEDOR: CONSTRUYENDO UNA SOCIEDAD EMPRENDEDORA . 
                    </h5>
                    <small class="text-muted mt-2">
                        En: Colombia  ISBN: 978-8408-317-7  ed: ANDAVIRA EDITORA S.L. , v. , p.243 - 248  ,2017 
                    </small>
                </div>
                <p class="mb-1">
                    Socializado en el IV CONGRESO DE EMPRENDIMIENTO en MONTEVIDEO, URUGUAY. 2016.
                </p>
            </a>
        </div>
        <h4 class="font-weight-light text-center text-lg-left mt-4 mb-0">Listado de Artículos.</h4>

        <hr class="mt-2 mb-5">

        <div class="row text-center text-lg-left">
            <?php
        $db = new Conect_MySql();
        $sql = "select*from tbl_documentos";
        $query = $db->execute($sql);
        while ($datos = $db->fetch_row($query)) {?>
            <div class="col-lg-4 col-md-4 col-6">
                <div href="#" class="d-block mb-4 h-100">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5 class="card-title"> <?php echo $datos['titulo']; ?></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?php echo $datos['descripcion']; ?></p>
                            <iframe class="embed-responsive"
                                src="archivos/<?php echo $datos['nombre_archivo']; ?>"></iframe>
                        </div>
                        <div class="card-footer">
                            <span class="btn-group-sm">
                                <button class="btn btn-dark bmd-btn-fab">
                                    <a href="archivos/<?php echo $datos['nombre_archivo']; ?>"
                                        download="Reporte2Mayo2010" class="text-white">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </button>
                                <button class="btn btn-dark bmd-btn-fab"
                                    onclick="mostrarArchivo('archivos/<?php echo $datos['nombre_archivo']; ?>');">
                                    <a class="text-white">
                                        <i class="fas fa-book-reader"></i>
                                    </a>
                                </button>
                            </span>

                        </div>
                    </div>

                </div>

            </div>

            <?php }?>

        </div>

    </div>




    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg "  id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Lectura </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <iframe style="height: 80vh" class="embed-responsive" id="iframeArchivos"></iframe>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


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
        $("#btn-enviar").click(function(event) {
            Swal.fire("Good job!", "You clicked the button!", "success");
        });


    });

    function mostrarArchivo(ruta) {
        $('#iframeArchivos').attr('src', ruta);
        $("#exampleModal").modal("show");
    }
    </script>

</body>

</html>