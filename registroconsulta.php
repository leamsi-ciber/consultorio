<?php
session_start();
include('libreria/componentes/header.php');
include('libreria/includes.php');
if($_POST){
 
    $costo=$_POST['costo'];
    $nombre=$_POST['nombre'];
    

 $con=conexion::instancia();
 $sql ="insert into usuarios (nombre, costo)
 values ( '$nombre','$costo')";
 mysqli_query($con,$sql);

 
}
      
 
 
     
?>
 <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Registro de Usuarios</h4>
                    <p class="card-description"> Insertar datos</p>
                    <form class="forms-sample" method="POST">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="exampleInputUsername1" placeholder="Nombre"required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">costo</label>
                        <input type="text" name="costo" class="form-control" id="exampleInputUsername1" placeholder="costo"required>
                      </div>
                    </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                   
                    </form>
                  </div>
                </div>
              </div>
<?php

include('libreria/componentes/footer.php');
?>
