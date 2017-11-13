<?php

class regis_perModel extends Model
{
    public function __construct() {
        parent::__construct();
    }
    





public function traer_emp(){

$sql="SELECT * FROM `empresa` ORDER BY `empresa`.`id_emp` DESC ";

 $datos=$this->_db->query($sql);
      
return $datos->fetchall();




}


public function guardar_per($datos){

 $sql="INSERT INTO `persona`  VALUES (NULL,'".$datos['nacionalidad']."', '".$datos['productora']."', '".$datos['cedula']."', '".$datos['rif']."', '".$datos['nombres']."', '".$datos['apellidos']."', '".$datos['telefono']."', '".$datos['direccion']."', '".$datos['codigo']."', '".$datos['serial']."', '".$datos['certificado_medico']."');";

 $this->_db->query($sql);
      

}

public function buscar($datos){

 $sql='SELECT *,empresa.razon_social FROM persona,empresa where persona.id_empresa=empresa.id_emp and nacionalidad="'.$datos['nacionalidad'].'" and  cedula="'.$datos['cedula'].'" ';

 $datos=$this->_db->query($sql);




      
return $datos->fetch();




}
public function buscar2($datos){

  $sql='SELECT * FROM cne where nac="'.$datos['nacionalidad'].'" and  cedula="'.$datos['cedula'].'" ';

 $datos=$this->_db->query($sql);




      
return $datos->fetch();




}





}

?>


