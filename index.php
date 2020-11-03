<?php
session_start();
include('libreria/includes.php');
include('libreria/componentes/header.php');
if(isset($_SESSION['user'])){

  
}
else {
    header("Location:index.php");
}


?>


<div class="col-lg-8 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Historial Registrados</h4>
                        <br>
                        
                        <table class="table table-dark">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Cedula</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                              
                                <th>Fecha de Nacimiento</th>
                                <th>Tipo de sangre</th>
                                <th>Sexo</th>
                             
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php
                            
                            
                            $con=conexion::instancia();
                            $sql ="select * from paciente";
                          $result=  mysqli_query($con,$sql);
                           
                        
                            
                            $count = 0;

                                foreach($result as $data)
                                {
                                    
                                    $count++;
                                
                                    echo "
                                    
                                    <tr>
                                    
                                        <td>{$count}</td>";?>

                                        <td><img <?php if($data['sexo']=='m'){echo "src='images/faces-clipart/pic-1.png'";}else if($data['sexo']=='f'){echo"src='images/faces-clipart/pic-2.png'";}?>/></td>
                                        <?php
                                        echo"
                                        <td>{$data['cedula']}</td>
                                        <td>{$data['nombre']}</td>
                                        <td>{$data['apellido']}</td>
                                        <td>{$data['Fecha_na']}</td>
                                        <td>{$data['sangre']}</td>
                                        <td>{$data['sexo']}<td>
                                        
                                    </tr>
                                    
                                    
                                    ";
                                }
                            
                            ?>
                        </tbody>
                        </table>
                        <br>

<div class="col-lg-8 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Historial de Facturas</h4>
                        <br>
                        
                        <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Cedula</th>
                                <th>Nombre</th>
                                <th> Apellido</th>
                               
                                <th> Costo</th>
                                <th>Estado</th>
                                <th></th>
                           
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php
                            
                            $con=conexion::instancia();
                            $sql ="select * from factura";
                          $result=  mysqli_query($con,$sql);
                  
                        
                            
                            $count = 0;

                                foreach($result as $data)
                                {
                                    $count++;
                                    
                                    echo "
                                    
                                    <tr>
                                        
                                        <td>{$count}</td>
                                        <td>{$data['cedula']}</td>
                                        <td>{$data['nombre']}</td>
                                        <td>{$data['apellido']}</td>
                                    
                                        <td>{$data['costo']}</td>
                                        <td>{$data['estado']}</td>
                                       
                                        
                                        
                                    </tr>
                                    
                                    
                                    ";
                                }
                            
                            ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
    </div>
          </div>
 </div>
                    </div>
                    </div>
    </div>
          </div>
 </div>
<?php

include('libreria/componentes/footer.php');
