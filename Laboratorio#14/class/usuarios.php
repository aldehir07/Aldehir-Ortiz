<?php 
require_once('modelo.php');

class usuarios extends modeloCreadencialesBD{
    public function __construct(){
        parent::__construct();
    }
    public function validar_usuario($usr,$pwd){
        $intruccion ="CALL sp_validar_usuario('".$usr."','".$pwd."')";

        $consulta=$this->_db->query($intruccion);
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
        if($resultado){
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }
}
?>