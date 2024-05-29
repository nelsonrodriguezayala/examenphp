<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
</head>
<body>
    <div class="container">
    <form id="#" action="../controladores/VehiculoControlador.php" method="post">
    <div class="row">
        <label for="txtIdPersona">Placa</label>
        <input type="text" name="txtPlaca" class="form-control"/>
    </div>
    <br>
        <div class="row"> 
        <label for="txtDocumento">Modelo </label>
        <input type="text" name="txtModelo" class="form-control"/>
    </div>
        <br>
        <div class="row"> 
        <label for="">Color </label>
        <input type="text" name="txtColor" class="form-control"/>
    </div>
    <br>
        <div class="row"> 
        <label for="txtApellido">Estado </label>
        <input type="text" name="txtEstado" class="form-control"/>
    </div>
    <br>
        <div class="row"> 
        <label for="txtCorreo">Categoria </label>
        <input type="text" name="txtCategoria" class="form-control"/>
    </div>
    <br>
        <div class="row"> 
        <label for="txtCorreo">Precio </label>
        <input type="text" name="txtPrecio" class="form-control"/>
    </div>
    <br>
        <div class="row"> 
        <label for="txtCorreo">Marca </label>
        <input type="text" name="txtMarca" class="form-control"/>
    </div>
    <br>
        <div class="row"> 
        <label for="txtIdRol">Vendedor </label>
        <select name="txtIdVendedor"class="form-control">
        <?php 
            require "../modelo/Conexion.php";
            require "../modelo/DAO/VendedorDAO.php";
            $vendedorDAO=new VendedorDAO();
            $listaVendedores=$vendedorDAO->listarTodos();
            foreach($listaVendedores as $vendedor)
            {
        ?>
                <option value="<?php echo $vendedor['id']; ?>">
                    <?php echo $vendedor['nombre']." ".$vendedor['apellido']; ?>
                </option>
            <?php
            }
            ?>

        </select>
    </div>
        <br>
        <div class="row">
        <input type="submit" value="Registrar" name="btnRegistrarVehiculo" class="btn btn-success">
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