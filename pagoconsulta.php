<?php
session_start();
include('libreria/componentes/header.php');
include('libreria/includes.php');
if($_POST){
  
    $estado = $_POST['estado'];
    $apellido = $_POST['apellido'];
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $monto = $_POST['costo'];

    $con=conexion::instancia();
    $sql = "insert into factura (cedula, apellido, costo,estado, nombre)
    values('$cedula','$apellido', '$monto','$estado','$nombre')";
    mysqli_query($con,$sql);
   
    
}
?>
<div class="container">
 <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Pago de consulta</h4>
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
                        <label for="exampleInputUsername1">Costo</label>
                        <input type="text" name="costo" class="form-control" id="exampleInputUsername1" placeholder="costo" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Estado</label>
                        <input type="text" name="estado" class="form-control" id="exampleInputUsername1" placeholder="estado" required>
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