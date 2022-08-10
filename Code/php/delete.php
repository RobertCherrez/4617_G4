<?php
    include 'conexion.php';
    $id=$_GET['id'];
    $consulta="SELECT * FROM personal WHERE id='$id'";
    $resultado=mysqli_query($conexion,$consulta);
    $filas=mysqli_fetch_array($resultado);
        $sql="DELETE FROM personal WHERE id='$id'";
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
?>