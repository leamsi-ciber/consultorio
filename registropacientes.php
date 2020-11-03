<?php
session_start();
include('libreria/componentes/header.php');
include('libreria/includes.php');
if($_POST){
    $fecha = $_POST['fecha'];
    $sangre = $_POST['sangre'];
    $apellido = $_POST['apellido'];
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $sexo = $_POST['sexo'];
    $telefono = $_POST['telefono'];

    $con=conexion::instancia();
    $sql = "insert into paciente (cedula, nombre, apellido,Fecha_na, sangre, sexo,telefono)
    values('$cedula','$nombre','$apellido', '$fecha','$sangre', '$sexo','$telefono')";
    mysqli_query($con,$sql);
    
}
?>
<div class="container">
 <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Registro de Pacientes</h4>
                    <p class="card-description"> Insertar datos</p>
                    <form class="forms-sample" method="POST">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Cedula</label>
                        <input type="text" name="cedula" class="form-control" id="exampleInputUsername1" placeholder="Nombre" required>
                      </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="exampleInputUsername1" placeholder="Nombre" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Apellido</label>
                        <input type="text" name="apellido" class="form-control" id="exampleInputUsername1" placeholder="Apellido" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Tipo Sangre</label>
                        <input type="text" name="sangre" class="form-control" id="exampleInputUsername1" placeholder="Tipo sangre" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Telefono</label>
                        <input type="text" name="telefono" class="form-control" id="exampleInputUsername1" placeholder="M o F" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Fecha Nacimiento</label>
                        <input type="date" name="fecha" class="form-control" id="exampleInputUsername1" placeholder="dd/mm/yyyy" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputUsername1">Sexo</label>
                        <input type="text" name="sexo" class="form-control" id="exampleInputUsername1" placeholder="M o F" required>
                      </div>
                  
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              </div>
              <script>
        $('#cedula').mask('000-000000-0')
    </script>
   
              <?php

include('libreria/componentes/footer.php');
?>