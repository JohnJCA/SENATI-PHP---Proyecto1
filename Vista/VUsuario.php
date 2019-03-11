<?php
    require_once('../Controlador/Dao/DUsuario.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script>
        function previusPage() {
            window.history.back();
        }
    </script>
</head>
<body>
    <div class="container">
        <h3>Usuarios</h3>
        <table class="table table-hover">
            <tr class="info">
                <td>ID</td>
                <td>Nombres</td>
                <td>Password</td>
                <td>Estado</td>
            <tr>
            <?php
                $dUser = new DUsers();
                $result = $dUser->getUsers();

                foreach ($result as $row) {

                    echo '<tr>';
                        echo '<td>'.$row["id"].'</td>';
                        echo '<td>'.$row["names"].'</td>';
                        echo '<td>'.$row["password"].'</td>';
                        echo '<td>'.$row["status"].'</td>';
                    echo '</tr>';
                }
            ?>
        </table>
        <button class="btn btn-warning" onclick="previusPage()">Regresar</button>
    </div>

</body>
</html>


