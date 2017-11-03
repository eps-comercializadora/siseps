<?php

class regis_empModel extends Model
{
    public function __construct() {
        parent::__construct();
    }
    



public function cargar_muni($id){

$sql="SELECT * FROM `municipios` where id_estado=$id ";

$datos = $this->_db->query($sql);
      


return  $datos->fetchall();



}

public function traer_parroquia($id){

$sql="SELECT * FROM `parroquias` where id_municipio=$id ";

$datos = $this->_db->query($sql);
      


return  $datos->fetchall();



}

public function guardar_emp($datos){

$sql="INSERT INTO `empresa`  VALUES (NULL, '".$datos['rif']."', '".$datos['razon_social']."', '".$datos['nro_registro']."', '".$datos['tipo']."', '".$datos['municipio']."', '".$datos['parroquia']."', '".$datos['direccion']."', '".$datos['poseec']."', '".$datos['poseep']."');";

 $this->_db->query($sql);
      





}



}

?>


