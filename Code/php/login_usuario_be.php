<?php
    session_start();
    include 'conexion_be.php';
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);
    $consulta="SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'";
    $resultado=mysqli_query($conexion,$consulta);
    $filas=mysqli_fetch_array($resultado);
    if($filas['id_cargo']==1){
        $_SESSION['usuario']=$correo;
        header("Location: ../pagina_principal.php");
        exit;
    }else if($filas['id_cargo']==2){
        $_SESSION['usuario']=$correo;
        header("Location: ../pagina_usuario.php");
        exit;
    }
    else
    {
        echo '
            <script>
                alert("Usuario incorrecto, revise los datos");
                window.location= "../index.php";
            </script>
        ';
        exit;
    }
?>