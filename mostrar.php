<?php
include 'conexion.php';

if(isset($_POST['mostrarSend'])){
    $table='
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Marca</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Unidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Fecha Actualizacion</th>
                <th scope="col">Oferta</th>
                <th scope="col">Operaciones</th>
            </tr>
        </thead>';
    
    $sql="SELECT * FROM frutas";
    $result=mysqli_query($con,$sql);
    while($row= $result->fetch_assoc()){
        $idx=$row['idFrutas'];
        $nombrex=$row['Nombre'];
        $marcax=$row['Marca'];
        $descripcionx=$row['Descripcion'];
        $unidadx=$row['Unidad'];
        $preciox=$row['Precio'];
        $fechax=$row['FechaActualizacion'];
        $ofertax=$row['Oferta'];
        $table.='            
        <tr>
        <td scope="row">'.$idx.'</td>
        <td>'.$nombrex.'</td>
        <td>'.$marcax.'</td>
        <td>'.$descripcionx.'</td>
        <td>'.$unidadx.'</td>
        <td>'.$preciox.'</td>
        <td>'.$fechax.'</td>
        <td>'.$ofertax.'</td>
        <td><button class="btn btn-dark" onclick="tomar('.$idx.')">Actualizar</button>
            <button class="btn btn-danger" onclick="borrar('.$idx.')">Borrar</button>  
        </td>
        </tr>';
    }
    $table.='</table>';
    echo $table;
}
?>


