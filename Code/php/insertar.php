<?php
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
    $query="INSERT INTO personal(nombres,apellidos,cedula,fecha_ingreso,direccion,telefono,celular,correo,tel_referencia,nombre_referencia,pc_hom,internet)
        VALUES('$nombres','$apellidos','$cedula','$fecha_ingreso','$direccion','$telefono','$celular','$correo','$tel_referencia','$nombre_referencia','$pc_hom','$internet')";
    $ejecutar = mysqli_query($conexion, $query);
    if($ejecutar){
        echo '
            <script>
                alert("Empleado registrado exitosamente");
                window.location= "../pagina_principal.php";
            </script>
        ';
    }else{
        echo '
        <script>
            alert("Usuario no creado, inténtalo de nuevo");
            window.location= "../pagina_principal.php";
        </script>
        ';
    }
    mysqli_close($conexion);
?>