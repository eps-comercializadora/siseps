<?php

class regis_perModel extends Model
{
    public function __construct() {
        parent::__construct();
    }
    





public function traer_emp(){

$sql="select * from empresa";

 $datos=$this->_db->query($sql);
      
return $datos->fetchall();




}



}

?>


