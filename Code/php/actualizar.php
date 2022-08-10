<?php
    include 'conexion.php';
    $id = $_GET['id'];
    $sql="SELECT * FROM personal WHERE id='$id'";
    $query = mysqli_query($conexion,$sql);
    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Editar registro</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']?>">

            <label for="cedula" >Nombres</label>
            <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']?>">

            <label for="cedula">Apellidos</label>
            <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellidos" value="<?php echo $row['apellidos']?>">

            <label for="cedula">Cedula</label>
            <input type="text" class="form-control mb-3" name="cedula" placeholder="cedula" value="<?php echo $row['cedula']?>">

            <label for="cedula">Fecha ingreso</label>
            <input type="text" class="form-control mb-3" name="fecha_ingreso" placeholder="Fecha ingreso" value="<?php echo $row['fecha_ingreso']?>">

            <label for="cedula">Direccion</label>
            <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion" value="<?php echo $row['direccion']?>">

            <label for="cedula">Telefono</label>
            <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']?>">

            <label for="cedula">Celular</label>
            <input type="text" class="form-control mb-3" name="celular" placeholder="Celular" value="<?php echo $row['celular']?>">

            <label for="cedula">Correo</label>
            <input type="text" class="form-control mb-3" name="correo" placeholder="Correo" value="<?php echo $row['correo']?>">

            <label for="cedula">Telefono de referenciar</label>
            <input type="text" class="form-control mb-3" name="tel_referencia" placeholder="tel_referencia" value="<?php echo $row['tel_referencia']?>">

            <label for="cedula">nombre referencia</label>
            <input type="text" class="form-control mb-3" name="nombre_referencia" placeholder="nombre referencia" value="<?php echo $row['nombre_referencia']?>">

            <label for="cedula">PC-home</label>
            <input type="text" class="form-control mb-3" name="pc_hom" placeholder="pc_hom" value="<?php echo $row['pc_hom']?>">

            <label for="cedula">Internet</label>
            <input type="text" class="form-control mb-3" name="internet" placeholder="internet" value="<?php echo $row['internet']?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>
    </div>
</body>
</html>