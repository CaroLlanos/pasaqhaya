<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Pasaqhaya | Home</title>

    <link rel="icon" href="assets/img/logo.png">
    <link rel="stylesheet"  type="text/css" href="css/styles.css">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body id="top">
    <!--barra de navegacion-->
    <?php include("cabecera.php"); ?>

    <!--Imagen principal-->
    <div class="masthead">
        <div>
            <div>
                <div class="descripcion">
                    <h1>Pasaqhaya</h1>
                    <h2>Pequena descripcion de lo que es Pasaqhaya</h2>
                    <a class="btn-main" href="catalogo.php">Con Hambre?</a>
                </div>
            </div>
        </div>
    </div>
    <!--Concepto de Pasaqhaya-->
    <section>
        <div class="descripcion">
            <div>
                <h2>Pasos para disfrutar de Pasaqhaya</2>
            </div>
            <div>
                <p>Nunca antes fue tán fácil y divertido darle sabor a tus comidas. Solo destapa, exprime y
                    date gusto con los sabores naturales.</p>
            </div>
        </div>

        <div class="pasos">
        <div class="paso1">
            <div><img src="assets/img/paso1.png">
            </div>
            <div>
                <h2>Paso 1:</h2> 
            </div>
            <div>
                <h2>Prepara tu platillo preferido</h2>
            </div>
        </div>
        <div class="paso2">
            <div><img src="assets/img/paso1.png">
            </div>
            <div>
                <h2>Paso 2:</h2> 
            </div>
            <div>
                <h2>Escoge tu Pasaqhaya favorito</h2>
            </div>
        </div>
        <div class="paso3">
            <div><img src="assets/img/paso3.png">
            </div>
            <div>
                <h2>Paso 3:</h2> 
            </div>
            <div>
                <h2>Agrega la cantidad que desees</h2>
            </div>
        </div>
        <div class="paso4">
            <div><img src="assets/img/paso4.png">
            </div>
            <div>
                <h2>Paso 4:</h2> 
            </div>
            <div>
                <h2>Disfruta</h2>
            </div>
        </div>
        </div>
    </section>

    <!--Productos destacados-->
    <section>
        <div>
            <div>
                <div class="descripcion">
                    <h2>Productos Destacados</h2>
                </div>
            </div>
        </div>

        <div class="products-list" id="space-list">
            <div class="product-box">
                        <a href="">
                            <div class="product">
                                <img src="assets/img/onion2.png">
                                <div class="detail-title">Producto 1</div>
                                <div class="detail-description">descripcion del producto</div>
                                <div class="detail-price">10.00 bs</div>
                            </div>
                        </a>
                    </div>
                    <div class="product-box">
                        <a href="">
                            <div class="product">
                                <img src="assets/img/onion2.png">
                                <div class="detail-title">Producto 2</div>
                                <div class="detail-description">descripcion del producto</div>
                                <div class="detail-price">10.00 bs</div>
                            </div>
                        </a>
                    </div>
                    <div class="product-box">
                        <a href="">
                            <div class="product">
                                <img src="assets/img/onion2.png">
                                <div class="detail-title">Producto 3</div>
                                <div class="detail-description">descripcion del producto</div>
                                <div class="detail-price">precio del producto 10.00 bs</div>
                            </div>
                        </a>
                    </div>
        </div>

        <div>
            <div>
                <a class="btn-main" href="catalogo.php">Todos Nuestros Productos</a>
            </div> 
        </div>
    </section>
    <!--Recetas destacadas-->
    <section>
        <div>
            <div>
                <div class="descripcion">
                    <h2>Recetas Destacadas</h2>
                </div>
            </div>
        </div>
        <div class="products-list" id="">
            <div class="product-box">
                        <a href="">
                            <div class="product">
                                <img src="assets/img/onion2.png">
                                <div class="detail-title">Receta 1</div>
                                <div class="detail-description">descripcion del producto</div>
                            </div>
                        </a>
                    </div>
                    <div class="product-box">
                        <a href="">
                            <div class="product">
                                <img src="assets/img/onion2.png">
                                <div class="detail-title">Receta 2</div>
                                <div class="detail-description">descripcion del producto</div>
                            </div>
                        </a>
                    </div>
                    <div class="product-box">
                        <a href="">
                            <div class="product">
                                <img src="assets/img/onion2.png">
                                <div class="detail-title">Receta 3</div>
                                <div class="detail-description">descripcion del producto</div>
                            </div>
                        </a>
                    </div>
        </div>

        <div>
            <div>
                <a class="btn-main" href="recetas.php">Todas Nuestras Recetas</a>
            </div> 
        </div>
    </section>

<?php include("pie.php"); ?>
    <!--Pie de pagina-->
</body>

</html>