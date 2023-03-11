<?php
    include ('connect.php');
    $user_id = $_POST["user_id"];
    $name = $_POST["name"];
    $username = $_POST["user"];
    $password = $_POST["password"];

    if ($password == "12345"){
        $sql = "UPDATE usuarios set Nombre = '".$name."', Usuario='".$username."' where ID=".$user_id;
    }
    else
    {
        $password = md5($password."cursophp");
        $sql = "UPDATE usuarios set Nombre = '".$name."', Usuario='".$username."', Password='".$password."' where ID=".$user_id;
    }

    if ($query = mysqli_query($conn, $sql))
        header("Location: index.php");
    else{
        echo "Usuario no pudo ser actualizado<br>";
        echo "<a href='index.php'>Regresar</a>";
    }
?>