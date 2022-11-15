<?php
include('db.php');
$response=new stdClass();

$datos=[];
$i=0;
$sql = "select * from producto where estado=1";
$result=mysqli_query($con, $sql);
while($row=mysqli_fetch_array($result)){
    $obj=new stdClass();
    $obj->id_producto=$row['id_producto'];
    $obj->nombre=$row['nombre'];
    $obj->tipo=$row['tipo'];
    $obj->precio=$row['precio'];
    $obj->imagen=$row['imagen'];
    $datos[$i]=$obj;
    $i++;
}
$response->datos=$datos;

mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);

?>