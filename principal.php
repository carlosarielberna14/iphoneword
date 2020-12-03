<?php 

 include('assets/data/conexion.php');

 $obj = new Conexion;

 $res = $obj->buscarProducto();

 $temp = array();

 $temp = $res;

 
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="assets/css/">
    <script src="https://kit.fontawesome.com/9d6315ac3e.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Iphone Wordl</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/Productos.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;0,900;1,700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="site-header inicio" style="height: 150px;">
        <div class="contenedor">
            <div class="barra-img">
                <div class="barra">
                    <img src="assets/img/logo/logo.JPG" height="78" width="200" alt="" style="border-radius: 50%;">


                    <nav class="navegacion">
                        <a href="Accesorios.html">Accesorios</a>
                        <a href="productos.php">Productos</a>
                        <a href="index.php">Metodos de pago</a>
                        <a href="Blog.html">Blog</a>
                        <a href="contacto.html">Contacto</a>
                    </nav>
                </div>

            </div>


        </div>

        </div>
    </header>


    <section class="contenedor-seccion">
        <h2 class="fw-300 centrar-texto" style=" font-family: serif;"> Explora nuestros nuevos diseños </h2>

        <div class="iconos-nosotros" style="max-width: max-content;">
            <div class="icono">
           
                <div class="img"><img src=<?php echo $temp[0]['url_img'] . ' width="250"';?>></div>
                <br>
                <p class="parrafo1"><?php echo $temp[0]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[0]['precio_compra'];?></p></p>
                <a href="!Phone_11_Pro_Max.html" class="boton">Ver Producto</a>
            </div>
            <hr>

            <div class="icono">
           
                <div class="img"><img src=<?php echo $temp[1]['url_img'] . ' width="250"';?>></div>
                <br>
                <p class="parrafo1"><?php echo $temp[1]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[1]['precio_compra'];?></p></p>
                <a href="!Phone_XR.html" class="boton">Ver Producto</a>
            </div>
            <hr>
            <div class="icono">
                <div class="img"><img src=<?php echo $temp[2]['url_img'] . ' width="250"';?>></div>
                <br>
                <p class="parrafo1"><?php echo $temp[2]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[2]['precio_compra'];?></p></p>
                <a href="!Phone_XS_Max.html" class="boton">Ver Producto</a>
            </div>
        </div>

        <br>
        <br>
    </section>


    <footer class="fondo">
        <p>Copyrigth &copy; 2020 IPHONEWORDL | Todos los derechos reservados</p>
    </footer>

</body>

</html>