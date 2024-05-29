<?php 

class VehiculoDAO{

    public function registrar(VehiculoDTO $vehiculoDTO){
        $con=Conexion::getConexion();
        $mensaje="";
        try{
            $query=$con->prepare("INSERT INTO vehiculo(`placa`, `modelo`, `color`, `estado`, `categoria`, `precio`, `marca`, `idVendedor`) VALUES (?,?,?,?,?,?,?,?)");
            $placa=$vehiculoDTO->getPlaca();
            $modelo=$vehiculoDTO->getModelo();
            $color=$vehiculoDTO->getColor();
            $estado=$vehiculoDTO->getEstado();
            $categoria=$vehiculoDTO->getCategoria();
            $precio=$vehiculoDTO->getPrecio();
            $marca=$vehiculoDTO->getMarca();
            $idvendedor=$vehiculoDTO->getIdVendedor();

            $query->bindParam(1,$placa);
            $query->bindParam(2,$modelo);
            $query->bindParam(3,$color);
            $query->bindParam(4,$estado);
            $query->bindParam(5,$categoria);
            $query->bindParam(6,$precio);
            $query->bindParam(7,$marca);
            $query->bindParam(8,$idvendedor);
            $query->execute();
            $mensaje="Registro Exitoso";
        }
        catch(Exception $ex)
        {
            $mensaje=$ex->getMessage();
        }
        $con=null;
        return $mensaje;
    }
    public function listarTodos(){
        $conn=Conexion::getConexion();
        try{
            $query=$conn->prepare("SELECT * FROM vehiculo,vendedor where vehiculo.idVendedor=vendedor.id");
            $query->execute();
            return $query->fetchAll();
        }
        catch(Exception $ex){
        echo $ex->getMessage();
        } 
    
        }
   
        public function validarPlaca($placa){
            $conn=Conexion::getConexion();
            try{
                $query=$conn->prepare("SELECT * FROM vehiculo where placa=?");
                $query->bindParam(1,$placa);
                $query->execute();
                $vehiculo= $query->fetch();
                if($vehiculo['placa']!=null){
                    return true;
                }
                else{
                    return  false;
                }
            }
            catch(Exception $ex){
            echo $ex->getMessage();
            return true;
            } 
        
            }
        
    }