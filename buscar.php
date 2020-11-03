<?php
session_start();
include('libreria/componentes/header.php');
?>
 <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Registro Paciente</h4>
                    <p class="card-description"> Por favor ingrese la cedula del paciente para realizar una busqueda rapida </p>
                    <form class="forms-sample" action="busqueda.php " method="POST">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Cedula</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="cedula" id="cedula" placeholder="cedula"required>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Buscar</button>
  
                    </form>
         
                  </div>
                </div>
              </div>
      
   
<?php

include('libreria/componentes/footer.php');
?>