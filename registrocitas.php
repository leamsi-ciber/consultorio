<?php
session_start();
include('libreria/componentes/header.php');
include('libreria/includes.php');
if($_POST){
 
    $duracion=$_POST['duracion'];
    $hora=$_POST['hora'];
    $tipo=$_POST['tipo'];
    $fecha=$_POST['fecha2'];
    

 $con=conexion::instancia();
 $sql ="insert into cita (fecha, hora,duracion, tipo_consulta)
 values ( '$fecha','$hora','$duracion','$tipo')";
 mysqli_query($con,$sql);

 
}
      
 
 
     
?>

<div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Registro de Visita</h4>
                    <p class="card-description"> Insertar datos</p>
                    <form class="forms-sample" method="POST">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Fecha</label>
                        <input type="date" name="fecha2" class="form-control" id="exampleInputUsername1" placeholder="dd/mm/yyyy" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Hora</label>
                        <input type="time" name="hora" class="form-control" id="exampleInputUsername1" placeholder="00:00:00" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Duracion</label>
                        <input type="text" name="duracion" class="form-control" id="exampleInputUsername1" placeholder="Comentario" required>
                      </div>
                      <div class="form-group">
                      <label for="exampleInputUsername1">Tipo Consulta</label>
                        <input type="text" name="tipo" class="form-control" id="exampleInputUsername1" placeholder="Motivo" required>
                      </div>
                     
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
<?php

include('libreria/componentes/footer.php');
?>