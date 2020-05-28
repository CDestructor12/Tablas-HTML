<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla 2</title>

    <!-- CSS -->

    <script src="../js/jquery-3.5.1.min.js"></script>
    <link href="../DataTables/datatables.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="../img/ucateci-circulo.png">
    <link rel="stylesheet" href="../css/stilos-principal.css">
    
    <!-- Sripts -->
    <script src="../DataTables/datatables.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#miTabla').DataTable();
        });
    </script>

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
        <a href="../index.php">Home</a>
        <a href="./tabla1.php">Reporte 1 - Sencillo</a>
        <a href="./tabla2.php" class="active">Reporte 2 - Basico</a>
        <a href="./tabla3.php">Reporte 3 - Intermedio</a>
        <a href="./tabla4.php">Reporte 4 - Avanzado</a>
        <a href="../php/introducir-datos.php">Popular tablas</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <h1>Ejemplo 2: Basico</h1>
    <table id="miTabla" class="display" style="width:100%">
        <thead>
            <th>Columna 1</th>
            <th>Columna 2</th>
        </thead>
        <tbody>
            <tr>
                <td>Fila 1: Datos 1</td>
                <td>Fila 1: Datos 2</td>
            </tr>
            <tr>
                <td>Fila 2: Datos 1</td>
                <td>Fila 2: Datos 2</td>
            </tr>
        </tbody>
    </table>
</body>

</html>