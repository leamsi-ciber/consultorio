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
                        <h4 class="card-title">Consultas</h4>
                        <div>
                        <a  href="registroconsulta.php" class="btn btn-primary btn-fw">Nueva consulta</a>
                        </div><br>
                        
                        <table class="table table-dark">
                        <thead>
                            <tr>
                              
                                <th></th>
                                <th>Nombre</th>
                                <th>Costo</th>
                              
                               
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php
                            
                            
                            $con=conexion::instancia();
                            $sql ="select * from precioconsulta";
                          $result=  mysqli_query($con,$sql);
                           
                        
                            
                            $count = 0;

                                foreach($result as $data)
                                {
                                    
                                    $count++;
                                
                                    echo "
                                    
                                    <tr>
                                    
                                        <td>{$count}</td>

                                        <td>{$data['nombre']}</td>
                                        <td>{$data['monto']}</td>
                                        
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
<?php

include('libreria/componentes/footer.php');
