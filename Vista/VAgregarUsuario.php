<?php
    require_once('../Controlador/Dao/DUsuario.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agregar usuarios</title>
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
        <h3>Agregar Usuario</h3>
        <form style="width: 600px" action="./VUSUario.php" method="post">
            <!--
            <div class="form-group-sm">
                <label for="usr">ID:</label>
                <input type="text" id="userId" placeholder="Ingrese ID" class="form-control" >
            </div> -->
            <br>
            <div class="form-group-sm">
                <label for="usr">Nombres:</label>
                <input type="text" name="userNames" id="userNames" placeholder="Ingrese nombres" class="form-control" required>
            </div>
            <br>
            <div class="form-group-sm">
                <label for="usr">Contraseña:</label>
                <input type="password" name="password" id="password" placeholder="Ingrese contraseña" class="form-control" required>
            </div>
            <br>
            <button type="action" class="btn btn-warning" onclick="window.history.go(-1); return false;">Regresar</button>

            <?php
                $userNames = $password = '';
                 if( isset($_POST['userNames']) ) {
                    $userNames = $_POST['userNames'];
                 }
                 if( isset($_POST['password']) ) {
                    $password = $_POST['password'];
                 }
                
                $dUser = new DUsers();
                $result = $dUser->addUsers($userNames, $password);
            ?>
            <button type="submit" name="submit" class="btn btn-success">Agregar</button>
        </form>
    </div>
</body>
</html>