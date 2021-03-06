<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas en Pantalla</title>

    <!-- CSS -->
    <link rel="icon" href="./img/ucateci-circulo.png">
    <link rel="stylesheet" href="./css/stilos-principal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Sripts -->

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="./index.php" class="active">Home</a>
        <a href="./tables-php/tabla1.php">Reporte 1 - Sencillo</a>
        <a href="./tables-php/tabla2.php">Reporte 2 - Basico</a>
        <a href="./tables-php/tabla3.php">Reporte 3 - Intermedio</a>
        <a href="./tables-php/tabla4.php">Reporte 4 - Avanzado</a>
        <a href="./php/introducir-datos.php">Popular tablas</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <h1>Creando Reportes y Consultas en Pantalla.</h1>
</body>

</html>