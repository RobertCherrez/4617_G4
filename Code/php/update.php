<?php
    include 'conexion_be.php';
    $id = $_POST['id'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);
    $sql="UPDATE usuarios SET correo='$correo', usuario='$usuario', contrasena='$contrasena' WHERE id='$id'";
    $query=mysqli_query($conexion,$sql);
    if($query){
        echo '
            <script>
                alert("Registro actualizado");
                window.location= "../pagina_principal.php";
            </script>
            ';
            exit();
    }
?>