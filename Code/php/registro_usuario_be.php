<?php
    include 'conexion_be.php';
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);
    $id_cargo=2;
    $query="INSERT INTO usuarios(correo, usuario, contrasena,id_cargo)
        VALUES('$correo', '$usuario', '$contrasena','$id_cargo')";
    //verificar que el correo sea único
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
    if(mysqli_num_rows($verificar_correo)>0){
        echo '
            <script>
                alert("Este correo ya está en uso");
                window.location= "../index.php";
            </script>
            ';
            exit();
    }
    //verificar que el usuario sea único
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
    if(mysqli_num_rows($verificar_usuario)>0){
        echo '
            <script>
                alert("Este usuario ya está en uso");
                window.location= "../index.php";
            </script>
            ';
            exit();
    }
    $ejecutar = mysqli_query($conexion, $query);
    if($ejecutar){
        echo '
            <script>
                alert("Usuario creado exitosamente");
                window.location= "../index.php";
            </script>
        ';
    }else{
        echo '
        <script>
            alert("Usuario no creado, inténtalo de nuevo");
            window.location= "../index.php";
        </script>
        ';
    }
    mysqli_close($conexion);
?>