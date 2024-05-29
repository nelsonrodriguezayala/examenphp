<?php

require '../modelo/Conexion.php';
require '../modelo/DAO/VehiculoDAO.php';
require '../modelo/DTO/VehiculoDTO.php';



if(isset($_POST['btnRegistrarVehiculo'])){
    $vehiculoDAO=new VehiculoDAO();
    $vehiculoDTO=new VehiculoDTO();

    if($vehiculoDAO->validarPlaca($_POST['txtPlaca'])){
        $mensaje="La placa ya esta registrada";
    echo "<script> window.location.replace('../vehiculo/vehiculo.php?msj=$mensaje');</script>";
    }else{

    $vehiculoDTO->setPlaca($_POST['txtPlaca']);
    $vehiculoDTO->setModelo($_POST['txtModelo']);
    $vehiculoDTO->setColor($_POST['txtColor']);
    $vehiculoDTO->setEstado($_POST['txtEstado']);
    $vehiculoDTO->setCategoria($_POST['txtCategoria']);
    $vehiculoDTO->setPrecio($_POST['txtPrecio']);
    $vehiculoDTO->setMarca($_POST['txtMarca']);
    $vehiculoDTO->setIdVendedor($_POST['txtIdVendedor']);


    $mensaje=$vehiculoDAO->registrar($vehiculoDTO);
    echo "<script> window.location.replace('../vehiculo/vehiculo.php?msj=$mensaje');</script>";
    }
}
