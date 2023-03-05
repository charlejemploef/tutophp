<?php
    session_start();
    if (!isset($_SESSION["logged"])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <style>
        form{
            width: 50%;
            margin: 0 auto;
        }
        .row{
            display: flex;
            justify-content: space-between;
            gap: 10px;
            padding: 10px;
        }
        .btnPrimary{
            border: 1px solid ivory;
            border-radius: 5px;
            padding: 5px 10px;
            color: ivory;
            background-color: blue;
        }
        input{
            border: 1px solid gray;
            padding: 5px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <form method="POST" action="save.php">
        <div class="row">
            <label>Nombre:</label>
            <input type="text" name="name"/>
            
        </div>
        <div class="row">
            <label>Usuario:</label>
            <input type="text" name="user"/>
        </div>
        <div class="row">
            <label>Password:</label>
            <input type="password" name="password"/>
        </div>
        <div class="row">
            <button class="btnPrimary" type="submit">Guardar</button>
        </div>
    </form>
</body>
</html>