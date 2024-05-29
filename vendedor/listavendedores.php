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
    
    require "../modelo/DAO/VendedorDAO.php";
    require "../modelo/Conexion.php";
    $vendedorDAO=new VendedorDAO();

    $listaVendedores=$vendedorDAO->listarTodos();
    ?>
    <div class="container">
        
        <h2>Listado de Vendedores</h2><br>
              
        <table id="tablaVendedores"class="table table-dark">
            <thead>
                <tr>
                    <th>Id Vendedor</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Correo</th>

                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($listaVendedores as $vendedor){
                    ?>
                    <tr>
                        <td><?php echo $vendedor["id"]; ?></td>
                        <td><?php echo $vendedor["nombre"]; ?></td>
                        <td><?php echo $vendedor["apellido"]; ?></td>
                        <td><?php echo $vendedor["telefono"]; ?></td>
                        <td><?php echo $vendedor["correo"]; ?></td>
                        <td>
                            <a href="editarvendedor.php?idVendedor=<?php echo $vendedor["id"]; ?>" class="btn btn-warning">Editar</a>
                            
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