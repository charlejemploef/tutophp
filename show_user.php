<?php
    session_start();
    if (!isset($_SESSION["logged"])){
        header("Location: login.php");
    }
    include ("connect.php");
    $user_id = $_POST["user_id"];
    $sql = "SELECT * from usuarios where ID=".$user_id;
    $query = mysqli_query($conn, $sql);
    if (!$row = mysqli_fetch_object($query)){
        echo "Usuario no existe<br>";
        echo "<a href='index.php'>Regresar</a>";
        exit ();
    }

?>

<form method="POST" action="update_user.php">
        <input type="hidden" name="user_id" value="<?php echo $row->ID?>">
        <div class="row">
            <label>Nombre:</label>
            <input type="text" name="name" value="<?php echo $row->Nombre?>"/>            
        </div>
        <div class="row">
            <label>Usuario:</label>
            <input type="text" name="user" value=" <?php echo $row->Usuario?>"/>
        </div>
        <div class="row">
            <label>Password:</label>
            <input type="password" name="password" value = "<?php echo $row->Password?>"/>
        </div>
        <div class="row">
            <button class="btnPrimary" type="submit">Guardar</button>
        </div>
    </form>