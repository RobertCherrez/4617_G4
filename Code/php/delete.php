<?php
    include 'conexion_be.php';
    $id=$_GET['id'];
    $consulta="SELECT * FROM usuarios WHERE id='$id'";
    $resultado=mysqli_query($conexion,$consulta);
    $filas=mysqli_fetch_array($resultado);
    if($filas['id_cargo']==1){
        echo '
            <script>
                alert("No se puede borrar el administador");
                window.location= "../pagina_principal.php";
            </script>
            ';
            exit();
    }else if($filas['id_cargo']==2){
        $sql="DELETE FROM usuarios WHERE id='$id'";
        $query=mysqli_query($conexion,$sql);
        if($query){
        echo '
            <script>
                alert("Registro borrado");
                window.location= "../pagina_principal.php";
            </script>
            ';
            exit();
        }
    }
?>