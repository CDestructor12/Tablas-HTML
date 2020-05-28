<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla 2</title>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./DataTables/datatables.min.css">
    <script src="./DataTables/datatables.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#miTabla').DataTable();
        });
    </script>
</head>

<body>
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