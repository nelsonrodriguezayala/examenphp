<?php 

class VehiculoDTO{
    private $placa=0;
    private $modelo=0;
    private $color="";
    private $estado="";
    private $categoria="";
    private $precio=0;
    private $marca="";
    private $idVendedor="";

    function getPlaca(){
        return $this->placa;
    }
    function setPlaca($placa){
        $this->placa=$placa;
    }
    function getModelo(){
        return $this->modelo;
    }
    function setModelo($modelo){
        $this->modelo=$modelo;
    }
    function getColor(){
        return $this->color;

    }
    function setColor($color){
        $this->color=$color;
    }
    function getEstado(){
        return $this->estado;
    }
    function setEstado($estado){
        $this->estado=$estado;
    }
    function getCategoria(){
        return  $this->categoria;
    }
    function setCategoria($categoria){
        $this->categoria=$categoria;
    }
    function getPrecio(){
        return  $this->precio;
    }
    function setPrecio($precio){
        $this->precio=$precio;
    }
    function getMarca(){
        return  $this->marca;
    }
    function setMarca($marca){
        $this->marca=$marca;
    }
    
    function getIdVendedor(){
        return $this->idVendedor;
    }
    function setIdVendedor($idVendedor){
        $this->idVendedor=$idVendedor;
    }

}