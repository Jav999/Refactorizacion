<?php
 include 'conexion.php';

 extract($_POST);
 if(isset($_POST['nombreSend']) && isset($_POST['marcaSend']) && isset($_POST['descripcionSend']) && isset($_POST['unidadSend']) && isset($_POST['precioSend']) && isset($_POST['fechaSend']) && isset($_POST['ofertaSend'])){
    //Cambio de formato de fecha 
    $fechaFormato = date("Y-m-d", strtotime(($_POST['fechaSend'])));
    $sql="insert into `frutas`(Nombre, Marca, Descripcion, Unidad, Precio, FechaActualizacion, Oferta) values ('$nombreSend','$marcaSend','$descripcionSend','$unidadSend','$precioSend','$fechaFormato','$ofertaSend')";

    $result=mysqli_query($con,$sql);
 }


?>