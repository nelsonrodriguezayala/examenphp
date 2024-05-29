<?php
class VendedorDAO{
    

    public function listarTodos(){
    $conn=Conexion::getConexion();
    try{
        $query=$conn->prepare("SELECT * FROM vendedor");
        $query->execute();
        return $query->fetchAll();
    }
    catch(Exception $ex){
    echo $ex->getMessage();
    } 

    }
    public function listarId($idVendedor){
        $conn=Conexion::getConexion();
        try{
            $query=$conn->prepare("SELECT * FROM vendedor where id=?");
            $query->bindParam(1,$idVendedor);
            $query->execute();
            return $query->fetch();
        }
        catch(Exception $ex){
        echo $ex->getMessage();
        } 
    
        }

       
        public function editar(VendedorDTO $vendedorDTO){
            $con=Conexion::getConexion();
            $mensaje="";
            try{
                $query=$con->prepare("UPDATE `vendedor` SET `nombre`=?,`apellido`=?,`telefono`=?,`correo`=? WHERE id=?");
                $id=$vendedorDTO->getIdVendedor();
              $nombre=$vendedorDTO->getNombre();
              $apellido=$vendedorDTO->getApellido();
              $telefono=$vendedorDTO->getTelefono();
              $correo=$vendedorDTO->getCorreo();

                $query->bindParam(1,$nombre);
                $query->bindParam(2,$apellido);
                $query->bindParam(3,$telefono);
                $query->bindParam(4,$correo);
                $query->bindParam(5,$id);
                $query->execute();
                $mensaje="Registro Actualizado";
    
            }catch(Exception $ex){
                $mensaje=$ex->getMessage();
            }
            $con=null;
            return $mensaje;
        }
     public function registrar(VendedorDTO $vendedorDTO){
            $con=Conexion::getConexion();
            $mensaje="";
            try{
                $query=$con->prepare("INSERT INTO `vendedor`(`id`, `nombre`, `apellido`, `telefono`, `correo`) VALUES (?,?,?,?,?)");
                $id=$vendedorDTO->getIdVendedor();
              $nombre=$vendedorDTO->getNombre();
              $apellido=$vendedorDTO->getApellido();
              $telefono=$vendedorDTO->getTelefono();
              $correo=$vendedorDTO->getCorreo();
                $query->bindParam(1,$id);
                $query->bindParam(2,$nombre);
                $query->bindParam(3,$apellido);
                $query->bindParam(4,$telefono);
                $query->bindParam(5,$correo);
                
                $query->execute();
                $mensaje="Registro Exitoso";
    
            }catch(Exception $ex){
                $mensaje=$ex->getMessage();
            }
            $con=null;
            return $mensaje;
        }
}
