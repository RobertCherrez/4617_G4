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
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $errores=0;
        if(empty($nombres)){
            echo '
                <p>El nombre está vacío</p>
            ';
            $errores++;
        }
        for ($i=0; $i<strlen($nombres); $i++){
            if (strpos($permitidos, substr($nombres,$i,1))===false){
                echo $nombres . " no es válido - No debe contener caracteres especiales<br>";
                $errores++;
            }
        }
        if(empty($apellidos)){
            echo '
                <p>El apellido está vacío</p>
            ';
            $errores++;
        }
        for ($i=0; $i<strlen($apellidos); $i++){
            if (strpos($permitidos, substr($apellidos,$i,1))===false){
                echo $apellidos . " no es válido - No debe contener caracteres especiales<br>";
                $errores++;
            }
        }
        if(empty($cedula)){
            echo '
                <p>Cedula está vacío</p>
            ';
            $errores++;
        }else if (strlen($cedula) < 10 || strlen($cedula)> 10){
            echo $cedula . " no es válido, debe contener 10 dígitos<br>";
            $errores++;
        }
        if(empty($fecha_ingreso)){
            echo '
                <p>Fecha ingreso está vacío</p>
            ';
            $errores++;
        }
        if(empty($direccion)){
            echo '
                <p>Dirección está vacío</p>
            ';
            $errores++;
        }
        if(empty($telefono)){
            echo '
                <p>Telefono está vacío</p>
            ';
            $errores++;
        }else if (strlen($telefono) < 7 || strlen($telefono)> 7){
            echo $telefono . " no es válido, debe contener 7 dígitos<br>";
            $errores++;
        }
        if(empty($celular)){
            echo '
                <p>Celular está vacío</p>
            ';
            $errores++;
        }else if (strlen($celular) < 10 || strlen($celular)> 10){
            echo $celular . " no es válido, debe contener 10 dígitos <br>";
            $errores++;
        }
        if(empty($correo)){
            echo '
                <p>Correo está vacío</p>
            ';
            $errores++;
        }else if(filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        }
        else {
            echo $correo . " No es un correo válido<br>";
            $errores++;
        }
        if(empty($nombre_referencia)){
            echo '
                <p>Nombre referencia está vacío</p>
            ';
            $errores++;
        }
        for ($i=0; $i<strlen($nombre_referencia); $i++){
            if (strpos($permitidos, substr($nombre_referencia,$i,1))===false){
                echo $nombre_referencia . " no es válido - No debe contener caracteres especiales<br>";
                $errores++;
            }
        }
        if(empty($tel_referencia)){
            echo '
                <p>Tel referencia está vacío</p>
            ';
            $errores++;
        }else if (strlen($tel_referencia) < 10 || strlen($tel_referencia)> 10){
            echo $tel_referencia . " no es válido, debe contener 10 dígitos<br>";
            $errores++;
        }
        if(empty($pc_hom)){
            echo '
                <p>PC hom está vacío</p>
            ';
            $errores++;
        }
        if(empty($internet)){
            echo '
                <p>Internet está vacío</p>
            ';
            $errores++;
        }
        if($errores != 0){
            echo '
                <h1> Estos son lo errores detectados regrese a la página anterior e inténtelo de nuevo</h1>
            ';
        }
        else if($errores==0){
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
                alert("Registro no creado, inténtalo de nuevo");
                window.location= "../pagina_principal.php";
            </script>
            ';
            }
            mysqli_close($conexion);
        }
    ?>







