

<?php
session_start();
include('libreria/componentes/header.php');
include('libreria/includes.php');
if($_POST){
    $fecha = $_POST['fecha'];
    $paciente = $_POST['paciente'];
    $tipo = $_POST['tipo'];
    $receta = $_POST['receta'];
    $fecha2 = $_POST['fecha2'];
    $comentario = $_POST['comentario'];
    $motivo = $_POST['motivo'];

    $con=conexion::instancia();
    $sql = "insert into visitas ( fecha, motivo, comentario,receta,fecha_p,idpaciente)
    values('$fecha','$motivo','$comentario','$receta','$fecha2','$paciente')";
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
                        <input type="date" name="fecha" class="form-control" id="exampleInputUsername1" placeholder="dd/mm/yyyy" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">ID Paciente</label>
                        <input type="text" name="paciente" class="form-control" id="exampleInputUsername1" placeholder="paciente" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Comentario</label>
                        <input type="text" name="comentario" class="form-control" id="exampleInputUsername1" placeholder="Comentario" required>
                      </div>
                      <div class="form-group">
                      <label for="exampleInputUsername1">Motivo</label>
                        <input type="text" name="motivo" class="form-control" id="exampleInputUsername1" placeholder="Motivo" required>
                      </div>
                      <div class="form-group">
                      <label for="exampleTextarea1">Receta de medicamentos</label>
                        <textarea  name="receta" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Fecha de proxima Visita</label>
                        <input type="date" name="fecha2" class="form-control" id="exampleInputUsername1" placeholder="dd/mm/yyyy" required>
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