<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Pasaqhaya | Catalogo</title>

    <link rel="icon" href="assets/img/logo.png">
    <link rel="stylesheet"  type="text/css" href="css/styles.css">

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body id="top">
    <!--barra de navegacion-->
    <?php include("cabecera.php"); ?>

        <div class="main-content">
            <div class="content-page">
                <div class="title-section">Productos</div>
                <div class="products-list" id="space-list">

                    <script type="text/javascript">
                        $(document).ready(function(){
                            $.ajax({
                                url: 'services/get_all_products.php',
                                type: 'GET',
                                data: {},
                                success:function(data) {
                                    //prueba
                                    console.log("esta entrando normal");
                                    console.log(data);
                                    //var lista= jQuery.parseJSON(data);
                                    //$.each(lista, function(key,value) {
                                    //console.log(value); // para que veas cómo está el array de cada fila y puedas pornerlo en el div
                                    //aqui irira el div de la linea 53
                                    let html=" ";
                                    for (var i = 0; i < data.lenght; i++) {
                                        html+=
                                            '<div class="product-box">' +
                                                '<a href="producto.php?p=' + data.datos[i].id_producto + '">' +
                                                    '<div class="product">' +
                                                        '<img src="assets/img/' + data.datos[i].imagen +'">' +
                                                        '<div class="detail-title">' + data.datos[i].nombre + '</div>' +
                                                        '<div class="detail-description">' + data.datos[i].tipo + '</div>' +
                                                        '<div class="detail-price">' + formato_precio(data.datos[i].precio) + '</div>' +
                                                    '</div>' +
                                                '</a>' +
                                            '</div>';
                                    }
                                    document.getElementById("space-list").innerHTML=html;
                                },
                                error: function (err) {
                                    //prueba
                                    console.log("significa que puede mostrar errores");
                                    console.error(err);
                                }
                            });
                        });
                        function formato_precio(valor) {
                            let bsvalor = valor.toString();
                            let array = bsvalor.split(".");
                            return "Bs. " + array[0] + array[1];
                        }
                    </script>

                    </div>
                </div>
            </div>
    <!--Pie de pagina-->
    <?php include("pie.php"); ?>
</body>

</html>