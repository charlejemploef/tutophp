<?php
    session_start();
    if (!isset ($_SESSION["logged"])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        td,
        th {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <a href="registrar.php">Registrar</a>
    <a href="logout.php">CERRAR SESION</a>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Password</th>
            <th>Operaciones</th>
        </thead>
        <tbody>
            <?php
            // $usuario = "GERARDO";
            // echo $usuario;
            // echo "<h2>".$usuario."</h2>";
            // $usuario = 100;
            // echo "Nuevo valor: ".$usuario;

            // if ($usuario != "")
            // {
            // echo "<h1>Hola: {$usuario}</h1>";
            // echo "Bienvenido";
            //     if ($usuario == "GERARDO"){
            //         echo "algo";
            //     }
            // }
            // else{
            //     echo "No hay Usuario registrado";
            // }

            // $userType = "Cajero";
            // switch($userT<ype){
            //     case "Admin":
            //         echo "<h3>Administrador</h3>";
            //         break;
            //     case "Cajero":
            //         echo "<h3>Cajero</h3>";
            //         break;
            // }

            // $arr = array(1,2,3,6, "cadena");

            // for ($i=0;$i< count($arr);$i++){
            //     echo "{$arr[$i]}<br>";
            // }
            // foreach ($arr as $elem)
            // {
            //     echo $elem."<br>";
            // }
            // echo "---------------<br>";
            // $i = 0;
            // while ($i<count($arr)){
            //     echo $arr[$i]."<br>";
            //     $i++;
            // }

            // $usuario = $_GET["usr"];

            // function saludo ($param = "Usuario")
            // {
            //    if ($param == "Usuario")
            //         echo " No hay usuario";
            //    else
            //        echo "Hola: ".$param;
            // }

            // saludo ($usuario);


            if ($conn = mysqli_connect("localhost", "root", "", "tutophp")) {
                $query = mysqli_query($conn, "SELECT * FROM usuarios");
                while ($row = mysqli_fetch_object($query)) {
                    echo "<tr><td> {$row->Nombre}</td><td> {$row->Usuario}</td><td> {$row->Password}</td><td>
                    <form method='POST' action='delete_user.php'><button type='submit'>Borrar</button>
                    <input type='hidden' name='user_id' value='".$row->ID."'/></form>
                    <form method='POST' action='show_user.php'>
                    <input type='hidden' name='user_id' value='".$row->ID."'>
                    <button type='submit'>Editar</button>
                    </form>
                    </td>

                    </tr>";
                }
            } else {
                echo "no se pudo conectar";
            }

            ?>
        <tbody>
    </table>
</body>

</html>