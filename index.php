<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>Php bootstrap</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div>
        <center><h1>Admin de Frutas</h1></center>
    </div>
    
    <!-- MODAL -->
    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--form-->
                        <form>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombreA">
                            </div>
                            <div class="mb-3">
                                <label for="marca" class="form-label">Marca</label>
                                <input type="text" class="form-control" id="marcaA">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" id="descripcionA">
                            </div>
                            <div class="mb-3">
                                <label for="unidad" class="form-label">Unidad</label>
                                <input type="text" class="form-control" id="unidadA">
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" id="precioA"  step="0.1">
                            </div>
                            <div class="mb-3">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="date" class="form-control" id="fechaA">
                            </div>
                            <div class="mb-3">
                                <label for="oferta" class="form-label">Oferta</label>
                                <input type="number" class="form-control" id="ofertaA" min="0" max="1">
                            </div>
                        </form>
                        <!--form-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-success" onclick="agregar()">Guardar</button>
                    </div>
                </div>
        </div>
    </div>
    <!-- MODAL 2 -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Actualizar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--form-->
                        <form>
                            <div class="mb-3">
                                <label for="nombreB" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombreB">
                            </div>
                            <div class="mb-3">
                                <label for="marcaB" class="form-label">Marca</label>
                                <input type="text" class="form-control" id="marcaB">
                            </div>
                            <div class="mb-3">
                                <label for="descripcionB" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" id="descripcionB">
                            </div>
                            <div class="mb-3">
                                <label for="unidadB" class="form-label">Unidad</label>
                                <input type="text" class="form-control" id="unidadB">
                            </div>
                            <div class="mb-3">
                                <label for="precioB" class="form-label">Precio</label>
                                <input type="text" class="form-control" id="precioB">
                            </div>
                            <div class="mb-3">
                                <label for="fechaB" class="form-label">Fecha</label>
                                <input type="text" class="form-control" id="fechaB">
                            </div>
                            <div class="mb-3">
                                <label for="ofertaB" class="form-label">Oferta</label>
                                <input type="text" class="form-control" id="ofertaB">
                            </div>
                        </form>
                        <!--form-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-success" onclick="guardar()">Actualizar</button>
                        <input type="hidden" id="hiddendata">
                    </div>
                </div>
        </div>
    </div>
     
    <div class="container my-3">
       <!--<button class="btn btn-dark my-4">Añadir</button>-->
        <button type="button" class="btn btn-dark my-4" data-bs-toggle="modal" data-bs-target="#completeModal">
            Añadir
        </button>

        <div id="mostrarDataTabla"></div>
    </div>
    


<!--Bootstrap Javascrip-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

<script>
    $(document).ready(function(){
        mostrarData();
    });

    function mostrarData(){
        var mostrar = "true";
        $.ajax({
            url:"mostrar.php",
            type:'post',
            data:{
                mostrarSend:mostrar
            },
            success:function(data,status){
                $('#mostrarDataTabla').html(data);
            }
        });
    }

    function agregar(){

        var nombre = document.getElementById("nombreA").value;
        var marca = document.getElementById("marcaA").value;
        var descripcion = document.getElementById("descripcionA").value;
        var unidad = document.getElementById("unidadA").value;
        var precio = document.getElementById("precioA").value;
        var fecha = document.getElementById("fechaA").value;
        var oferta = document.getElementById("ofertaA").value;
        //var nombre = $('#nombreA').val();
        //var marca = $('#marcaA').val();
        //var descripcion = $('#descripcionA').val();
        //var unidad = $('#unidadA').val();
        //var precio = $('#precioA').val();
        //var fecha = $('#fechaA').val().datepicker({dateFormat:'yy-mm-dd'});
        //var oferta = $('#ofertaA').val();

        $.ajax({
            url:"insertar.php",
            type:'post',
            data:{
                nombreSend:nombre,
                marcaSend:marca, 
                descripcionSend:descripcion,
                unidadSend:unidad,
                precioSend:precio,
                fechaSend:fecha,
                ofertaSend:oferta
            },
            success:function(data,status){
                //Funcion para mostrar los datos
                //console.log(status);
                $('#completeModal').modal('hide');
                mostrarData();
            }
        });

    }
    ///BORAR///
    function borrar(borrarid){

        $.ajax({
            url:"borrar.php",
            type:'post',
            data:{
                borrarSend:borrarid
            },
            success:function(data,status){
                mostrarData();
            }
        });
    }

    function ay(id){
        alert(id);
    }

//update registro
    function tomar(tomarid){
        $('#hiddendata').val(tomarid);

        $.post("actualizar.php", {tomarid:tomarid}, function(data,status){
            var cosaid=JSON.parse(data);
            //var cosaid=JSON.parse(JSON.stringify(data));
            //var cosaid = tomarid;
            console.log(data);
            $('#nombreB').val(cosaid.Nombre);
            $('#marcaB').val(cosaid.Marca);
            $('#descripcionB').val(cosaid.Descripcion);
            $('#unidadB').val(cosaid.Unidad);
            $('#precioB').val(cosaid.Precio);
            $('#fechaB').val(cosaid.FechaActualizacion);
            $('#ofertaB').val(cosaid.Oferta);
        });

        $('#updateModal').modal('show');

    }
//onclick update function
    function guardar(){

        var nombre = document.getElementById("nombreB").value;
        var marca = document.getElementById("marcaB").value;
        var descripcion = document.getElementById("descripcionB").value;
        var unidad = document.getElementById("unidadB").value;
        var precio = document.getElementById("precioB").value;
        var fecha = document.getElementById("fechaB").value;
        var oferta = document.getElementById("ofertaB").value;
        var hiddendata = document.getElementById("hiddendata").value;

        $.post("actualizar.php",{
            nombreSend:nombre,
            marcaSend:marca, 
            descripcionSend:descripcion,
            unidadSend:unidad,
            precioSend:precio,
            fechaSend:fecha,
            ofertaSend:oferta,
            hiddendata:hiddendata
        },function(data,status){
            $('#updateModal').modal('hide');
            mostrarData();
        });
    }
</script>

</body>
</html>

