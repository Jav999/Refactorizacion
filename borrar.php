<?php
include 'conexion.php';

if(isset($_POST['borrarSend'])){
    $unique=$_POST['borrarSend'];

    $sql="DELETE from frutas WHERE idFrutas=".$unique;
    $result=mysqli_query($con,$sql);
}

?>