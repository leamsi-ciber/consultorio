<?php
session_start();
include('libreria/componentes/header.php');
include('libreria/includes.php');
if($_POST){
 
    $user=$_POST['username'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $pass=$_POST['password'];
    $pass = md5($pass);
    $tipo=$_POST['tipo'];
    
    $archivo =$_FILES['foto'];
    
 if($archivo['error']==0){
 move_uploaded_file($archivo['tmp_name'], "images/faces/{$nombre}.jpeg");
 
 }
 $con=conexion::instancia();
 $sql ="insert into usuarios (nombre, apellido, usuario, password, Tipo_user)
 values ( '$nombre','$apellido','$user','$pass','$tipo')";
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
                        <label for="exampleInputUsername1">Apellido</label>
                        <input type="text" name="apellido" class="form-control" id="exampleInputUsername1" placeholder="Apellido"required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Username</label>
                        <input type="text" name="username" class="form-control" id="exampleInputUsername1" placeholder="Username"required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Confirm Password</label>
                        <input type="password" name="confirmPass" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password"required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Tipo User</label>
                        <input type="text" name="tipo" class="form-control" id="exampleInputUsername1" placeholder="Username"required>
                      </div>
                      <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Subir Foto</label>
                    </div>
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
