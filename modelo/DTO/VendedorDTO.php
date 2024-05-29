<?php
class VendedorDTO{
    private $id=0;
    private $nombre="";
    private $apellido="";
    private $telefono="";
    private $correo="";

    function getIdVendedor(){
        return $this->id;
    }
    function setIdVendedor($idVendedor){
        $this->id=$idVendedor;
    }
    function getNombre(){
        return $this->nombre;
    }
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    function getApellido(){
        return $this->apellido;
    }
    function setApellido($apellido){
        $this->apellido=$apellido;
    }
    
    function getCorreo(){
        return $this->correo;
    }
    function setCorreo($correo){
        $this->correo=$correo;
    }
    function getTelefono(){
        return $this->telefono;
    }
    function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    
    


}