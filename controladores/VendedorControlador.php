<?php

require '../modelo/Conexion.php';
require '../modelo/DAO/VendedorDAO.php';
require '../modelo/DTO/VendedorDTO.php';

if(isset($_POST['btnEditarVendedor'])){
    $vendedorDAO=new VendedorDAO();
    $vendedorDTO=new VendedorDTO();

    $vendedorDTO->setIdVendedor($_POST['txtIdVendedor']);
    $vendedorDTO->setNombre($_POST['txtNombre']);
    $vendedorDTO->setApellido($_POST['txtApellido']);
    $vendedorDTO->setTelefono($_POST['txtTelefono']);
    $vendedorDTO->setCorreo($_POST['txtCorreo']);

    $mensaje=$vendedorDAO->editar($vendedorDTO);
    echo "<script> window.location.replace('../vendedor/listavendedores.php?msj=$mensaje');</script>";
}