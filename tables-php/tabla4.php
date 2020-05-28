<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla 4</title>

    <!-- CSS -->

    <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css">
    <link rel="icon" href="../img/ucateci-circulo.png">
    <link rel="stylesheet" href="../css/stilos-principal.css">

    <!-- Botones -->

    <link rel="stylesheet" type="text/css" href="../DataTables/DataTables-1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">


    <!-- Sripts -->

    <script src="../DataTables/datatables.min.js" type="text/javascript"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#miTabla').DataTable({
                //"iDisplayLength" : 20, // Hacerle un display de elementos que uno quiera.
                "processing": true,
                "serverSide": true,
                "ajax": "../php/server-side.php",
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });
        });
    </script>

    <script type="text/javascript" language="javascript" src="../DataTables/DataTables-1.10.21/js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="../DataTables/DataTables-1.10.21/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="../DataTables/DataTables-1.10.21/js/buttons.flash.min.js"></script>
    <script type="text/javascript" language="javascript" src="../DataTables/DataTables-1.10.21/js/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="../DataTables/DataTables-1.10.21/js/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="../DataTables/DataTables-1.10.21/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="../DataTables/DataTables-1.10.21/js/buttons.print.min.js"></script>

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
        <a href="./tabla2.php">Reporte 2 - Basico</a>
        <a href="./tabla3.php">Reporte 3 - Intermedio</a>
        <a href="./tabla4.php" class="active">Reporte 4 - Avanzado</a>
        <a href="../php/introducir-datos.php">Popular tablas</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <h1>Ejemplo 4: Avanzado</h1>
    <table id="miTabla" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Calificacion</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Calificacion</th>
            </tr>
        </tfoot>
    </table>
</body>

</html>