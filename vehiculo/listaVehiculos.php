<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
</head>
<body>
    <?php
   
    require "../modelo/DAO/VehiculoDAO.php";
    require "../modelo/Conexion.php";
    $vehiculoDAO=new VehiculoDAO();

    $listaVehiculos=$vehiculoDAO->listarTodos();
    ?>
    <div class="container">
    
    <h2>Listado de Vehiculos</h2><br>
        <a href="vehiculo.php"class="btn btn-primary">Nuevo</a>
        

        <table id="tablaVehiculo"class="table table-dark">
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Estado</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Nombre Vendedor</th>
                    <th>Telefono Vendedor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($listaVehiculos as $vehiculo){
                    ?>
                    <tr>
                        <td><?php echo $vehiculo["placa"]; ?></td>
                        <td><?php echo $vehiculo["modelo"]; ?></td>
                        <td><?php echo $vehiculo["color"]; ?></td>
                        <td><?php echo $vehiculo["estado"]; ?></td>
                        <td><?php echo $vehiculo["categoria"]; ?></td>
                        <td><?php echo $vehiculo["precio"]; ?></td>
                        <td><?php echo $vehiculo["marca"]; ?></td>
                        <td><?php echo $vehiculo["nombre"]." ".$vehiculo['apellido']; ?></td>
                        <td>
                        <?php echo $vehiculo["telefono"]; ?></td>
                        </td>
                    </tr>

                <?php 
                }

                ?>
            </tbody>


        </table>


    </div>
    <?php 
    if(isset($_GET["msj"])){
        echo "<h3>";
        echo $_GET["msj"];
        echo "</h3>";
    }
    ?>
</body>
</html>