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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPHONE WORDL</title>
    <link rel="stylesheet" href="../mitienda - copia/assets/css/index.css">
    <link rel="stylesheet" href="../mitienda - copia/assets/css/normalize.css">
    <link rel="stylesheet" href="../mitienda - copia/assets/css/Productos.css">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;0,900;1,700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>


<body>
    <header class="site-header inicio" style="height: 150px;">
        <div class="contenedor">
            <div class="barra-img">
                <a href="index.html">
                    <div class="barra">
                        <img src="../mitienda - copia/assets/img/logo/logo.JPG" height="78" width="200" alt="" style="border-radius: 50%;">


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




    <main class="contenedor-seccion" class="fw-300 centrar-texto">
        <h2 class="fw-300 centrar-texto" style=" font-family: serif;">Catalogo de Productos.</h2>

        <div class="iconos-nosotros" class="fw-300 centrar-texto">
            <div class="icono">
                <div class="img"><img src="assets/img/accesorios/Apple Watch Series 5.png" width="225px" height="225px"></div>
                <p class="parrafo1">Apple Watch Series 5</p>
                <p class="parrafo1">$8.999,00</p>
                <a href="!Phone_11_Pro_Max.html" class="boton">Ver Producto</a>
            </div>
            <hr>

            <div class="icono">
                <div class="img"><img src="assets/img/accesorios/apple-tv.png" width="225px" height="225px"></div>
                <p class="parrafo1">Apple TV HD</p>
                <p class="parrafo1">$149,00</p>
                <a href="!Phone_XR.html" class="boton">Ver Producto</a>
            </div>
            <hr>
            <div class="icono">
                <div class="img"><img src="assets/img/accesorios/airpods_apple.png" width="225px" height="225px"></div>
                <p class="parrafo1">AirPods Pro</p>
                <p class="parrafo1">$249,99</p>
                <a href="!Phone_XS_Max.html" class="boton">Ver Producto</a>
            </div>
        </div>
        <br>
        <br>

        <div class="iconos-nosotros">
            <div class="icono">
                <div class="img"><img src="assets/img/accesorios/CARGADOR-IPH-470x353.png" width="225px" height="225px"></div>
                <p class="parrafo1">Cargador iphone</p>

                <p class="parrafo1">$31.67</p>
                <br>
                <a href="!Phone_11_Pro_Max.html" class="boton">Ver Producto</a>
            </div>
            <hr>

            <div class="icono">
                <div class="img"><img src="assets/img/accesorios/audifonos-apple-iphone-7-plus.png" width="240px" height="225px"></div>
                <p class="parrafo1">Audifonos apple iphone</p>
                <p class="parrafo1">$263.52</p>
                <a href="!Phone_XR.html" class="boton">Ver Producto</a>
            </div>
            <hr>
            <div class="icono">
                <div class="img"><img src="assets/img/accesorios/apple_watch-black.png" width="210px" height="225px"></div>
                <p class="parrafo1">Apple Watch Nike Serie 3</p>
                <p class="parrafo1">$5,299.00</p>
                <a href="!Phone_XS_Max.html" class="boton">Ver Producto</a>
            </div>
        </div>
        <br>
        <br>
</main>


    <footer class="fondo">
        <p>Copyrigth &copy; 2019 IPHONE WORDL | Todos los derechos reservados</p>
    </footer>

</body>

</html>