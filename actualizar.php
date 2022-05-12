<?php
include 'conexion.php';

if(isset($_POST['tomarid'])){
    $variable=$_POST['tomarid'];

    $sql="SELECT * FROM frutas WHERE idFrutas=".$variable;
    $result=mysqli_query($con,$sql);
    $response=array();
    while($row= mysqli_fetch_assoc($result)){
        $response = $row;
    }
    echo json_encode($response);
}else{
    $response['status']=200;
    $response['message']="Invalid or data not found";
}

//UPDATE QUERY
if(isset($_POST['hiddendata'])){
    $uniqueid=$_POST['hiddendata'];
    $nombrey=$_POST['nombreSend'];
    $marcay=$_POST['marcaSend'];
    $descripciony=$_POST['descripcionSend'];
    $unidady=$_POST['unidadSend'];
    $precioy=$_POST['precioSend'];
    $fechay=$_POST['fechaSend'];
    $ofertay=$_POST['ofertaSend'];

    $sql="UPDATE frutas set Nombre='$nombrey', Marca='$marcay', Descripcion='$descripciony', Unidad='$unidady', Precio='$precioy', FechaActualizacion='$fechay', Oferta='$ofertay' WHERE idFrutas='$uniqueid'";

    $result=mysqli_query($con,$sql);
}

?>