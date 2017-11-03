<?php
error_reporting(-1); 	
$serverName = "servidor";
$connectionInfo = array( "Database"=>"enterpriseadmindb", "UID"=>"sa", "PWD"=>"9822");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "<h1>Conexión establecida.</h1><br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
     
}


$sql = "select * from SAFACT where SAFACT.CodClie ='V 20574205'";
$resul = sqlsrv_query($conn,$sql);


// ******************devolver un array asociativo y numerico***************
// while($row=sqlsrv_fetch_array($resul))
// 	{
		
// 		$array=$row;
// 	}
//************************************************************************

//********************devolvera un array asociativo ***********************
 while($row=sqlsrv_fetch_array($resul,SQLSRV_FETCH_ASSOC))
 	{

 		$array=$row;
 	}
//*************************************************************************



print_r($array);




	


sqlsrv_free_stmt( $resul);
sqlsrv_close( $conn);




?>
