<?php

class principalModel extends Model
{
    public function __construct() {
        parent::__construct();
    }
    



public function count_emp(){
    $sql="SELECT COUNT(*) as conteo FROM `empresa`";
    $datos=$this->_db->query($sql);
        


    return $datos->fetch(); 
}

}?>
