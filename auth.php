<?php
    session_start();
    include ('connect.php');
    
    $ObjConn = new DBConnect ();
    $conn = $ObjConn->DoConnect();
    
    $user = $_POST["name"];
    $password = $_POST["password"];
    
    $password = md5($password."cursophp");
    $sql = "SELECT * FROM usuarios where Usuario='".$user."' and Password='".$password."'";
    $query = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_object($query)){
        $_SESSION["logged"] = true;
        $_SESSION["user_id"]  = $row->ID;
        $_SESSION["displayName"] = $row->Nombre;
        $_SESSION["user"] = $row->Usuario;
        header("Location: index.php");
    }
    else{
        echo "Datos no válidos<br>";
        echo "<a href='index.php'>Regresar</a>";
    }
?>