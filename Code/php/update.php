<?php
    $id = $_POST['id'];
    include 'conexion.php';
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $tel_referencia = $_POST['tel_referencia'];
    $nombre_referencia = $_POST['nombre_referencia'];
    $pc_hom = $_POST['pc_hom'];
    $internet = $_POST['internet'];
    $sql="UPDATE personal SET nombres='$nombres',apellidos='$apellidos', cedula='$cedula', fecha_ingreso='$fecha_ingreso', direccion='$direccion', telefono='$telefono', celular='$celular', correo='$correo', tel_referencia='$tel_referencia', nombre_referencia='$nombre_referencia', pc_hom='$pc_hom', internet='$internet' WHERE id='$id'";
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