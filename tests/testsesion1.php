<?php

session_start();

if($_POST){
    $_SESSION['nombre']=$_POST['nombre'];
    header('location: recibe.php');
} else {
    $_SESSION['nombre']="";
    session_destroy();
}


?>

<html>
<body>
    <h1> A ver tu nombre prro </h1>

    <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <label for="txtnombre">Nombre: </label>
        <input type="text" name="nombre" placeholder="Ingrese su nombre" /> <br />
        <input type="submit" value="Aceptar">

    </form>
</body>

</html>