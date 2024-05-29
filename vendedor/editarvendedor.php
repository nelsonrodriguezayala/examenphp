<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
</head>
<body>
    <?php 
    require "../modelo/Conexion.php";
    require "../modelo/DAO/VendedorDAO.php";

    $vendedorDAO=new VendedorDAO();
    $vendedor=$vendedorDAO->listarId($_GET['idVendedor']);
        
    ?>
    <div class="container">
    <form id="#" action="../controladores/VendedorControlador.php" method="post">
    <div class="row">
        <label for="txtIdVendedor">Id Vendedor</label>
        <input type="text" name="txtIdVendedor" readonly="true" class="form-contvendedor" value="<?php echo $vendedor['id'];?>"/>
    </div>
        <br>
        <div class="row"> 
        <label for="txtNombre">Nombre Vendedor</label>
        <input type="text" name="txtNombre" class="form-control" value="<?php echo $vendedor['nombre'];?>"/>
    </div>
        <br>
        <div class="row"> 
        <label for="txtApellido">Apellido Vendedor</label>
        <input type="text" name="txtApellido" class="form-control" value="<?php echo $vendedor['apellido'];?>"/>
    </div>
        <br>
        <div class="row"> 
        <label for="txtTelefono">Telefono Vendedor</label>
        <input type="text" name="txtTelefono" class="form-control" value="<?php echo $vendedor['telefono'];?>"/>
    </div>
        <br>
        <div class="row"> 
        <label for="txtCorreo">Correo Vendedor</label>
        <input type="text" name="txtCorreo" class="form-control" value="<?php echo $vendedor['correo'];?>"/>
    </div>
        <br>
        <div class="row">
        <input type="submit" value="Editar" name="btnEditarVendedor" class="btn btn-success" >
    </div>
    <?php 
    if(isset($_GET["msj"])){
        echo "<h3>";
        echo $_GET["msj"];
        echo "</h3>";
    }
    ?>
    </form>
</div>
</body>
</html>