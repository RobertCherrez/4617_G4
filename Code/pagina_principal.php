<?php
    session_start();
    include 'php/conexion.php';
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Se ha cerrado sesión, inicie sesión para continuar");
                window.location="index.php"
            </script>
        ';
        session_destroy();
        die();
    }
    $sql="SELECT * FROM personal";
    $query=mysqli_query($conexion,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
    (function(document) {
    'use strict';

    var LightTableFilter = (function(Arr) {

        var _input;

        function _onInputEvent(e) {
        _input = e.target;
        var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
        Arr.forEach.call(tables, function(table) {
            Arr.forEach.call(table.tBodies, function(tbody) {
        Arr.forEach.call(tbody.rows, _filter);
            });
        });
        }

        function _filter(row) {
        var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
        row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
        }

        return {
        init: function() {
            var inputs = document.getElementsByClassName('light-table-filter');
            Arr.forEach.call(inputs, function(input) {
            input.oninput = _onInputEvent;
            });
        }
        };
    })(Array.prototype);

    document.addEventListener('readystatechange', function() {
        if (document.readyState === 'complete') {
        LightTableFilter.init();
        }
    });

    })(document);
    </script>
    <link href="css\estilo.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
            <div class="row">

                <div class="col-md-3">
                    <form action="php/insertar.php" method="POST">
                        <h3>Ingrese un nuevo registro</h3>
                        <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                        <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                        <input type="text" class="form-control mb-3" name="cedula" placeholder="Cédula">
                        <input type="date" class="form-control mb-3" name="fecha_ingreso" placeholder="Fecha de ingreso">
                        <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección">
                        <input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono">
                        <input type="text" class="form-control mb-3" name="celular" placeholder="Celular">
                        <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                        <input type="text" class="form-control mb-3" name="tel_referencia" placeholder="Teléfono de referencia">
                        <input type="text" class="form-control mb-3" name="nombre_referencia" placeholder="Nombre de referencia">
                        <input type="text" class="form-control mb-3" name="pc_hom" placeholder="¿pc_HOME?">
                        <input type="text" class="form-control mb-3" name="internet" placeholder="¿Internet?">

                        <input type="submit" class="btn btn-primary">
                        <br>
                        <a class="btn btn-primary" href="php/logout.php" role="button">Cerrar sesión</a>
                    </form>

                </div>

                <div class="col-md-8">
                    <div class="table-responsive">
                    <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Search..">
                    <hr>
                        <table class="table table-bordered order-table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Cédula</th>
                                <th>Fecha de ingreso</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Celular</th>
                                <th>Correo</th>
                                <th>Teléfono de referencia</th>
                                <th>¿pc_HOME?</th>
                                <th>¿Internet?</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php echo $row['id']?> </th>
                                    <th><?php echo $row['nombres']?> </th>
                                    <th><?php echo $row['apellidos']?> </th>
                                    <th><?php echo $row['cedula']?> </th>
                                    <th><?php echo $row['fecha_ingreso']?> </th>
                                    <th><?php echo $row['direccion']?> </th>
                                    <th><?php echo $row['telefono']?> </th>
                                    <th><?php echo $row['celular']?> </th>
                                    <th><?php echo $row['correo']?> </th>
                                    <th><?php echo $row['tel_referencia']?> </th>
                                    <th><?php echo $row['pc_hom']?> </th>
                                    <th><?php echo $row['internet']?> </th>
                                    <th><a href="php/actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="php/delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>
                                </tr>
                                <?php
                                }
                                ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>