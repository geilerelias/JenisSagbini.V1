<?php
session_start();
if (isset($_SESSION['usuario'])) {
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Registro de Proyectos</title>
    <link rel="stylesheet" href="style.css" />
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>

<body>
    <header>
        <nav>
            <h2>Login PHP, MySQL y AJAX</h2>
        </nav>
    </header>
    <div id="contenedor">
        <section class="widget">
            <h1>BIENVENIDO : <?php echo $_SESSION['usuario']; ?></h1>
            <hr>
            <img src="welcome.png" alt="">
            <p>Aquí te toca poner todo lo que que solo tus usuario registrados pueden ver. :)</p>
            <p><a href="logout.php">CERRAR SESIÓN</a></p>
        </section>
    </div>
    <footer>
        <p><img src="http://www.gnu.org/graphics/gplv3-127x51.png"></br>
            Esta aplicación está bajo la Licencia: <a href="http://www.gnu.org/licenses/gpl-3.0.en.html"
                target="_blank">GPL V3</a></br>
            Diseñado y Programado por: <a href="http://www.genesisvargasj.com">Genesis Vargas J</a></p>
    </footer>
</body>

</html>
<?php
} else {
    echo '<script>location.href = "index.php";</script>';
}
?>